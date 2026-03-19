<?php
$filesData = json_decode(file_get_contents('data/files.json'), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fileName = $_FILES['file']['name'];
    $fileTmp = $_FILES['file']['tmp_name'];
    $image = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $filePath = 'uploads/' . $fileName;
    $imagePath = 'uploads/images/' . $image;

    move_uploaded_file($fileTmp, "../" . $filePath);
    move_uploaded_file($imageTmp, "../" . $imagePath);

    $newFile = [
        'id' => uniqid(),
        'file_name' => $fileName,
        'file_path' => $filePath,
        'price' => $price,
        'description' => $description,
        'image_path' => $imagePath
    ];

    $filesData[] = $newFile;
    file_put_contents('data/files.json', json_encode($filesData, JSON_PRETTY_PRINT));

    echo "<script>alert('File Uploaded Successfully!'); window.location.href='dashboard.php';</script>";
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="file" name="image" required>
    <input type="text" name="price" placeholder="Enter Price" required>
    <textarea name="description" placeholder="Enter Description" required></textarea>
    <button type="submit">Upload</button>
</form>
