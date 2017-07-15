<?php
/*
	FusionPBX
	Version: MPL 1.1

	The contents of this file are subject to the Mozilla Public License Version
	1.1 (the "License"); you may not use this file except in compliance with
	the License. You may obtain a copy of the License at
	http://www.mozilla.org/MPL/

	Software distributed under the License is distributed on an "AS IS" basis,
	WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
	for the specific language governing rights and limitations under the
	License.

	The Original Code is FusionPBX

	The Initial Developer of the Original Code is
	Mark J Crane <markjcrane@fusionpbx.com>
	Portions created by the Initial Developer are Copyright (C) 2008-2012
	the Initial Developer. All Rights Reserved.

	Contributor(s):
	Mark J Crane <markjcrane@fusionpbx.com>
*/

//includes
	require_once "root.php";
	require_once "resources/require.php";
	require_once "resources/check_auth.php";

//check permissions
	if (permission_exists('call_center_agent_view')) {
		//access granted
	}
	else {
		echo "access denied";
		exit;
	}

//add multi-lingual support
	$language = new text;
	$text = $language->get();

//includes and title
	require_once "resources/header.php";
	$document['title'] = $text['title-call_center_agent_status'];
	require_once "resources/paging.php";

//get the agents from the database
	$sql = "select * from v_call_center_tiers ";
	$sql .= "where domain_uuid = '".$_SESSION['domain_uuid']."' ";
	$prep_statement = $db->prepare(check_sql($sql));
	$prep_statement->execute();
	$tiers = $prep_statement->fetchAll(PDO::FETCH_NAMED);
	if (count($tiers) == 0) {
		$per_queue_login = true;
	}
	else {
		$per_queue_login = false;
	}

//setup the event socket connection
	$fp = event_socket_create($_SESSION['event_socket_ip_address'], $_SESSION['event_socket_port'], $_SESSION['event_socket_password']);

//get the http post values and set them as php variables
	if (count($_POST) > 0) {
		foreach($_POST['agents'] as $row) {
			if (strlen($row['agent_status']) > 0) {
				//agent set status
					if ($fp) {
						//set the user_status
							if (!isset($row['queue_name'])) {
								$sql  = "update v_users set ";
								$sql .= "user_status = '".$row['agent_status']."' ";
								$sql .= "where domain_uuid = '".$domain_uuid."' ";
								$sql .= "and username = '".$row['agent_name']."' ";
								//echo $sql."\n";
								$prep_statement = $db->prepare(check_sql($sql));
								$prep_statement->execute();
							}
						//set the call center status
							if (!isset($row['queue_name'])) {
								if ($row['agent_status'] == "Do Not Disturb") {
									//set the default dnd action
										$dnd_action = "add";
									//set the call center status to Logged Out
										$cmd = "api callcenter_config agent set status ".$row['agent_name']."@".$_SESSION['domains'][$domain_uuid]['domain_name']." 'Logged Out'";
								}
								else {
									$cmd = "api callcenter_config agent set status ".$row['agent_name']."@".$_SESSION['domains'][$domain_uuid]['domain_name']." '".$row['agent_status']."'";
								}
								$response = event_socket_request($fp, $cmd);
							}
							//echo $cmd."\n";
							
						//set the agent status to available and assign the agent to the queue with the tier
							if (isset($row['queue_name']) && $row['agent_status'] == 'Available') {
								//set the call center status
								//$cmd = "api callcenter_config agent set status ".$row['agent_name']."@".$_SESSION['domain_name']." '".$row['agent_status']."'";
								//$response = event_socket_request($fp, $cmd);

								//assign the agent to the queue
								$cmd = "api callcenter_config tier add ".$row['queue_name']."@".$_SESSION['domain_name']." ".$row['agent_name']."@".$_SESSION['domain_name']." 1 1";
								//echo $cmd."<br />\n";
								$response = event_socket_request($fp, $cmd);
							}

						//un-assign the agent from the queue
							if (isset($row['queue_name']) && $row['agent_status'] == 'Logged Out') {
								$cmd = "api callcenter_config tier del ".$row['queue_name']."@".$_SESSION['domain_name']." ".$row['agent_name']."@".$_SESSION['domain_name'];
								//echo $cmd."<br />\n";
								$response = event_socket_request($fp, $cmd);
							}
							usleep(200);
					}

			}
		}
	}

//get the agents from the database
	$sql = "select * from v_call_center_agents ";
	$sql .= "where domain_uuid = '".$_SESSION['domain_uuid']."' ";
	$sql .= "order by agent_name ASC ";
	$prep_statement = $db->prepare(check_sql($sql));
	$prep_statement->execute();
	$agents = $prep_statement->fetchAll(PDO::FETCH_NAMED);

//get the agent list from event socket
	$switch_cmd = 'callcenter_config agent list';
	$event_socket_str = trim(event_socket_request($fp, 'api '.$switch_cmd));
	$agent_list = csv_to_named_array($event_socket_str, '|');
	//echo "<pre>\n";
	//print_r($call_center_agents);
	//echo "</pre>\n";

