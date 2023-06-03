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
        <br><br>
    </form>
    <?php
if (isset($_GET["nameChild"], $_GET["gender"], $_GET["nameTeacher"], $_GET["options"], $_GET['submit'])) {
    $nameChild = $_GET["nameChild"];
    $gender = $_GET["gender"];
    $nameTeacher = $_GET["nameTeacher"];
    $options = $_GET["options"];
    $date = date("l, \\t\\h\\e jS F Y");
    $nameGender = ($gender === 'boy') ? 'My son' : 'My daughter';
    $pronounGender = ($gender === 'boy') ? 'he' : 'she';
    $personalPronounGender = ($gender === 'boy') ? 'him' : 'her';

    $messageIlness = "$date<br><br> 
        Madam $nameTeacher, <br><br>

        $nameGender $nameChild, woke up this morning with a headache 
        and I don't even think $pronounGender has a fever.<br><br> 

        I thought it prudent not to take $personalPronounGender to school today 
        and call the doctor.<br><br> 

        I don't know yet, this morning, if $pronounGender'll be absent for several days, 
        but I'll be sure to let you know<br><br> 

        in this liaison book, as soon as the doctor has made a medical diagnosis.<br><br> 
        Yours sincerely,<br><br> 

        $nameChild's mother.";

    $messageDeathOfThePet = "$date<br><br>
        Dear Mr $nameTeacher,<br><br>

        I am writing to inform you of some sad news that has affected us as a family. <br>
        Sadly, our beloved dog Brutus passed away suddenly last night. <br><br>
        He was a beloved member of our family for many years, and we are deeply saddened by his loss.<br><br>
        
        Because of this sad circumstance and the grief we feel, I would prefer to give <br>
        $nameChild a day off so that $pronounGender can be with us and get through this difficult <br>
        time as a family. 
        
        We feel it is important to offer $personalPronounGender emotional support during <br>
        this time of grief.<br><br>
        
        I understand the importance of $nameChild's education and attendance at school, <br>
        but please understand the exceptional situation we are facing. <br><br>
        
        I undertake to provide $nameChild with all necessary school materials so that $pronounGender can catch up on missed <br>
        classes and be up to date with his work.<br><br>
        
        Thank you for your understanding and support during this difficult time. If you have any questions or concerns, <br>
        please do not hesitate to contact me. We look forward to getting back to a normal routine at school as soon as possible.<br><br>
        
        Yours sincerely
        
        $nameChild's mother";

    if ($gender === 'boy' && $options === 'illness') {
        echo $messageIlness;
    }elseif ($gender === 'girl' && $options === 'illness') {
        echo $messageIlness;
    }elseif ($gender === 'boy' && $options === 'death-of-the-pet') {
        echo $messageDeathOfThePet;
    }elseif ($gender === 'girl' && $options === 'death-of-the-pet') {
        echo $messageDeathOfThePet;
    }
}
?>

</body>
</html>