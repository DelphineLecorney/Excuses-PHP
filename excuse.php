<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="pictures\apple-icon-57x57.png" />
    <title>Excuse</title>
</head>
<body>
   

<form method="GET" action="excuse.php">
    <label for="nameChild">Please enter the child's name :</label>
    <input type="text" name="nameChild">
    <br>
    <label for="gender">Please select your gender: </label>
    <input type="radio" name="gender" value="boy" id="boy" checked="checked" />
    <label for="boy">Boy</label>
    <input type="radio" name="gender" value="girl" id="girl" /> 
    <label for="girl">Girl</label>
</form>
<?php


?>

</body>
</html>