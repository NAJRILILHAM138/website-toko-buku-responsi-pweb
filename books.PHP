<?php
$books = [
    ["id" => "112233", "title" => "Buku politik", "author" => "Dania", "image" => "b1.jpg"],
    ["id" => "223344", "title" => "Buku Cerpen", "author" => "Fatur", "image" => "b2.jpeg"],
    ["id" => "445566", "title" => "Buku Komik", "author" => "Ilham", "image" => "b3.jpeg"]
];

// Mendapatkan URL root dari server
$base_url = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$base_url .= "://".$_SERVER['HTTP_HOST'];
$base_url .= dirname($_SERVER['REQUEST_URI']);

// Menambahkan path gambar ke setiap buku
foreach ($books as &$book) {
    $book['image'] = $base_url . '/images/' . $book['image'];
}

header('Content-Type: application/json');
echo json_encode($books);
?>
