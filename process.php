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
        <?php


/* * *********************************************
* STEP 1: INPUT: Do NOT process, just get the data.
* Do not delete this comment,
* ********************************************** */
        
            if (!empty($_POST['title']) && !empty($_POST['drink']) && !empty($_POST['pet']) && !empty($_POST['rl_place']) && !empty($_POST['rl_place'])) {
            
                $title = $_POST['title'];
                $drink = $_POST['drink'];
                $pet = $_POST['pet'];
                $fic_place = $_POST['fic_place'];
                $rl_place = $_POST['rl-place'];
            } else {
                $title = "";
                $drink = "";
                $pet = "";
                $fic_place = "";
                $rl_place = "";
            }

/* * ******************************************************
* STEP 2: VALIDATION: Always clean your input first!!!!
* Do NOT process, only CLEAN and VALIDATE.
* Do not delete this comment.
* ****************************************************** */

            $title = trim($title);
            $drink = trim($drink);
            $pet = trim($pet);
            $fic_place = trim($fic_place);
            $rl_place = trim($rl_place);
            
            $title = strip_tags($title);
            $drink = strip_tags($drink);
            $pet = strip_tags($pet);
            $fic_place = strip_tags($fic_place);
            $rl_place = strip_tags($rl_place);
            
            $title = substr($title, $title_len, 64);
            $drink = substr($drink, $drink_len, 64);
            $pet = substr($pet, $pet_len, 64);
            $fic_place = substr($fic_place, $fic_len, 64);
            $rl_place = substr($rl_place, $rl_len, 64);
            
            if (!empty($title) && !empty($drink) && !empty($pet) && !empty($fic_place) && !empty($rl_place)) {

/* * *************************************************************************
* STEP 3 and 4: PROCESSING and OUTPUT: Notice this code only executes
* if you have valid data from steps 1 and 2. Your code must always have
* a saftey feature similar to this.
* Do not delete this comment.
* ************************************************************************ */
            $sentence = "You are " . $title . " " . $drink . " " . $pet . " of ". $fic_place . " and " . $rl_place;
        ?>
        <div class="bg">
            <div id="s">
                <?php
                echo $sentence. "<br>";
                echo "<br>";
                ?>
            </div>
            <?php 
                echo "Length of each part of the title: <br>";
            ?>
            <?php
                $title_len = strlen($title);
                if ($title_len > 0) {
                            echo $title. " is " . $title_len . " characters. <br>";
                        }
            ?>
            <?php 
                $drink_len = strlen($drink);
                if ($drink_len > 0) {
                echo $drink. " is " . $drink_len . " characters. <br>";
                }
            ?>
            <?php
                $pet_len = strlen($pet);
                if ($pet_len > 0) {
                echo $pet. " is " . $pet_len . " characters. <br>";
                }
            ?>
            <?php
                $fic_len = strlen($fic_place);
                if ($fic_len > 0) {
                echo $fic_place. " is " . $fic_len . " characters. <br>";
                }
            ?>
            <?php
                $rl_len = strlen($rl_place);
                        if ($rl_len > 0) {
                        echo $rl_place. " is " . $rl_len . " characters. <br>";
                    }
            ?>
            <?php
                $sentenceLength = strlen($sentence);
            ?>
            <?php
                echo "Length of the whole title (including spaces): " .$sentenceLength. "<br>";
                echo "<br>";
            ?>
            <?php
                if($sentenceLength > 30){
                    echo "That’s a heck of a title!​";
                    echo "<br>";
                }
            ?>
            <?php
                if($sentenceLength < 30){
                    echo "That’s a cute little title.";
                    echo "<br>";
                }
            ?>
            <?php
                echo '<a href="index.html">try again</a><br>';
            ?>
            <?php
                } else {   
                    echo "​I’m sorry, your input was not valid.<br>";
                    echo '<a href="index.html">try again</a><br>';
                }
            ?>
        </div>    
    </body>
</html>