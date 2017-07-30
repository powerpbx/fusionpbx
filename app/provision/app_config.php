<?php

	//application details
		$apps[$x]['name'] = "Provision";
		$apps[$x]['uuid'] = "abf28ead-92ef-3de6-ebbb-023fbc2b6dd3";
		$apps[$x]['category'] = "Switch";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Writes the provisioning files from templates.";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Schreibt die Dateien für die Bereitstellung aus den Vorlagen.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "Schreibt die Dateien für die Bereitstellung aus den Vorlagen.";
		$apps[$x]['description']['es-cl'] = "";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "Ecrit les fichiers de provisioning à partir des modèles.";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['pt-pt'] = "";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//permission details
		//$apps[$x]['permissions'][0]['name'] = "zzz";
		//$apps[$x]['permissions'][0]['groups'][] = "admin";
		//$apps[$x]['permissions'][0]['groups'][] = "superadmin";

	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "931f9369-9aac-4620-8d4b-7d2bf642b1d2";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "enabled";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3790e46b-ef9e-4cdc-bfd2-6b3708751843";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "auto_insert_enabled";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "27b7ccfd-58d7-409c-80ff-cca014349d70";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "http_auth_type";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "digest";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c6a5b05b-210d-484f-bbb6-c1dd2223992e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "http_auth_username";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "ed380d7d-b3b8-40b4-8528-f10d521ddef0";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "http_auth_password";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c998c762-6a43-4911-a465-a9653eeb793d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "http_auth_disable";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "d376fe0f-fb89-4418-8fb4-590e4cac483f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "cidr";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a5323190-b733-49c1-99c4-396ab8950bb8";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "admin_name";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "ae3f809e-81af-4ed4-82f7-275251210d3a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "admin_password";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "cd2173be-aa43-4fd2-9c75-02f49c199485";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "path";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "559cd2d6-8ca0-4e6e-ae9d-565c8eed898d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "voicemail_number";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "*97";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
