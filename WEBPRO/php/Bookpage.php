<?php
require_once '../dbh.classes.php';

$db = new Dbh();
$conn = $db->conn;

// Retrieve the book ID from the URL parameter
$book_id = isset($_GET['id']) ? $_GET['id'] : '';

// Fetch details from the book_description table based on the book ID
$sql = "SELECT * FROM book_description WHERE id = :book_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':book_id', $book_id);
$stmt->execute();

if ($stmt === false) {
    die('Query failed: ' . $conn->errorInfo()[2]);
}

// Check if the fetch operation was successful
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$row) {
    die('Book not found');
}

// Display book details
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['id']; ?> Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Home.css"> 
    <style>
        /* Add your custom styles here */

        .search-container {
            position: relative;
        }

        .search-bar {
            width: 0;
            overflow: hidden;
            transition: width 0.3s ease;
        }

        .search-bar input {
            width: 100%;
            padding: 5px;
        }

        .custom-signup-btn {
            margin-left: 10px;
        }

        .image-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
        }

        #changeColor {
            color: #007bff; /* Change color as needed */
        }

        .album {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .card {
            margin-bottom: 1.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .book-details-container {
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .book-details {
            flex: 3; /* 75% width for book details */
            padding: 20px;
        }

        .image-container {
            flex: 1; /* 25% width for the image */
            padding: 20px;
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        /* Styles for the "Sign up" Button */
      .custom-signup-btn {
        color: #fff; /* Text color for the button */
        background-color: #e44d26; /* Custom color for the "Sign up" button */
        border-color: #e44d26; /* Border color */
        transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
      }
      
      /* Add hover effect */
      .custom-signup-btn:hover {
        background-color: #c53c20; /* Darker color on hover */
        color: #fff; /* Change text color to white on hover */
      }
      
      /* Add click animation */
      .custom-signup-btn:active {
        transform: scale(0.98); /* Slightly scale down on click */
        background-color: #a8321a; /* Darker background color on click */
      }
      
      /* stylelint-disable stylistic/selector-list-comma-newline-after */
      
      .blog-header-logo {
        font-family: "Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
        font-size: 2.25rem;
      }
      
      .blog-header-logo:hover {
        text-decoration: none;
      }
      
      h1, h2, h3, h4, h5, h6 {
        font-family: "Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
      }
      
      .flex-auto {
        flex: 0 0 auto;
      }
      
      .h-250 { height: 250px; }
      @media (min-width: 768px) {
        .h-md-250 { height: 250px; }
      }
      
      /* Pagination */
      .blog-pagination {
        margin-bottom: 4rem;
      }
      
      /*
       * Blog posts
       */
      .blog-post {
        margin-bottom: 4rem;
      }
      .blog-post-meta {
        margin-bottom: 1.25rem;
        color: #727272;
      }
       /* Container for "About Author" section */
       .about-author-container {
            margin-top: 20px;
        }
    </style>
</head>

<body> 
    <div class="container">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="/WEBPRO/php/Profile/profile.php">Profile</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">Ebook Emporium</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center search-container">
                    <a class="link-secondary" href="#" aria-label="Search" onclick="toggleSearch()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                    </a>
                    <div class="search-bar">
                        <input type="text" placeholder="Search...">
                    </div>
                    <a class="btn btn-sm btn-outline-secondary custom-signup-btn" href="/WEBPRO/php/Signup/SignUp.php">Sign up</a>
                </div>
            </div>
        </header>
    </div>

    <script>
        function toggleSearch() {
            var searchContainer = document.querySelector('.search-container');
            var searchBar = document.querySelector('.search-bar');

            if (searchContainer.classList.contains('expanded')) {
                // Close the search bar
                searchContainer.classList.remove('expanded');
                searchBar.style.width = 0;
            } else {
                // Expand the search bar
                searchContainer.classList.add('expanded');
                searchBar.style.width = '200px'; // You can adjust the width as needed
            }
        }
    </script>

    <div class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-center">
            <a class="nav-item nav-link link-body-emphasis" href="/WEBPRO/php/Home/home.php">Home</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Trending</a>
            <a class="nav-item nav-link link-body-emphasis" href="/WEBPRO/php/Author/Authorpage.php">Author</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Favourite</a>
        </nav>
    </div>
    <main>
    <div class="book-details-container container">
        <div class="book-details">
            <h2><b>Book with id = <?php echo $row['id']; ?> details:(nanti gue ubah )</b></h2>
            <p><b>Author:</b> <?php echo isset($row['author']) ? $row['author'] : 'N/A'; ?></p>
            <p><b>Synopsis:</b> <?php echo isset($row['synopsis']) ? $row['synopsis'] : 'N/A'; ?></p>
            <p><b>ISBN:</b> <?php echo isset($row['isbn']) ? $row['isbn'] : 'N/A'; ?></p>
            <p><b>Year:</b> <?php echo isset($row['year']) ? $row['year'] : 'N/A'; ?></p>
            <form action="home.php">
                <br><button class="btn btn-primary">Back to Home Page</button>
            </form>
        </div>
        <div class="image-container">
            <!-- Assuming your image is stored in the 'image' column of the database -->
            <img src="<?php echo isset($row['book_image']) ? $row['book_image'] : 'N/A'; ?>" class="card-img-top" alt="Book Image">
        </div>
    </div>
<!-- Container for "About Author" section -->
<div class="about-author-container container">
        <h3>About Author</h3>
        <!-- Add content about the author here -->
    </div>
    </main>
    <footer class="text-body-secondary py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">footer here</p>
            <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>
</body>
</html>