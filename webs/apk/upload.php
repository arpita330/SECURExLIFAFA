<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['zip_file'])) {
    $uploadDir = 'uploads/';
    $zipFile = $uploadDir . basename($_FILES['zip_file']['name']);

    if (move_uploaded_file($_FILES['zip_file']['tmp_name'], $zipFile)) {
        $extractDir = $uploadDir . pathinfo($zipFile, PATHINFO_FILENAME);
        mkdir($extractDir);
        
        $zip = new ZipArchive;
        if ($zip->open($zipFile) === TRUE) {
            $zip->extractTo($extractDir);
            $zip->close();

            // Run build script
            $output = shell_exec("sh build_apk.sh " . escapeshellarg($extractDir));
            
            echo json_encode(["status" => "success", "message" => "APK processing started!", "output" => $output]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to extract ZIP"]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to upload ZIP"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}
?>