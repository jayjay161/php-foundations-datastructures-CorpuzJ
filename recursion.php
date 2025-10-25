<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime & Manga Library</title>
</head>
<body>
<?php
$library = [
    "Shonen" => [
        "Action" => ["Naruto", "One Piece"],
        "Adventure" => ["Attack on Titan", "Hunter x Hunter"]
    ],
    "Seinen" => [
        "Psychological" => ["Death Note", "Tokyo Ghoul"],
        "Drama" => ["Vagabond", "Berserk"]
    ]
];

function displayLibrary($library, $indent = 0) {
    foreach ($library as $key => $value) {
        if (is_array($value)) {
            // Category
            echo str_repeat("&nbsp;", $indent) . "$key<br>";
            // Subcategory or books
            foreach ($value as $subKey => $subValue) {
                if (is_array($subValue)) {
                    // Subcategory
                    echo str_repeat("&nbsp;", $indent + 12) . "$subKey<br>";  //hooooooo napantay rajud!
                    foreach ($subValue as $book) {
                        echo str_repeat("&nbsp;", $indent + 23) . "$book<br>"; //dkfajfajnfkaj
                    }                                                                         //sana mabinat ug 86 ang grade and ave.<3
                }                                                                              
            }
        }
    }
}

// Call the function with initial indent 0
displayLibrary($library);
?>
</body>
</html>