//get the agent list from event socket
	$switch_cmd = 'callcenter_config tier list';
	$event_socket_str = trim(event_socket_request($fp, 'api '.$switch_cmd));
	$call_center_tiers = csv_to_named_array($event_socket_str, '|');
	//echo "<pre>\n";
	//print_r($call_center_tiers);
	//echo "</pre>\n";

//get the call center queues from the database
	$sql = "select * from v_call_center_queues ";
	$sql .= "where domain_uuid = '".$_SESSION['domain_uuid']."' ";
	$sql .= "order by queue_name asc ";
	$prep_statement = $db->prepare(check_sql($sql));
	$prep_statement->execute();
	$call_center_queues = $prep_statement->fetchAll(PDO::FETCH_NAMED);
	unset ($prep_statement, $sql);

//get the agent status from mod_callcenter and update the agent status in the agents array
	$x = 0;
	foreach ($agents as $row) {
		//add the domain name
			$domain_name = $_SESSION['domains'][$row['domain_uuid']]['domain_name'];
			$agents[$x]['domain_name'] = $domain_name;

		//update the queue status
			$i = 0;
			foreach ($call_center_queues as $queue) {
				$agents[$x]['queues'][$i]['agent_name'] = $row['agent_name'];
				$agents[$x]['queues'][$i]['queue_name'] = $queue['queue_name'];
				$agents[$x]['queues'][$i]['queue_status'] = 'Logged Out';
				foreach ($call_center_tiers as $tier) {
					if ($queue['queue_name'] .'@'. $_SESSION['domain_name'] == $tier['queue'] 
						&& $row['agent_name'] .'@'. $_SESSION['domain_name'] == $tier['agent']) {
						$agents[$x]['queues'][$i]['queue_status'] = 'Available';
					}
				}
				$i++;
			}

		//update the agent status
			foreach ($agent_list as $r) {
				if ($r['name'] == $row['agent_name'].'@'.$domain_name) {
					$agents[$x]['agent_status'] = $r['status'];
				}
			}
		//increment x
			$x++;

	}
	//echo "<pre>\n";
	//print_r($agents);
	//echo "</pre>\n";

//set the row style
	$c = 0;
	$row_style["0"] = "row_style0";
	$row_style["1"] = "row_style1";

