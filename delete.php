<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            background-image: url("css.png");
            font-family: "Arial Rounded MT Bold",sans-serif;
            font-size: larger;
            line-height: 1.5rem;
        }
        :any-link{
            text-decoration: none;
            color: blue;
            font-weight: bolder;
        }
        ul{
            list-style-type: none;
        }
    </style>
</head>
<header>
    <div class="header">
        <p><h2>Delete Section</h2></p>
    </div>
    <div class="options">
        <ul>
            <li><a href="homepage.html">Home page</a></li>
        </ul>
    </div>
</header>
<body>
<?php
$filename1 = $_POST['name'];
$filename2 = ".txt";
$filename = $filename1 . $filename2;
if(file_exists($filename)){
    unlink($filename);
    echo "Data deleted successfully";
}
else{
    echo "Sorry your details are not matched or your profile is not created";
}

?>
</body>
</html>