<<<<<<< HEAD
=======
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c104cf6e-722b-4994-8f3e-2a368aa11715";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "outbound_proxy_primary";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "ebfc19c9-cec1-4596-a0ee-582d3f4a0392";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "outbound_proxy_secondary";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a9dc7f4a-0a19-40cb-829a-093bf81d00db";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "line_sip_port";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "5060";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "472300e4-267a-4f0d-83ab-04d2017c7d0f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "line_sip_transport";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "tcp";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "5bc38b86-089f-44cb-9fff-38be38c497e8";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "line_register_expires";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "120";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "1752b247-873b-4d41-9846-b9df93efe8df";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_gmt_offset";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "3600 * GMT offset";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "098b2abd-3af3-4104-8fba-fabf9573f925";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_digitmap";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "[*]xxxx|[2-9]11|0T|011xxx.T|[0-1][2-9]xxxxxxxxx|[2-9]xxxxxxxxx|[1-9]xxT|**x.T";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "5aa7f396-d742-48f1-b53f-c609b9a6759a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "daylight_savings_start_month";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "7d742914-9c55-4cee-a295-c19501389f41";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "daylight_savings_start_day";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "13";
=======
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "12";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "ef0ad392-8956-4355-bf44-48d8712c74c1";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "daylight_savings_start_weekday";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "7";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "7b444c2f-bed7-4da5-8cf3-4cc79df8625f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "daylight_savings_start_time";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "2";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "f8e7b78b-1b84-42da-9e14-ec03dbb67c52";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "daylight_savings_stop_month";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "11";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "6f4a9657-e130-4003-bc96-22a1312d76f4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "daylight_savings_stop_day";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "6";
=======
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "5";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "e7942398-3d32-4a32-924f-e61bf31299fa";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "daylight_savings_stop_weekday";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "7";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "d3e72ae2-b887-443d-8523-96726343bb55";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "daylight_savings_stop_time";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "2";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "931d6cc7-ca82-4813-ae92-7015e0c2ea1b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "http_domain_filter";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "fc2fa8cd-b14e-48e3-99bd-7c01c9d6208d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_time_zone";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "-6";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Time zone ranges from -11 to +12";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "7f4a1607-4cbe-49f5-8cd2-6d599b89bd9b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_time_format";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "0-12 Hour, 1-24 Hour";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "166b27d1-1860-4154-88d3-5e15781e7bbb";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_date_format";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "0-WWW MMM DD (default), 1-DD-MMM-YY, 2-YYYY-MM-DD, 3-DD/MM/YYYY, 4-MM/DD/YY, 5-DD MMM YYYY, 6-WWW DD MMM";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "05bcbb47-06f6-4c81-a1c9-cdf2982d60a7";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_rport";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Send the response back to the source it came from.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "70894b7b-2edd-41ad-8526-060589df4e11";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_session_timer";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "SIP Session Timers";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "aa200d6f-c048-4203-9838-8dd05fa31bd5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_retransmission";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Retransmission";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "6c4430f6-3713-4c8b-9da3-eaf1705d7dc3";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "contact_users";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c5196771-f408-40b3-81c7-b4ce525620c3";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "contact_groups";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "8854358d-c6a4-4eeb-b21b-37ced80a4fbb";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "contact_extensions";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "allow extensions to be provisioned as contacts as $extensions in provision templates";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "d157078e-b363-4f34-a6d4-8a86990a40b7";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "number_as_presence_id";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "48dd60fe-d7de-417c-85c4-2d2d897a709c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "ntp_server_primary";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "pool.ntp.org";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "7bcc3c26-ac55-4934-be9f-e0edfbc7193b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "ntp_server_secondary";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "2.us.pool.ntp.org";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "da21eec7-699b-4a8b-a5e5-30ce118aaf8c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "spa_time_zone";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "GMT-07:00";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a6529f0e-9d8b-43b9-b487-db42b9b6be25";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "spa_time_format";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "12hr";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "12hr,24hr";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "58c764a9-4f71-4cd2-a44a-1ab52990b97f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "spa_date_format";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "day/month";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9c9886a0-92f6-4dd7-8c1b-d04f240d9a9b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "spa_back_light_timer";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "30 s";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "7c7fb3c1-3796-4c5f-b090-2aec955e023b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "spa_handle_via_rport";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "Yes";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "8311d0c9-73ae-4d49-9036-e2f649586b5b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "spa_insert_via_rport";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "Yes";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "72de5cdf-31f8-4d4b-b94b-468be0aa7a3d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "spa_dial_plan";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(*xxxxxxx|*xxxxxx|*xxxxx|*xxxx|*xxx|*xx*|*x|**xxxxx|**xxxx|**xxx|**xx|[3469]11|0|00|[2-9]xxxxxx|1xxx[2-9]xxxxxxS0|xxxxxxxxxxxx.)";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "bf122bc9-c9bf-497c-9dda-95d125293eaf";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_srtp_encryption";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "f0704072-c3d9-48df-b89b-2aea6035b3c4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_call_waiting";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Call Waiting 1=enabled 0=disable";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "564c50ee-4403-4e26-a30b-637f661db389";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "spa_call_waiting";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "Yes";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Call Waiting Yes=enabled No=disable";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "8fc369c3-bd6e-4fbb-957c-681de8a325fc";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "snom_call_waiting";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "on";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Call Waiting on=enabled off=disable visual only and ringer";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "096ef50c-3ff4-4a1f-bc37-79876a7eb832";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "polycom_call_waiting";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Call Waiting 1=enabled 0=disable";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "bf083e2c-ad73-48ba-a981-9e1c92b2554e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_call_waiting";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Call Waiting 0=enabled 1=disable";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "203711b9-1d2a-4b52-9d8c-d6f23b451d8f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "nway_conference";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "N-Way conferencing for devices supporting network conference uri";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "5f97afa2-b8ae-45fc-a47c-4131b6b4e1fd";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "contact_grandstream";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable Address Book for Grandstream based on users and groups assigned to contact.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3a8841f3-e1c0-4eb1-abd3-068a3e3701a5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_gxp_time_zone";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_gxp_time_zone";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "PST8PDT";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "See provision profile for codes.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "bce5c360-ec90-468b-9bed-aa5ceabfe87d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_check_sip_user_id";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_check_sip_user_id";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "GXV Android phones - fix auto-ring bug.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "4965e699-65a2-4309-b30c-6c6aae9c5e60";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_config_server_path";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_config_server_path";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "none";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "mydomain.com/provision to Fusionpbx provisioning. Phones will use firmware url if this is set to: none";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "eb4ad508-aab8-478c-a42c-71f02f5e9f3e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_dns_mode_1";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_dns_mode_1";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "DNS Mode 0=A; 1=SRV; 2=NAPTR/SRV;";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0d6fb5f8-6ec8-4495-b99a-fff6e7a053e8";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_dns_mode_2";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_dns_mode_2";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "DNS Mode 0=A; 1=SRV; 2=NAPTR/SRV;";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "1d1d4b7c-2cd2-474b-8cdf-8f5b8842a9e5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_firmware_path";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_firmware_path";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "mydomain.com/provision";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Grandstream firmware and provision.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "712daa4c-d657-4ed1-85f6-9134bef2969d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_global_contact_groups";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_global_contact_groups";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "contacts_elementary,contacts_facilities,contacts_other,contacts_secondary";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "List of contact groups that every phone will have access to.  Namely building sites.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "daeec650-12ab-47b7-a079-d274beee66f5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_lan_port_vlan";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_lan_port_vlan";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Default VLAN for phone LAN port.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a3adbb11-4e9f-4a56-86f8-0fefa5fb8c1d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_ldap_base_dn";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_base_dn";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "dc=mydomain,dc=com";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Base DN";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2d820643-b2ad-4824-946e-540d800ebd82";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_ldap_display_name";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "givenName sn title";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Which named attributes to display on device.  Must be pulled in through gs_ldap_name_attr.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "108f9c23-d44b-41f0-b332-ef9d586ecb8d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_ldap_mail_attr";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_display_name";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "givenName sn title";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Which named attributes to display on device.  Must be pulled in through grandstream_ldap_name_attr.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "108f9c23-d44b-41f0-b332-ef9d586ecb8d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_mail_attr";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "mail";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Mail attribute returned to phone";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a8acdbb0-98de-48d6-9d6d-1f7961a50a6b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_ldap_mail_filter";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_mail_filter";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(mail=%)";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Search filter for mail lookups";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3f1fa270-7a73-41b0-8210-8a9e9295f658";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_ldap_name_attr";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_name_attr";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "givenName sn title mail";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "The NAME attributes returned in the LDAP search result available to device";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "72b87ed4-588c-4706-a221-e15d5fcaa79d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_ldap_name_filter";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_name_filter";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(cn=%)";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Search filter for name lookups";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "902d7bd7-4040-4082-a6ab-737f5f6e76a0";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_ldap_number_attr";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_number_attr";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "telephoneNumber mobile homePhone";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Number attributes returned to the phone.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "7f123561-b35f-475b-b3c7-202df5be63b6";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_ldap_number_filter";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_number_filter";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(|(telephoneNumber=%)(homePhone=%)(moblie=%))";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Search filter for number lookups.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "33728232-dd89-4e30-8bc9-379891f2696b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_ldap_password";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_password";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "super-secret";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Ldap bind user password.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "614745a2-2441-48f7-a62d-e0dc098c7db0";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_ldap_server";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_server";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "mydomain.com";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Ldap server host name";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c5d91dcd-cc74-4bc9-a3a8-e3b8ee5bd1a6";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_ldap_user_base";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_user_base";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "ou=users,dc=mydomain,dc=com";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Ldap base for users.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "35dfa15a-1bfb-43e1-ba91-79c78dc89f04";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_ldap_username";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_username";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "cn=pbxadmin,dc=mydomain,dc=com";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Ldap server bind username";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "66d886c4-2cbb-4b4d-8667-f68de7d998e6";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_nat_traversal_1";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_nat_traversal_1";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "NAT Traversal Acct1. 0 - No, 1 - STUN, 2 - keep alive, 3 - UPnP, 4 - Auto, 5 - VPN";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "f7bf7fb8-5d2a-46a8-b218-32826c29fd53";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_phonebook_download_interval";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_phonebook_download_interval";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "720";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "0=disabled, 5-720 minutes";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "66c37aae-8381-460d-bac3-d08fea5d3217";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_phonebook_xml_server_path";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_phonebook_xml_server_path";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "mydomain.com/provision/pb";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Grandstream Phonebook Server Path - NOTE template adds MAC on the end of this if contact_grandstream is enabled.  This also requires nginx rewrite rules for phonebook.xml";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "00f51316-4405-4450-b619-12e0b2594e1a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_qos_rtp";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_qos_rtp";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "5";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Layer 2 QoS 802.1p Priority Value for RTP media";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "4e1e89b8-f114-4580-944a-2537eebb0915";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_qos_sip";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_qos_sip";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Layer 2 QoS 802.1p Priority Value for SIP signaling";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "be807a0d-d939-484a-b34a-5605c28b7e11";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_sip_only_known_servers";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_sip_only_known_servers";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "GXV Android phones - fix auto-ring bug.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "40435232-cdc7-412a-8927-892f2bd44bda";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_stun_server";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_stun_server";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "mydomain.com";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Bug in Grandstream where null stun_server defaults to sip server/port";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "6dbe4a02-33a3-4c1d-9145-0b8d6a5b8c81";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_validate_incoming_sip";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_validate_incoming_sip";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "GXV Android phones - fix auto-ring bug.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0971caf6-679a-4442-a16f-e729f2f402d7";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
<<<<<<< HEAD
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "gs_wallpaper_url";
=======
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_wallpaper_url";
>>>>>>> upstream/master
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://mydomain.com/files/wallpaper.jpg";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Wallpaper Image JPEG 480x272 16-bit depth dithered";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "b20b6547-14a8-416b-a5b1-990524a1afac";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "vtech_vlan_wan_enable";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable vlan=1";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "cfa6d612-906d-414e-9e1f-639e2eaa493e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "vtech_vlan_wan_id";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "VLAN ID";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "ee208229-d66c-46b6-9286-3cd4edda7628";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "vtech_vlan_wan_priority";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "VLAN Priority";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2c3445ff-0339-43d4-8762-3c87ec37be57";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_outbound_proxy_fallback_interval";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3600";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Integer from 0 to 65535";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "78f05ec5-d59c-4033-aeb5-62c9f46999cb";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_rfc2543_hold";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Default 0";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "be02b916-3419-4bc7-881e-46711134577c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_blf_led_mode";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "The value is 0(default) or 1.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2f5e8429-6890-4da7-84ae-65c9c29b5091";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_trust_ctrl";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "(0-Disabled;1-Enabled)";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "561035ed-e388-4d5e-888d-367455faa05c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_direct_ip_call_enable";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "(0-Disabled;1-Enabled) ";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c45264b7-6e85-42e4-b245-f22caff091d4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_hide_feature_access_codes_enable";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "(0-Disabled;1-Enabled)";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "ada36bd5-51ab-4bf8-a2ad-bc39671b2a3a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_missed_call_power_led_flash_enable";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "(0-Disabled:power indicator LED is off;1-Enabled:power indicator LED is solid red)";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "fb13e647-ca3f-4da6-901c-584b8cde4055";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_voice_mail_popup_enable";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Display Voice Mail Popup";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "dc4a391f-25b7-44bb-accb-efb23f20662c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_missed_call_popup_enable";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Display Missed Call Popup";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "85c7d304-2c91-447d-b139-c05d2499ea7d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_cid_source";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "The type of SIP header(s) to carry the caller ID; 0-FROM (default), 1-PAI 2-PAI-FROM, 3-PRID-PAI-FROM, 4-PAI-RPID-FROM, 5-RPID-FROM";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "6fd955ef-2f65-41f0-84cf-5b3ad917cc20";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_dtmf_hide";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " 0-Disabled 1-Enabled";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "968c9f53-305c-4fbd-a7dd-4dd6099e829e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "yealink_sip_listen_port";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "5060";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = " 5060 default";

?>
