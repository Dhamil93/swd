<?php
$filename1 = $_POST['name'];
$filename = $filename1 . '.txt';

if(file_exists($filename)){
    $fileContents = file_get_contents($filename);
    $recoverArray = unserialize($fileContents);
    $recoverArray[0] = $_POST['name'];
    $recoverArray[1] = $_POST['gender'];
    $recoverArray[2] = $_POST['email'];
    $recoverArray[3] = $_POST['note'];

    $serialized = serialize($recoverArray);
    file_put_contents($filename, $serialized);

    $fileContents1 = file_get_contents($filename);
    $recoverArray1 = unserialize($fileContents);

}
else{
    echo "Sorry, file does not exist, you can add your details on Add section.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Text</title>
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
</head>
<body>
<div class="options">

    <ul>
        <li><a href="homepage.html">Home page</a></li>
        <li><a href="add.html">Add Details </a></li>
        <li><a href="edit.html">Edit Details </a></li>
    </ul>
</div>
<p>Information Updated successfully</p>
First Name: <?php echo $_POST["name"]; ?><br><br>
Gender: <?php echo $_POST["gender"]; ?><br><br>
Email: <?php echo $_POST["email"]; ?><br><br>
Note: <?php echo $_POST["note"]; ?><br><br>

</body>
</html>
