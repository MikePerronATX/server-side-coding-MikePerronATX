<!--
   Simple HTML page with all the basic and required parts to make a complete
   functional web page with external style sheets and JavaScript
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
         <h1>Your Response</h1>
      </div>
      <hr>
      <div >
         <h2>here is what you said:</h2>
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
         
         
            
            
            if (!empty($text1) && !empty($text2) && !empty($text3) && !empty($text4) && !empty($text5)) {
           
                $sentence = $text1 . " " . $text2 . " " . $text3 . " ". $text4 . " " . $text5;
                
                echo "You are " .$sentence. "<br>";
                echo "Length of each part of the title: <br>";
         
                $lengthT1 = strlen($text1);
               
                if ($lengthT1 > 0) {
                    echo $text1. " is " . $lengthT1 . " characters. <br>";
                }
                
                $lengthT2 = strlen($text2);
                if ($lengthT2 > 0) {
                   echo $text2. " is " . $lengthT2 . " characters. <br>";
                }
                
                $lengthT3 = strlen($text3);
                if ($lengthT3 > 0) {
                   echo $text3. " is " . $lengthT3 . " characters. <br>";
                }
         
                $lengthT4 = strlen($text4);
                if ($lengthT4 > 0) {
                   echo $text4. " is " . $lengthT4 . " characters. <br>";
               }
               $lengthT5 = strlen($text5);
                if ($lengthT5 > 0) {
                   echo $text5. " is " . $lengthT5 . " characters. <br>";
               }
               
               echo "<br>";
               echo "Length of the whole title (including spaces): <br>";
         
               $sentenceLength = strlen($sentence);
               echo $sentenceLength. "<br>";
         
               if($sentenceLength > 30){
                   echo "That’s a heck of a title!​";
               }
               echo "<br>";
               if($sentenceLength < 30){
                   echo "That’s a cute little title.";
               }
               echo "<br>";
               
               echo '<a href="index.html">try again</a><br>';
              
         
            } else {
                
               echo "​I’m sorry, your input was not valid.<br>";
                echo '<a href="index.html">try again</a><br>';
            }
            ?>
      <div class="text-center">
      <h1><?php echo $text1, " " . $text2; ?></h1>
      <?php ?>
   </body>
</html>