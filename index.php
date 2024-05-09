<?php
    // Function to shorten a URL
    function shortenURL($url, $password = null)
    {
        // API URL for shortening URL
        $api_url = 'https://snipurl.en.gp/fr/api/free?url='.urlencode($url)."".($password == null ? "" : "&password=".urlencode($password));
        // Get the result from the API
        $result = file_get_contents($api_url);

        // Check if there was an error in the API request
        if ($result === false) {
            return "Error querying the API";
        } else {
            return $result; // Return the shortened URL
        }
    }

    // Check if the URL parameter is set in the GET request
    if(isset($_GET['url'])) {
        $url = $_GET['url']; // Get the URL from the GET request
        $password = isset($_GET['password']) ? $_GET['password'] : null; // Get the password from the GET request, if set
        $response = shortenURL($url, $password); // Call the shortenURL function to get the shortened URL
        echo '<p>Shortened URL : '.$response.'</p>'; // Display the shortened URL
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shorten URL</title>
</head>
<body>

<form method="get">
    <label for="url">URL to shorten :</label> 
    <input type="text" id="url" name="url">
    <br>
    <label for="password">Password (optional) :</label>
    <input type="password" id="password" name="password">
    <br>
    <input type="submit" value="Shorten">
</form>

</body>
</html>
