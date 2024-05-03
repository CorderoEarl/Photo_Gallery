<!DOCTYPE html>
<html>
 <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="css/lightbox.css">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="js/lightbox.js"></script>

    <style>
        .thumbnail img{
            width: 350px;
            height: 200px;
        }
    </style>
 </head>

 <body>
    <nav class="navbar navbar-default">
        <div class="container"> 
            <div class="navbar-header">
                <div class="navbar-brand">Photo Gallery</div>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="pictures.php">Pictures</a></li>
                <li><a href="others.php">Others</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <div class="page-header">
            <h3>Photo Gallery</h3>
        </div>

        <div class="row">
            <div class="col-md-4">
                <a href="image/pic1.jpg" data-lightbox="gallery" data-title="My Photo 1" class="thumbnail">
                    <img src="image/pic1.jpg">
                </a>
                
            </div>
            <div class="col-md-4">
                <a href="image/pic2.jpg" data-lightbox="gallery" data-title="My Photo 2" class="thumbnail">
                    <img src="image/pic2.jpg">
                </a>
                
            </div>
            <div class="col-md-4">
                <a href="image/pic3.jpg" data-lightbox="gallery" data-title="My Photo 3" class="thumbnail">
                    <img src="image/pic3.jpg">
                </a>
                
            </div>
            <div class="col-md-4">
                <a href="image/pic4.jpg" data-lightbox="gallery" data-title="My Photo 4" class="thumbnail">
                    <img src="image/pic4.jpg">
                </a>
                
            </div>
            <div class="col-md-4">
                <a href="image/pic5.jpg" data-lightbox="gallery" data-title="My Photo 5" class="thumbnail">
                    <img src="image/pic5.jpg">
                </a>
                
            </div>
            <div class="col-md-4">
                <a href="image/pic6.jpg" data-lightbox="gallery" data-title="My Photo 6" class="thumbnail">
                    <img src="image/pic6.jpg">
                </a>
                
            </div>
        </div>
        
        <footer class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <p class="text-center" style="padding:10px;">Created by Earl Cordero</p>
            </div>
        </footer>

    </div>




 </body>
 </html>
