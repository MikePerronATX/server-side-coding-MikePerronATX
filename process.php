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
      <div class="container">
         <div >
         <h1>Your Response</h1>
         </div>
         <hr>
         <div >
            <h2>here is what you said:</h2>
         </div>
      </div>
   </header>
   <body>

      <?php
         
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
         
         $text1 = trim($text1);
         $text2 = trim($text2);
         $text3 = trim($text3);
         $text4 = trim($text4);
         $text5 = trim($text5);
         
         
         if (!empty($text1) && !empty($text2) && !empty($text3) && !empty($text4) && !empty($text5)) {
        
             
             echo "your title is:  " . $text1 . " " . $text2 . " " . $text3 . " ". $text4 . " " . $text5 .  "<br>";
             $lengthT1 = strlen($text1);
            
             if ($lengthT1 > 0) {
                 echo "the length of your first input is: " . $lengthT1 . "<br>";
             }
             echo "<br>";
             
             $lengthT2 = strlen($text2);
             if ($lengthT2 > 0) {
                 echo "the length of your second input is: " . $lengthT2 . "<br>";
             }
             echo "<br>";
             
             $lengthT3 = strlen($text3);
             if ($lengthT3 > 0) {
                 echo "the length of your third input is: " . $lengthT3 . "<br>";
             }
             echo "<br>";

             $lengthT4 = strlen($text4);
             if ($lengthT4 > 0) {
                echo "the length of your fourth input is: " . $lengthT4 . "<br>";
            }
            echo "<br>";

            $lengthT5 = strlen($text5);
             if ($lengthT5 > 0) {
                echo "the length of your fifth input is: " . $lengthT5 . "<br>";
            }
            echo "<br>";

            $total= $lengthT1 + $lengthT2 + $lengthT3 + $lengthT4 + $lengthT5;  
            echo "Sum: ", $total, "<br>";


            if($total >30){
                echo "Big Name!";
            }
            echo "<br>";
            if($total <30){
                echo "small name.";
            }
            echo "<br>";
            
            echo '<a href="index.html">try again</a><br>';
           

         } else {
             
            echo "you did not enter anything in one or all of the text boxes.<br>";
             echo '<a href="index.html">try again</a><br>';
         }
         ?>
         <div class="text-center">
<h1><?php echo $text1, " " . $text2; ?></h1>
        <?php ?>


   </body>
</html>