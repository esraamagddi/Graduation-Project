 <?php
header("Content-Type:Application/json; Charset=UTF-8");
header("Access-Control-Allow-Origin:*");
function uploadFile($fileData, $path) {
    $files = @$fileData["files"];
    if ($files["name"] != '') {
        $fullpath = $path . $files["name"];
        if (move_uploaded_file($files['tmp_name'], $fullpath)) {
            return $fullpath;
        }
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fileUrl = uploadFile($_FILES, $_REQUEST['path']);
    if ($fileUrl) {
        echo json_encode(['success' => true, 'url' => $fileUrl]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to upload file.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}

// echo json_encode(array_keys((array)json_decode(file_get_contents("php://input"))));
// echo json_encode(json_decode(file_get_contents("php://input")));
// echo json_encode($_REQUEST['path']);
?>
