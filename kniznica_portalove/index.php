<?php
include_once "db_connect.php";
$db = $GLOBALS["db"];

$bookItems = $db->getAllBooks();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--

    Template 2092 Shelf

    http://www.tooplate.com/view/2092-shelf

    -->
    <title>SHELF - Your Online Bookstore</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/tooplate-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <header class="tm-site-header">
        <h1 class="tm-site-name">Shelf</h1>
        <p class="tm-site-description">Your Online Bookstore</p>

        <nav class="navbar navbar-expand-md tm-main-nav-container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav" aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse tm-main-nav" id="tmMainNav">
                <ul class="nav nav-fill tm-main-nav-ul">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Catalogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Awards</a></li>
                    <li class="nav-item"><a class="nav-link" href="team.php">Our Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>

    </header>

    <div class="tm-main-content">
        <section class="tm-margin-b-l">
            <header>
                <h2 class="tm-main-title">Welcome to our bookstore</h2>
            </header>

            <p>Shelf HTML template is provided by Tooplate. Please tell your friends about it. Thank you. Images are from Unsplash website. In tincidunt metus sed justo tincidunt sollicitudin. Curabitur magna tellus, condimentum vitae consectetur id, elementum sit amet erat.</p>

            <div class="tm-gallery">
                <div class="row">
                    <?php
                    foreach ($bookItems as $bookItem) {
                        ?>
                        <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                            <a href="preview.php?id=<?php echo $bookItem["id"] ?>">
                                <div class="tm-gallery-item-overlay">
                                    <img src="<?php echo $bookItem["image"] ?>" alt="Image" class="img-fluid tm-img-center">
                                </div>

                                <p class="tm-figcaption"><?php echo $bookItem["name"] ?></p>
                            </a>
                        </figure>
                        <?php
                    }
                    ?>
                </div>
            </div>

            <nav class="tm-gallery-nav">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link active" href="#">1</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">2</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">3</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">4</a></li>
                </ul>
            </nav>
        </section>

        <section class="media tm-highlight tm-highlight-w-icon">

            <div class="tm-highlight-icon">
                <i class="fa tm-fa-6x fa-meetup"></i>
            </div>

            <div class="media-body">
                <header>
                    <h2>Need Help?</h2>
                </header>
                <p class="tm-margin-b">Curabitur magna tellus, condimentum vitae consectetur id, elementum sit amet erat. Phasellus arcu leo, sagittis fringilla nisi et, pulvinar vestibulum mi. Maecenas mollis ullamcorper est at dignissim.</p>
                <a href="" class="tm-white-bordered-btn">Live Chat</a>
            </div>
        </section>
    </div>

    <footer>
        Copyright &copy; <span class="tm-current-year">2018</span> Shelf Company

        - Designed by <a href="https://www.facebook.com/tooplate" target="_parent">Tooplate</a>
    </footer>
</div>

<!-- load JS files -->
<script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
<script src="js/popper.min.js"></script>                <!-- Popper (https://popper.js.org/) -->
<script src="js/bootstrap.min.js"></script>             <!-- Bootstrap (https://getbootstrap.com/) -->
<script>

    $(document).ready(function(){

        // Update the current year in copyright
        $('.tm-current-year').text(new Date().getFullYear());

    });

</script>

</body>
</html>