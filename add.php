<html>
<style>
    body{
        text-align: center;
    }
    button{
        background-color: azure;
    }
    ul{
        list-style-type: none;
    }
</style>
<body>
<div class="options">

    <ul>
        <li><a href="homepage.html">Home page</a></li>
        <li><a href="add.html">Add Details </a></li>
        <li><a href="edit.html">Edit Details </a></li>
    </ul>
</div>

Name: <?php echo $_POST["name"]; ?><br>
Gender: <?php echo $_POST["gender"]; ?><br>
Email: <?php echo $_POST["email"]; ?><br>
Note: <?php echo $_POST["note"]; ?><br>
<?php
alert("Data added successfully");
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

$fileName1 = $_POST["name"];
$fileName2 = ".txt";
$fileName = $fileName1 . $fileName2;
$collection = array($_POST["name"], $_POST["gender"], $_POST["email"], $_POST["note"]);
$serialized = serialize($collection);

file_put_contents($fileName, $serialized);

$fileContents = file_get_contents($fileName);

$arrayUnserialized = unserialize($fileContents);


?>
</body>
</html>
