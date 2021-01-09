<?php

$category = file('category.txt');
$news=array_reverse(file('news.txt'));
$profile = file('profile.txt');

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>

            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="template.php">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <?php
                        foreach ($category as $value) {
                            $data = explode(' @ ', $value);
                            ?>
                            <li><a href="template.php?id=<?php echo $data[0]; ?>"><?php echo $data[1]; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container text-center">
            <?php $data = explode(" @ ", $news[$_GET["id"]]); ?>
            <h1><?php echo $data[1]; ?></h1>
            <img src="img/<?php echo $data[2]; ?>" height="400" width="350" alt="Image">
            <p><?php echo $data[3]; ?></p>
        </div> 
        <footer class="container-fluid text-center">
            <p>Footer Text</p>
        </footer>

    </body>
</html>