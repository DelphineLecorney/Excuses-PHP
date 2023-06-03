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
    <input type="radio" name="gender" value="boy" id="boy" />
    <label for="boy">Boy</label>
    <input type="radio" name="gender" value="girl" id="girl" /> 
    <label for="girl">Girl</label>
    <br>
    <label for="nameTeacher">Please enter the teacher's name :</label>
    <input type="text" name="nameTeacher">
    <br><br>
    <label for="gender">Please select an option : </label>
    <br><br>
    <input type="radio" name="options" value="illness" id="illness" />
    <label for="illness">Illness</label>
    <br>
    <input type="radio" name="options" value="death-of-the-pet" id="death-of-the-pet" />
    <label for="death-of-the-pet">Death-of-the-pet</label>
    <br>
    <input type="radio" name="options" value="death-of-the-family's member" id="death-of-the-family's member" />
    <label for="death-of-the-family's member">Death-of-the-family's member</label>
    <br>
    <input type="radio" name="options" value="transport problems" id="transport problems" />
    <label for="transport problems">Transport problems</label>
    <br>
    <input type="radio" name="options" value="weather conditions" id="weather conditions" />
    <label for="weather conditions">Weather conditions</label>
    <br>
    <input type="radio" name="options" value="Extra-curricular activities" id="Extra-curicular activities" />
    <label for="Extra-curicular activities">Extra-curicular activities</label>
    <br><br>
    <input type="submit" name="submit" value="Submit" id="submit">

</form>
<?php
if (isset($_GET["nameChild"], $_GET["gender"], $_GET["nameTeacher"], $_GET["options"], $_GET['submit'])) {
    $nameChild = $_GET["nameChild"];
    $gender = $_GET["gender"];
    $nameTeacher = $_GET["nameTeacher"];
    $options = $_GET["options"];
    $date = date("l, \\t\\h\\e jS F Y");
    echo $date;
    echo "Madam $nameTeacher,

    My son $nameChild woke up this morning with a headache 
    and I don't even think he has a fever. 
    I thought it prudent not to take him to school today 
    and call the doctor.

    I don't know yet, this morning, if he'll be absent for several days, but I'll be sure to let you know 
    in this liaison book, as soon as the doctor has made a medical diagnosis.

    Yours sincerely

    $nameChild's mother.";
}
?>


</body>
</html>