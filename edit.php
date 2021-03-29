<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            text-align: center;
            background-image: url("css.png");
            font-family: "Arial Rounded MT Bold", sans-serif;
            font-size: larger;
            line-height: 1.5rem;
        }
        :any-link{
            text-decoration: none;
            color: blue;
            font-weight: bolder;
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
<form action="newEdit.php" method="post">
    <div class="header">
        <head>
            <p><h2>Edit Your Details</h2></p>
        </head>
        <p> check your details before changing the details </p>
        <title>Personal Details</title>
    </div>
    <fieldset>
        <legend>Edit Details:</legend>
        <div class="information">
            <label for="name"> Name:</label>
            <input type="text" name="name"><br>
            <br>
            <label for="gender"> Gender: </label><br>
            <input type="radio" name="gender" value="Male">
            <label for="male">Male</label><br>
            <input type="radio" name="gender" value="Female">
            <label for="female">Female</label><br>
            <label for="email"> Email:</label>
            <input type="text" name="email"><br>
            <br>
            <label for="note"> Note: </label>
            <textarea name="note" rows="5" cols="40"></textarea><br>
        </div>
    </fieldset>
    <div class="submit">
        <input type="submit" id="Update" name="Update" value="Update">
    </div>
</form>
</body>
</html>
