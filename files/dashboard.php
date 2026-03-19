<?php
$filesData = json_decode(file_get_contents('data/files.json'), true);

foreach ($filesData as $file) {
    echo "<div class='file-item'>";
    echo "<img src='" . $file['image_path'] . "' width='100'>";
    echo "<h3>" . $file['file_name'] . "</h3>";
    echo "<p>" . $file['description'] . "</p>";
    echo "<p>Price: ₹" . $file['price'] . "</p>";
    echo "<a href='pay.php?file_id=" . $file['id'] . "'>Buy Now</a>";
    echo "</div>";
}
?>