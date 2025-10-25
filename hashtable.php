<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Hash table (associative array) for anime/manga details
$bookInfo = [
    "Naruto" => ["author" => "Masashi Kishimoto", "year" => 1999, "genre" => "Action"],
    "One Piece" => ["author" => "Eiichiro Oda", "year" => 1997, "genre" => "Adventure"],
    "Attack on Titan" => ["author" => "Hajime Isayama", "year" => 2009, "genre" => "Dark Fantasy"],
    "Death Note" => ["author" => "Tsugumi Ohba", "year" => 2003, "genre" => "Psychological Thriller"],
    "Vagabond" => ["author" => "Takehiko Inoue", "year" => 1998, "genre" => "Historical Drama"]
];

function getBookInfo($title, $bookInfo) {
    if (array_key_exists($title, $bookInfo)) {
        echo "Title: $title<br>";
        echo "Author: " . $bookInfo[$title]["author"] . "<br>";
        echo "Year: " . $bookInfo[$title]["year"] . "<br>";
        echo "Genre: " . $bookInfo[$title]["genre"] . "<br>";
    } else {
        echo "Book not found<br>";
    }
}

// Example search
getBookInfo("Death Note", $bookInfo);
?>

    
</body>
</html>