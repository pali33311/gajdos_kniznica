<?php
include_once "db_connect.php";
$db=$GLOBALS["db"];

$bookElementDetails = $db->getBookDetails($_GET['id']);
$categories = $db->getCategories($_GET['id']);
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
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link active" href="preview.php">Catalogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="preview.php">Awards</a></li>
                            <li class="nav-item"><a class="nav-link" href="team.php">Our Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>    
                </nav>
                
            </header>
            
            <div class="tm-main-content no-pad-b">
                    
                <section class="row tm-item-preview">
                    <div class="col-md-6 col-sm-12 mb-md-0 mb-5">
                        <img src="<?php echo $bookElementDetails[0]['image']; ?>" alt="Image" class="img-fluid tm-img-center-sm" width="480">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h2 class="tm-blue-text tm-margin-b-p"><?php echo $bookElementDetails[0]['name']; ?></h2>
                        <?php echo $bookElementDetails[0]['about']; ?>
                        <p class="tm-blue-text tm-margin-b-s">Categories: <?php
                                                                                foreach($categories as $category) {
                                                                            ?>
                                                                                    <?php echo $category['category']; ?>
                                                                            <?php
                                                                                }
                                                                            ?></p>
                        <p class="tm-blue-text tm-margin-b-s">Views: <?php echo $bookElementDetails[0]['views']; ?></p>
                        <p class="tm-blue-text tm-margin-b">Rating: <?php
                                                                        $n = $bookElementDetails[0]['rating'];
                                                                        for ($i = 0; $i < $n; $i++) {
                                                                            echo '<img src="img/star.png" alt="Star image">';
                                                                        }
                                                                    ?></p>
                        <a href="#" class="tm-btn tm-btn-gray tm-margin-r-20 tm-margin-b-s">Preview</a><a href="#" class="tm-btn tm-btn-blue">Download</a>
                    </div>
                </section>

                <div class="tm-gallery no-pad-b">
                    <div class="row">
                        <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item mb-5">
                            <a href="preview.html">
                                <div class="tm-gallery-item-overlay">
                                    <img src="img/image-06.jpg" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption no-pad-b">Suspendisse suscipit</p>
                            </a>
                        </figure>
                        <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item mb-5">
                            <a href="preview.html">
                                <div class="tm-gallery-item-overlay">
                                    <img src="img/image-03.jpg" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption no-pad-b">Cras non augue</p>
                            </a>
                        </figure>
                        <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item mb-5">
                            <a href="preview.html">
                                <div class="tm-gallery-item-overlay">
                                    <img src="img/image-08.jpg" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption no-pad-b">Vivamus facilisis</p>
                            </a>
                        </figure> 
                        <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item mb-5">
                            <a href="preview.html">
                                <div class="tm-gallery-item-overlay">
                                    <img src="img/image-05.jpg" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption no-pad-b">Quisque velit</p>
                            </a>
                        </figure>
                    </div>   
                </div>                    
                            
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