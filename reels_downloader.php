<?php
// Function to get the Instagram Reels video URL
function getInstagramReelsUrl($url) {
    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    
    // Execute cURL request
    $response = curl_exec($ch);
    
    // Handle errors
    if(curl_errno($ch)) {
        return json_encode(['error' => 'Error: ' . curl_error($ch)]);
    }
    
    // Close cURL session
    curl_close($ch);

    // Parse the response to extract the video URL (using a regex pattern)
    if (preg_match('/"video_url":"(https:\/\/[^"]+)"/', $response, $matches)) {
        return json_encode(['video_url' => $matches[1]]);
    } else {
        return json_encode(['error' => 'Video URL not found']);
    }
}

// Check if URL parameter exists
if (isset($_GET['url'])) {
    $reelsUrl = $_GET['url']; // Get URL from the request parameter
    
    // Validate the Instagram Reels URL
    if (strpos($reelsUrl, "instagram.com/reel/") !== false) {
        // Get the video URL from the Instagram Reels page
        echo getInstagramReelsUrl($reelsUrl);
    } else {
        echo json_encode(['error' => 'Invalid Instagram Reels URL']);
    }
} else {
    echo json_encode(['error' => 'URL parameter is missing']);
}
?>