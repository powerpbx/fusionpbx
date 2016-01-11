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
	The adapted code is a PowerPBX enhancement

	The Initial Developer of the Original Code is
	Mark J Crane <markjcrane@fusionpbx.com>
	Portions created by the Initial Developer are Copyright (C) 2008-2015
	the Initial Developer. All Rights Reserved.

	Contributor(s):
	Mark J Crane <markjcrane@fusionpbx.com>
	DevOps <devops@powepbx.org>
*/

	//Run once
	if ($domains_processed == 1) {

		//Add Backup settings to default settings
		$x = 0;
		$array[$x]['default_setting_category'] = 'backup';
		$array[$x]['default_setting_subcategory'] = 'path';
		$array[$x]['default_setting_name'] = 'array';
		$array[$x]['default_setting_value'] = $_SESSION['switch']['conf']['dir'];
		$array[$x]['default_setting_enabled'] = 'true';
		$array[$x]['default_setting_description'] = '';
		$x++;
		$array[$x]['default_setting_category'] = 'backup';
		$array[$x]['default_setting_subcategory'] = 'path';
		$array[$x]['default_setting_name'] = 'array';
		$array[$x]['default_setting_value'] = $_SESSION['switch']['storage']['dir'];
		$array[$x]['default_setting_enabled'] = 'true';
		$array[$x]['default_setting_description'] = '';
		$x++;
		$array[$x]['default_setting_category'] = 'backup';
		$array[$x]['default_setting_subcategory'] = 'path';
		$array[$x]['default_setting_name'] = 'array';
		$array[$x]['default_setting_value'] = $_SESSION['switch']['recordings']['dir'];
		$array[$x]['default_setting_enabled'] = 'true';
		$array[$x]['default_setting_description'] = '';
		$x++;
		$array[$x]['default_setting_category'] = 'backup';
		$array[$x]['default_setting_subcategory'] = 'path';
		$array[$x]['default_setting_name'] = 'array';
		$array[$x]['default_setting_value'] = $_SESSION['switch']['db']['dir'];
		$array[$x]['default_setting_enabled'] = 'true';
		$array[$x]['default_setting_description'] = '';
		$x++;
		$array[$x]['default_setting_category'] = 'backup';
		$array[$x]['default_setting_subcategory'] = 'path';
		$array[$x]['default_setting_name'] = 'array';
		$array[$x]['default_setting_value'] = $_SESSION['switch']['db']['dir'];
		$array[$x]['default_setting_enabled'] = 'true';
		$array[$x]['default_setting_description'] = '';

		$sql = "select * from v_default_settings ";
		$sql .= "where default_setting_category = 'backup' ";
		$prep_statement = $db->prepare(check_sql($sql));
		$prep_statement->execute();
		$default_settings = $prep_statement->fetchAll(PDO::FETCH_NAMED);

		$x = 0;
		foreach ($array as $row) {
			$found = false;
			foreach ($default_settings as $field) {
				if ($row['default_setting_subcategory'] == $field['default_setting_subcategory']) {
					$found = true;
					$break;
				}
			}
			if (!$found) {
				$orm = new orm;
				$orm->name('default_settings');
				$orm->save($array[$x]);
				$message = $orm->message;
			}
			$x++;
		}

	}

?>
