<?php

	//application details
		$apps[$x]['name'] = "Multi Node Status";
		$apps[$x]['uuid'] = "caca8695-9ca7-b058-56e7-4ea94ea1c0e8";
		$apps[$x]['category'] = "Switch";;
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Displays system information such as RAM, CPU and Hard Drive information.";
		$apps[$x]['description']['es-cl'] = "Muestra información del sistema como RAM, CPU y Disco Duro";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['de-de'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['fr-fr'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-ch'] = "";
		$apps[$x]['description']['pt-pt'] = "Exibe informações do sistema, como memória RAM, CPU e informações do disco rígido.";
		$apps[$x]['description']['pt-br'] = "";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "system_multi_node_status";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "b7aea9f7-d3cf-711f-828e-46e56e2e5321";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
                $apps[$x]['permissions'][$y]['name'] = "multi_node_status";
                $apps[$x]['permissions'][$y]['groups'][] = "superadmin";

?>
