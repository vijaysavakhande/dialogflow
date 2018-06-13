<?php 
$method = $_SERVER['REQUEST_METHOD'];
if ($method =='POST') {
  $request_body = file_get_contents('php://input');
  $json = json_decode($request_body,True);
  print_r($json);
  // $text = $json->queryResult->parameters->{geo-city}
  
  // $response = new \stdClass();
  // $response->speech ="";
  // $response->displayText="";
  // $response->source="webhook";
  echo json_encode($response);
}else{
  echo 'not a post method';
}

?>