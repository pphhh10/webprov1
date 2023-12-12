<?php
require_once '../../dbh.classes.php';

$db = new Dbh();
$conn = $db->conn;

$sql = "SELECT * FROM book";
$all_book = $conn->query($sql);

if ($all_book === false) {
    die('Query failed: ' . $conn->errorInfo()[2]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebook Emporium</title>
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
            <a class="nav-item nav-link link-body-emphasis active" href="#">Home</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Trending</a>
            <a class="nav-item nav-link link-body-emphasis" href="/WEBPRO/php/Author/Authorpage.php">Author</a>
            <a class="nav-item nav-link link-body-emphasis" href="/WEBPRO/php/favpage.php">Favourite</a>
        </nav>
    </div>

    <!-- Main content -->
    <main>
        <div class="container">
            <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary image-container">
                <div class="col-lg-6 px-0">
                    <h1 id="changeColor" class="display-4 fst-italic">Chainsaw Man: The Chains that Bind, the Man that Breaks</h1>
                    <p class="lead my-3">Dive into the cutting-edge world of manga as we introduce the latest addition to our library – the bloody and unpredictable Chainsaw Man.</p>
                    <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
                </div>
            </div>
            <label for="colorPicker">Choose Text Color:</label>
            <input type="color" id="colorPicker">
        </div>
        <script src="Home.js"></script>

        <div class="album py-5 bg-body-tertiary">
            <h1>New Added Books</h1>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-2">
                    <?php while ($row = $all_book->fetch(PDO::FETCH_ASSOC)) { 
                      ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <a href="/WEBPRO/php/Bookpage.php?id=<?php echo urlencode($row["id"]); ?>">
                                    <img src="<?php echo $row["book_image"]; ?>" class="card-img-top" alt="Book Image">
                                </a>
                                <div class="card-body">
                                    <p class="book_name"><b><?php echo $row["book_name"]; ?></b></p>
                                    <p class="author_name"><?php echo $row["book_author"]; ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                                    </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    <?php } 
                    ?>
                </div>
            </div>
        </div>

        <?php
        // Reset the cursor of $all_book
        $all_book->execute();
        ?>

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

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
