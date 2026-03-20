<?php
// Configuration
$uploadDir = 'public_html/uploads/';  // Must be inside `public_html/`
$maxFileSize = 100 * 1024 * 1024; // 100MB
$extractDir = 'public_html/uploads/extracted/'; // Public extraction folder

// Ensure directories exist
if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
if (!is_dir($extractDir)) mkdir($extractDir, 0777, true);

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['zipfile'])) {
    $file = $_FILES['zipfile'];
    
    // Validate file type and size
    $allowedTypes = ['application/zip', 'application/x-zip-compressed', 'multipart/x-zip'];
    if (!in_array($file['type'], $allowedTypes)) exit("Only ZIP files allowed!");
    if ($file['size'] > $maxFileSize) exit("File too large! Max 100MB.");

    // Generate unique file name and move the uploaded ZIP
    $zipName = uniqid('zip_', true) . '.zip';
    $zipPath = $uploadDir . $zipName;

    if (move_uploaded_file($file['tmp_name'], $zipPath)) {
        // Extract ZIP to public directory
        $zip = new ZipArchive;
        if ($zip->open($zipPath) === TRUE) {
            $folderName = uniqid('extracted_');
            $extractPath = $extractDir . $folderName;
            mkdir($extractPath, 0777, true);
            $zip->extractTo($extractPath);
            $zip->close();
            echo "Upload & Extraction Successful! <br>";
        } else {
            echo "ZIP Extraction Failed!";
        }
    } else {
        echo "Upload failed!";
    }
}

// Display PHP file source code
if (isset($_GET['view'])) {
    $file = $_GET['view'];
    if (file_exists($file) && strpos($file, $extractDir) === 0) {
        highlight_file($file);
        exit;
    } else {
        exit("Invalid File Access!");
    }
}

// List extracted folders
$folders = array_filter(glob($extractDir . '*'), 'is_dir');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public ZIP File Host & Runner</title>
</head>
<body>
    <h2>Upload a ZIP File (Max: 100MB)</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="zipfile" required>
        <button type="submit">Upload & Extract</button>
    </form>

    <h2>Extracted PHP Files - Public Access</h2>
    <ul>
        <?php foreach ($folders as $folder): ?>
            <?php
            $phpFiles = glob("$folder/*.php");
            foreach ($phpFiles as $phpFile):
                $publicUrl = str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath($phpFile));
            ?>
                <li>
                    <a href="<?= $publicUrl ?>" target="_blank">Run: <?= basename($phpFile) ?></a> | 
                    <a href="?view=<?= urlencode($phpFile) ?>" target="_blank">View Code</a>
                </li>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>