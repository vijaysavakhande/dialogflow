<?php 
$method = $_SERVER['REQUEST_METHOD'];
if ($method =='POST') {
  $request_body = file_get_contents('php://input');
  $json = json_decode($request_body,True);
  $city = $json['queryResult']['parameters']['geo-city'];
  $speech = $city.' Are you sure is this metro city?';  
  $response = new \stdClass();
  $response->speech = $speech;
  $response->type=0;
  header('Content-Type: application/json');
  echo json_encode(['messages'=>[$response]]);
}else{
  echo 'not a post method';
}

?>