//show the content
	echo "<table width='100%' cellpadding='0' cellspacing='0' border='0'>\n";
	echo "<tr>\n";
	echo "<td width='50%' align='left' nowrap='nowrap'><b>".$text['header-call_center_agent_status']."</b></td>\n";
	echo "<td width='50%' align='right'>\n";
	echo "	<input type='button' class='btn' name='' alt='".$text['button-back']."' onclick=\"window.location='call_center_queues.php'\" value='".$text['button-back']."'>\n";
	echo "	<input type='button' class='btn' name='' alt='".$text['button-refresh']."' onclick=\"window.location='call_center_agent_status.php'\" value='".$text['button-refresh']."'>\n";
	echo "</td>\n";
	echo "</tr>\n";
	echo "<tr>\n";
	echo "<td align='left' colspan='2'>\n";
	echo $text['description-call_center_agent_status']."<br /><br />\n";
	echo "</td>\n";
	echo "</tr>\n";
	echo "</table>\n";

	echo "<form method='post' name='frm' action=''>\n";
	echo "<table width='100%' border='0' cellpadding='2' cellspacing='2'>\n";
	echo "<tr>\n";
	echo "	<th>".$text['label-agent']."</th>\n";
	echo "	<th>".$text['label-status']."</th>\n";
	echo "	<th>".$text['label-options']."</th>\n";
	echo "	<th>".$text['label-queues']."</th>\n";
	echo "</tr>\n";
	$x = 0;
	foreach($agents as $row) {
		$str = "<tr>\n";
		$str .= "		<td valign='top' class='".$row_style[$c]."'>".$row['agent_name']."&nbsp;</td>\n";

		//$str .= "	<td valign='top' class='".$row_style[$c]."'>".$row['agent_name']."&nbsp;</td>\n";
		$str .= "	<td valign='top' class='".$row_style[$c]."'>".$row['agent_status']."&nbsp;</td>\n";
		$str .= "	<td valign='top' class='".$row_style[$c]."' nowrap='nowrap'>";
		$str .= "		<input type='hidden' name='agents[".$x."][agent_name]' id='agent_".$x."_name' value='".$row['agent_name']."'>\n";
		$str .= "		<input type='hidden' name='agents[".$x."][id]' id='agent_".$x."_name' value='".$row['call_center_agent_uuid']."'>\n";
		//$str .= "		<input type='radio' name='agents[".$x."][agent_status]' id='agent_".$x."_status_no_change' value='' checked='checked'>&nbsp;<label for='agent_".$x."_status_no_change'>".$text['option-no_change']."</label>&nbsp;\n";
		$str .= "		<input type='radio' name='agents[".$x."][agent_status]' id='agent_".$x."_status_available' value='Available'>&nbsp;<label for='agent_".$x."_status_available'>".$text['option-available']."</label>&nbsp;\n";
		$str .= "		<input type='radio' name='agents[".$x."][agent_status]' id='agent_".$x."_status_logged_out' value='Logged Out'>&nbsp;<label for='agent_".$x."_status_logged_out'>".$text['option-logged_out']."</label>&nbsp;\n";
		$str .= "		<input type='radio' name='agents[".$x."][agent_status]' id='agent_".$x."_status_on_break' value='On Break'>&nbsp;<label for='agent_".$x."_status_on_break'>".$text['option-on_break']."</label>&nbsp;\n";
		//$str .= "		<input type='radio' name='agents[".$x."][agent_status]' id='agent_".$x."_status_dnd' value='Do Not Disturb'><label for='agent_".$x."_status_dnd'>&nbsp;".$text['option-do_not_disturb']."</label>\n";
		$str .= "	</td>\n";

		$str .= "	<td valign='top' class='".$row_style[$c]."' nowrap='nowrap'>";
		if (is_array($row['queues']) && $per_queue_login) {
			$str .= "		<table width='100%' border='0' cellpadding='2' cellspacing='2'>\n";
			$str .= "		<tr>\n";
			$str .= "			<th>".$text['label-agent']."</th>\n";
			$str .= "			<th width='100'>".$text['label-status']."</th>\n";
			$str .= "			<th>".$text['label-options']."</th>\n";
			$str .= "		</tr>\n";
			foreach ($row['queues'] as $queue) {
				$x++;
				$str .= "	<tr>\n";
				$str .= "		<td valign='top' class='".$row_style[$c]."'>\n";
				$str .= "			".$queue['queue_name']."\n";
				$str .= "		</td>\n";

				$str .= "		<td valign='top' class='".$row_style[$c]."'>\n";
				//.$row[queue_status]."&nbsp;
				if ($queue['queue_status'] == "Available") {
					$str .= "		".$text['option-available']."\n";
				}
				if ($queue['queue_status'] == "Logged Out") {
					$str .= "		".$text['option-logged_out']."\n";
				}
				$str .= "		</td>\n";

				$str .= "		<td valign='middle' class='".$row_style[$c]."' nowrap='nowrap'>";
				$str .= "			<input type='hidden' name='agents[".$x."][queue_name]' id='agent_".$x."_name' value='".$queue['queue_name']."'>\n";
				$str .= "			<input type='hidden' name='agents[".$x."][agent_name]' id='agent_".$x."_name' value='".$row['agent_name']."'>\n";
				$str .= "			<input type='hidden' name='agents[".$x."][id]' id='agent_".$x."_name' value='".$agent['call_center_agent_uuid']."'>\n";
				//$str .= "			<input type='radio' name='agents[".$x."][agent_status]' id='agent_".$x."_status_no_change' value='' checked='checked'>&nbsp;<label for='agent_".$x."_status_no_change'>".$text['option-no_change']."</label>&nbsp;\n";
				$str .= "			<input type='radio' name='agents[".$x."][agent_status]' id='agent_".$x."_status_available' value='Available'>&nbsp;<label for='agent_".$x."_status_available'>".$text['option-available']."</label>&nbsp;\n";
				$str .= "			<input type='radio' name='agents[".$x."][agent_status]' id='agent_".$x."_status_logged_out' value='Logged Out'>&nbsp;<label for='agent_".$x."_status_logged_out'>".$text['option-logged_out']."</label>&nbsp;\n";
				$str .= "		</td>\n";
				$str .= "	</tr>\n";
			}
			$str .= "		</table>\n";
		}
		$str .= "	</td>\n";
		$str .= "</tr>\n";
		if (count($_SESSION['domains']) > 1) {
			if ($row['domain_name'] == $_SESSION['domain_name']) {
				echo $str;
				if ($c==0) { $c=1; } else { $c=0; }
			}
		}
		else {
			echo $str;
			if ($c==0) { $c=1; } else { $c=0; }
		}
		$x++;
	} //end foreach
	unset($sql, $result, $row_count);

	echo "<tr>\n";
	echo "<td colspan='11' align='left'>\n";
	echo "	<table width='100%' cellpadding='0' cellspacing='0'>\n";
	echo "	<tr>\n";
	echo "		<td width='33.3%' nowrap>&nbsp;</td>\n";
	echo "		<td width='33.3%' align='center' nowrap>$paging_controls</td>\n";
	echo "		<td width='33.3%' align='right'>\n";
	echo "			<br />\n";
	echo "			<input type='submit' name='submit' class='btn' value='".$text['button-save']."'>\n";
	echo "		</td>\n";
	echo "	</tr>\n";
 	echo "	</table>\n";
	echo "</td>\n";
	echo "</tr>\n";

	echo "</table>";
	echo "<br><br>";
	echo "</form>\n";

//show the footer
	require_once "resources/footer.php";

?>
