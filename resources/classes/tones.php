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
	Matthew Vale <github@mafoo.org>
*/

if (!class_exists('tones')) {
	class tones {

		//define variables
		public $db;
		private $tones;
		private $music_list;
		private $recordings_list;
		private $default_tone_label;
		
		//class constructor
		public function __construct() {
			//connect to the database if not connected
				if (!$this->db) {
					require_once "resources/classes/database.php";
					$database = new database;
					$database->connect();
					$this->db = $database->db;
				}

			//add multi-lingual support
				$language = new text;
				$text = $language->get();

			//get the tones
				$sql = "select * from v_vars ";
				$sql .= "where var_cat = 'Tones' ";
				$sql .= "order by var_name asc ";
				$prep_statement = $this->db->prepare(check_sql($sql));
				$prep_statement->execute();
				$tones = $prep_statement->fetchAll(PDO::FETCH_NAMED);
				unset ($prep_statement, $sql);
				foreach($tones as $tone) {
					$tone = $tone['var_name'];
					$label = $text['label-'.$tone];
					if ($label == "") {
						$label = $tone;
					}
					$tone_list[$tone] = $label;
				}
				$this->tones = $tone_list;
				unset($tone_list);
			
		}
		
		public function tones_list() {
			return $this->tones;
		}
	}
}

?>
