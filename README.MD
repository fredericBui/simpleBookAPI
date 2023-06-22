# Simple Book API

This project sets up a local server in PHP that responds to HTTP GET requests with a list of books in JSON format. Each book in the list includes an ID, title, author, genre, and synopsis.

## Getting Started

To run the project locally, please follow the instructions below.

### Prerequisites

Make sure you have the following software installed on your machine:

- PHP (version 7.0 or higher)

### Installation

1. Clone this repository to your local machine or download the source code as a ZIP file.

2. Open a terminal or command prompt and navigate to the project directory.

3. Start the PHP built-in server by running the following command:

`php -S localhost:8000`

4. This command starts the server and listens on port 8000.

Open a web browser and visit http://localhost:8000/books.php. You should see a list of books in JSON format displayed in the browser.

## Usage

### Retrieving all books

To retrieve all books, send an HTTP GET request to the following URL:

`http://localhost:8000/books.php`

The server will respond with a JSON array containing all the books in the following format:

````
[
{
"id": 1,
"title": "Book 1",
"author": "Author 1",
"genre": "Genre 1",
"synopsis": "Synopsis 1"
},
{
"id": 2,
"title": "Book 2",
"author": "Author 2",
"genre": "Genre 2",
"synopsis": "Synopsis 2"
},
...
]```

### Retrieving a specific book

To retrieve a specific book, append the id parameter to the URL. For example, to retrieve a book with ID 1, send an HTTP GET request to the following URL:

```http://localhost:8000/books.php?id=1```

If the book with the provided ID exists, the server will respond with the details of the book in JSON format. If the book is not found or the id parameter is missing, an appropriate error message will be returned.

## Contributing

Contributions to this project are welcome. If you find any issues or have suggestions for improvements, please submit a pull request or open an issue on the project's GitHub repository.

## License

This project is licensed under the MIT License.
````
