<?php
// Include database configuration file
require_once 'dbConfig.php';

// Include URL Shortener library file
require_once 'Shortener.class.php';

// Initialize Shortener class and pass PDO object
$shortener = new Shortener($pdo);

// Long URL
$longURL = 'http://www.indiamart.com/fingent-global-solutions-private-limited/aboutus.html';

 
$shortURL_Prefix = 'http://localhost/shortner/redirect.php?c='; // without URL rewrite

try{
    // Get short code of the URL
    $shortCode = $shortener->urlToShortCode($longURL);
    
    // Create short URL
    $shortURL = $shortURL_Prefix.$shortCode;
    
    // Display short URL
    echo 'Short URL:  <a href="'.$shortURL.'" target = "_blank"> '.$shortURL.'</a>';

}catch(Exception $e){
    // Display error
    echo $e->getMessage();
}
?>