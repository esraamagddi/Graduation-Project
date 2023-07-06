<!-- <?php

header("Content-Type:Application/json; Charset=UTF-8");
header("Access-Control-Allow-Origin:*");

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Start session
  session_start();
  $cookie=array('PHPSESSID'=>session_id());

  // Get name from POST data
  $name = json_decode(file_get_contents("php://input"));


  // Set response data
  $response = array('message' =>$name);

  // Return response as JSON
  header('Content-Type: application/json');

  $all=[$cookie,$response];

  // echo json_encode($all);
}
else {
  // Return error message
  $response = array('message' => 'Invalid request method');
  header('Content-Type: application/json');
  echo json_encode($response);
}


?> -->
