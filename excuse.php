<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="pictures\apple-icon-57x57.png" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Alibi Pro</title>
</head>

<body>
    <header>
        <h1>Alibi Pro</h1>
    </header>

    <form method="GET" action="excuse.php">
    <label for="nameChild">Please enter the child's name :</label>
    <input type="text" name="nameChild">

    <label for="gender">Please select your gender: </label>
    <input type="radio" name="gender" value="boy" id="gender-boy" />
    <label for="gender-boy">Boy</label>
    <input type="radio" name="gender" value="girl" id="gender-girl" />
    <label for="gender-girl">Girl</label>
    <br>
    <label for="nameTeacher">Please enter the teacher's name :</label>
    <input type="text" name="nameTeacher">
    <br>
    <label for="options">Please select an option: </label>
    <br>
    <input type="radio" name="options" value="illness" id="option-illness" />
    <label for="option-illness">Illness</label>
    <br>
    <input type="radio" name="options" value="death-of-the-pet" id="option-death-of-the-pet" />
    <label for="option-death-of-the-pet">Death of the pet</label>
    <br>
    <input type="radio" name="options" value="transport-problems" id="option-transport-problems" />
    <label for="option-transport-problems">Transport problems</label>
    <br>
    <input type="radio" name="options" value="weather-conditions" id="option-weather-conditions" />
    <label for="option-weather-conditions">Weather conditions</label>
    <br>
    <input type="radio" name="options" value="extra-curricular-activities" id="option-extra-curricular-activities" />
    <label for="option-extra-curricular-activities">Extra-curricular activities</label>
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
    $nameGender = ($gender === 'boy') ? 'my son' : 'my daughter';
    $pronounGender = ($gender === 'boy') ? 'he' : 'she';
    $personalPronounGender = ($gender === 'boy') ? 'him' : 'her';

    $messageIllness = "$date<br><br> 
        Madam $nameTeacher, <br><br>

        $nameChild, $nameGender, woke up this morning with a headache 
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

    $messageTransportProblems = "$date<br><br>
        Dear Mr $nameTeacher,<br><br>
        I would like to apologise for the absence of $nameGender, $nameChild, today due to the current strike.<br>
         Unfortunately, public transport has been affected and we have been unable to get to school.<br><br>

        I'm aware of the importance of regular attendance at school and always endeavour to ensure optimum attendance.<br>
         However, in this case the circumstances were beyond our control.<br><br>
        
        I hope that this situation will be resolved quickly and that the school 
        can return to normal. <br><br>
        
        I undertake that $nameGender will return to school as soon as conditions permit.<br><br>
        
        I apologise for any inconvenience caused and thank you for your understanding.<br><br>
        
        Yours sincerely,
        $nameChild's mother";

        $messageWeatherConditions = "$date<br><br>
        Dear Mr $nameTeacher,<br><br>
        
        I would like to apologise for the absence of $nameGender, $nameChild, today due to the current weather conditions.<br> 
        Unfortunately, the weather makes travelling dangerous and I have decided not to risk my child's safety on the way <br>
        to school.<br><br>

        I am aware of the importance of regular attendance at school, however, in this particular case, <br>
        the extreme weather conditions do not allow us to travel to school safely.<br><br>
        
        I hope that the weather conditions will soon stabilise and that the school can resume normal operations. <br>
        We promise that our child will be back at school as soon as conditions allow.<br><br>
        
        We apologise for any inconvenience caused and thank you for your understanding.<br><br>
        
        Yours sincerely,<br><br>
        
        $nameChild's mother";

    if ($gender === 'boy' && $options === 'illness') {
        echo $messageIllness;
    } elseif ($gender === 'girl' && $options === 'illness') {
        echo $messageIllness;
    } elseif ($gender === 'boy' && $options === 'death-of-the-pet') {
        echo $messageDeathOfThePet;
    } elseif ($gender === 'girl' && $options === 'death-of-the-pet') {
        echo $messageDeathOfThePet;
    } elseif ($gender === 'boy' && $options === 'transport-problems') {
        echo $messageTransportProblems;
    } elseif ($gender === 'girl' && $options === 'transport-problems') {
        echo $messageTransportProblems;
    }elseif ($gender === 'boy' && $options === 'weather-conditions') {
        echo $messageWeatherConditions;
    } elseif ($gender === 'girl' && $options === 'weather-conditions') {
        echo $messageWeatherConditions;
    }
}
?>

</body>
</html>