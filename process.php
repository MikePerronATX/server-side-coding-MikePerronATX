<!--
Name: Michael Perron
Coding 02
Purpose: Creating a webpage with a form to be completed by the user.
Once completed, the page must accept input, validate, process, and output.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/main.css" rel="stylesheet">
        <title>Coding 02_form</title>
        <link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>
    </head>
    <header>
        <div >
            <h1>Mardi Gras Questionaire Form</h1>
        </div>
        <hr>
        <div >
            <h2>your responses</h2>
        </div>
    </header>
    <body>
        <!-- beginning php -->
        <?php
/* * *********************************************
* STEP 1: INPUT: Do NOT process, just get the data.
* Do not delete this comment,
* ********************************************** */
            if (!empty($_POST['title']) && !empty($_POST['drink']) && !empty($_POST['pet']) && !empty($_POST['ficPlace']) && !empty($_POST['rlPlace'])) {
                $title = $_POST['title'];
                $drink = $_POST['drink'];
                $pet = $_POST['pet'];
                $ficPlace = $_POST['ficPlace'];
                $rlPlace = $_POST['rlPlace'];
            } else {
                $title = "";
                $drink = "";
                $pet = "";
                $ficPlace = "";
                $rlPlace = "";
            }
/* * ******************************************************
* STEP 2: VALIDATION: Always clean your input first!!!!
* Do NOT process, only CLEAN and VALIDATE.
* Do not delete this comment.
* ****************************************************** */            
            $title = trim($title);
            $drink = trim($drink);
            $pet = trim($pet);
            $ficPlace = trim($ficPlace);
            $rlPlace = trim($rlPlace);
            
            $title = strip_tags($title);
            $drink = strip_tags($drink);
            $pet = strip_tags($pet);
            $ficPlace = strip_tags($ficPlace);
            $rlPlace = strip_tags($rlPlace);
            
            $title = substr($title, $titleLen, 64);
            $drink = substr($drink, $drinkLen, 64);
            $pet = substr($pet, $petLen, 64);
            $ficPlace = substr($ficPlace, $ficLen, 64);
            $rlPlace = substr($rlPlace, $realLen, 64);
            
            if (!empty($title) && !empty($drink) && !empty($pet) && !empty($ficPlace) && !empty($rlPlace)) {
/* * *************************************************************************
* STEP 3 and 4: PROCESSING and OUTPUT: Notice this code only executes
* if you have valid data from steps 1 and 2. Your code must always have
* a saftey feature similar to this.
* Do not delete this comment.
* ************************************************************************ */                
                $sentence = "You are " . $title . " " . $drink . " " . $pet . " of ". $ficPlace . " and " . $rlPlace;
                
                echo '<div class="bg">';
                    echo '<div id="response">' .$sentence. '</div>' ;
                    echo "<br>";
            
                    echo "Length of each part of the title: <br>";
                
                    $titleLen = strlen($title);
                    if ($titleLen > 0) {
                        echo $title. " is " . $titleLen . " characters. <br>";
                    }
                    $drinkLen = strlen($drink);
                    if ($drinkLen > 0) {
                        echo $drink. " is " . $drinkLen . " characters. <br>";
                    }
                    $petLen = strlen($pet);
                    if ($petLen > 0) {
                        echo $pet. " is " . $petLen . " characters. <br>";
                    }
                    $ficLen = strlen($ficPlace);
                    if ($ficLen > 0) {
                        echo $ficPlace. " is " . $ficLen . " characters. <br>";
                    }
                    $realLen = strlen($rlPlace);
                    if ($realLen > 0) {
                        echo $rlPlace. " is " . $realLen . " characters. <br>";
                    }
            
                    $sentenceLength = strlen($sentence);
                
                    echo "Length of the whole title (including spaces): " .$sentenceLength;
                    echo "<br>";
                    if($sentenceLength > 30){
                        echo "That’s a heck of a title!​";
                        echo "<br>";
                    }
                    if($sentenceLength < 30){
                        echo "That’s a cute little title.";
                        echo "<br>";
                    }
                    echo '<a href="index.html">try again</a><br>';
                echo '</div>';
            }
            else {
                echo '<div class="bg">';
                    echo "​I’m sorry, your input was not valid.<br>";
                    echo '<a href="index.html">try again</a><br>';
                echo '</div>';
            }
        ?> 
    </body>
</html>