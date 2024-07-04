document.addEventListener('DOMContentLoaded', () => {
    fetch('books.php')
        .then(response => response.json())
        .then(books => {
            const bookList = document.querySelector('.book-list');
            books.forEach(book => {
                const bookItem = document.createElement('div');
                bookItem.classList.add('book-item');
                bookItem.innerHTML = `
                    <img src="${book.image}" alt="${book.title}">
                    <h3>${book.title}</h3>
                    <p>Pengarang: ${book.author}</p>
                    <p>ID Buku: ${book.id}</p>
                `;
                bookList.appendChild(bookItem);
            });
        })
        .catch(error => console.error('Error fetching books:', error));
});
