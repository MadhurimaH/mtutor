<?php 
if(count($viewmodel) > 0){
   foreach ($viewmodel as $key => $value) {
	$data[] = array('id' => $value['sub_id'], 'text' => $value['sub_name']);			 	
   } 
} else {
   $data[] = array('id' => '0', 'text' => 'No list Found');
}

// return the result in json
echo json_encode($data);

?>