<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_id = $_POST['book_id'];
    $customer_name = $_POST['customer_name'];
    $book_author = $_POST['book_author']; // Ganti 'author_book' menjadi 'book_author'

    $order = "Book ID: $book_id, Nama Pelanggan: $customer_name, Penulis Buku: $book_author\n";
    file_put_contents('orders.txt', $order, FILE_APPEND);

    echo "Order placed successfully!";
}
?>
