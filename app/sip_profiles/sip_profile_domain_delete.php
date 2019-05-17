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
	Portions created by the Initial Developer are Copyright (C) 2016
	the Initial Developer. All Rights Reserved.

	Contributor(s):
	Mark J Crane <markjcrane@fusionpbx.com>
*/

//includes
	require_once "root.php";
	require_once "resources/require.php";

//check permissions
	require_once "resources/check_auth.php";
	if (permission_exists('sip_profile_domain_delete')) {
		//access granted
	}
	else {
		echo "access denied";
		exit;
	}

//add multi-lingual support
	$language = new text;
	$text = $language->get();

//delete the data
	if (is_uuid($_GET["id"])) {

		//get the id
			$id = $_GET["id"];

		//get the details of the sip profile
			$sql = "select * from v_sip_profile_domains ";
			$sql .= "where sip_profile_domain_uuid = '$id' ";
			$prep_statement = $db->prepare(check_sql($sql));
			$prep_statement->execute();
			$result = $prep_statement->fetchAll();
			if (is_array($result)) {
				foreach ($result as &$row) {
					$sip_profile_uuid = $row["sip_profile_uuid"];
				}
			}
			unset ($prep_statement);

		//delete sip_profile_domain
			$sql = "delete from v_sip_profile_domains ";
			$sql .= "where sip_profile_domain_uuid = '$id' ";
			$prep_statement = $db->prepare(check_sql($sql));
			$prep_statement->execute();
			unset($sql);
	}

//redirect the user
	message::add($text['message-delete']);
	header('Location: sip_profile_edit.php?id='.$sip_profile_uuid);

?>
