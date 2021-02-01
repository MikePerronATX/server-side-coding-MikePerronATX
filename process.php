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
        
            if (!empty($_POST['text1']) && !empty($_POST['text2']) && !empty($_POST['text3']) && !empty($_POST['text4']) && !empty($_POST['text5'])) {
            
                $text1 = $_POST['text1'];
                $text2 = $_POST['text2'];
                $text3 = $_POST['text3'];
                $text4 = $_POST['text4'];
                $text5 = $_POST['text5'];
            } else {
                $text1 = "";
                $text2 = "";
                $text3 = "";
                $text4 = "";
                $text5 = "";
            }

/* * ******************************************************
* STEP 2: VALIDATION: Always clean your input first!!!!
* Do NOT process, only CLEAN and VALIDATE.
* Do not delete this comment.
* ****************************************************** */

            $text1 = trim($text1);
            $text2 = trim($text2);
            $text3 = trim($text3);
            $text4 = trim($text4);
            $text5 = trim($text5);
            
            $text1 = strip_tags($text1);
            $text2 = strip_tags($text2);
            $text3 = strip_tags($text3);
            $text4 = strip_tags($text4);
            $text5 = strip_tags($text5);
            
            $text1 = substr($text1, $lengthT1, 64);
            $text2 = substr($text2, $lengthT2, 64);
            $text3 = substr($text3, $lengthT3, 64);
            $text4 = substr($text4, $lengthT4, 64);
            $text5 = substr($text5, $lengthT5, 64);
            
            if (!empty($text1) && !empty($text2) && !empty($text3) && !empty($text4) && !empty($text5)) {

/* * *************************************************************************
* STEP 3 and 4: PROCESSING and OUTPUT: Notice this code only executes
* if you have valid data from steps 1 and 2. Your code must always have
* a saftey feature similar to this.
* Do not delete this comment.
* ************************************************************************ */
            $sentence = "You are " . $text1 . " " . $text2 . " " . $text3 . " of ". $text4 . " and " . $text5;
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
                $lengthT1 = strlen($text1);
                if ($lengthT1 > 0) {
                            echo $text1. " is " . $lengthT1 . " characters. <br>";
                        }
            ?>
            <?php 
                $lengthT2 = strlen($text2);
                if ($lengthT2 > 0) {
                echo $text2. " is " . $lengthT2 . " characters. <br>";
                }
            ?>
            <?php
                $lengthT3 = strlen($text3);
                if ($lengthT3 > 0) {
                echo $text3. " is " . $lengthT3 . " characters. <br>";
                }
            ?>
            <?php
                $lengthT4 = strlen($text4);
                if ($lengthT4 > 0) {
                echo $text4. " is " . $lengthT4 . " characters. <br>";
                }
            ?>
            <?php
                $lengthT5 = strlen($text5);
                        if ($lengthT5 > 0) {
                        echo $text5. " is " . $lengthT5 . " characters. <br>";
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