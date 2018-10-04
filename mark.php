<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Mark Obtained</title>
</head>
<body class="markbody">


<div class="markdiv">
    
<?php
    
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];
    $answer7 = $_POST['question-7-answers'];
    $answer8 = $_POST['question-8-answers'];
    $answer9 = $_POST['question-9-answers'];
    $answer10 = $_POST['question-10-answers'];
    $answer11 = $_POST['question-11-answers'];
    $answer12 = $_POST['question-12-answers'];
    $answer13 = $_POST['question-13-answers'];
    $answer14 = $_POST['question-14-answers'];
    $answer15 = $_POST['question-15-answers'];
    $answer16 = $_POST['question-16-answers'];
    $answer17 = $_POST['question-17-answers'];
    $answer18 = $_POST['question-18-answers'];
    $answer19 = $_POST['question-19-answers'];
    $answer20 = $_POST['question-20-answers'];

    $totalCorrect = 0;
    
    if ($answer1 == "C") { $totalCorrect++; }
    if ($answer2 == "B") { $totalCorrect++; }
    if ($answer3 == "D") { $totalCorrect++; }
    if ($answer4 == "A") { $totalCorrect++; }
    if ($answer5 == "A") { $totalCorrect++; }
    if ($answer6 == "C") { $totalCorrect++; }
    if ($answer7 == "A") { $totalCorrect++; }
    if ($answer8 == "A") { $totalCorrect++; }
    if ($answer9 == "C") { $totalCorrect++; }
    if ($answer10 == "D") { $totalCorrect++; }
    if ($answer11 == "D") { $totalCorrect++; }
    if ($answer12 == "B") { $totalCorrect++; }
    if ($answer13 == "B") { $totalCorrect++; }
    if ($answer14 == "A") { $totalCorrect++; }
    if ($answer15 == "A") { $totalCorrect++; }
    if ($answer16 == "C") { $totalCorrect++; }
    if ($answer17 == "D") { $totalCorrect++; }
    if ($answer18 == "D") { $totalCorrect++; }
    if ($answer19 == "B") { $totalCorrect++; }
    if ($answer20 == "D") { $totalCorrect++; }


    if ($totalCorrect<10){
    echo "FOR YOU QUIZ, YOU'VE GOT  "."<div id='results'>$totalCorrect / 20 correct</div>"." YOU CAN GO BACK TO THE QUIZ AND TRY AGAIN."?>
    <a href="quiz.php" class= "marka">try again</a><?;
    }
    elseif ($totalCorrect >= 10 && $totalCorrect <15){
        echo "CONGRATULATIONS YOU'VE GOT  "."<div id='results'>$totalCorrect / 20 correct</div>"." YOU'VE SCORED AVERAGELY.";
    }
    elseif ($totalCorrect >= 15 && $totalCorrect <20){
        echo "CONGRATULATIONS YOU'VE GOT  "."<div id='results'>$totalCorrect / 20 correct</div>"." YOU DID WELL.";
    }
    else {
        echo "CONGRATULATIONS YOU'VE GOT  "."<div id='results'>$totalCorrect / 20 correct</div>"." YOU DID WELL."?><br> <img src="https://i.imgur.com/s9bPVaK.gif?2" alt=""><?;
    }
    
?>

</div>

</body>
</html>