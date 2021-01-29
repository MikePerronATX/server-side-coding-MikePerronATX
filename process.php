<!--
   Simple HTML page with all the basic and required parts to make a complete
   functional web page with external style sheets and JavaScript
   -->
   <html lang="en-US">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="css/main.css" rel="stylesheet">
      <link rel="icon" href="favicon.ico" type="image/ico">
   </head>
   <body>
      <div>
         <h2 class="main-title" id="main-title">Hello Test</h2>
         <hr>
      </div>
      <div >
         <h1>Your Response</h1>
      </div>
      <div >
         <h2>here is what you said:</h2>
      </div>
      <?php
         /*
          * Your comment header here
          */
         
         /* 
          * This is a simple demo to demonstrate how you can access and process
          * information posted to the server. Alter this file according to the
          * instructions in the assignment. Note that you will NOT normally
          * do things this way, but this will serve as an introduction
          * to server side processing and then we will fix it in subsequent
          * assignments.
          *
          * The output of this page MUST be a complete and properly structured
          * mobile-friendly, mobile-first, responsive webpage. To do that you
          * will purposefully violate both division of concerns and some procedural
          * programming best practices so as to create a simple and easy to
          * understand solution. We will then use this example as a guide
          * for how to do things properly in subsequent assignments.
          */
         
         // DELETE *ALL* INSTRUCTIONAL COMMENTS AND CODE WHEN YOU ARE READY TO SUBMIT
         // *EXCEPT* FOR THE COMMENTS THAT SAY, "Do not delete this comment."
         // LEAVE THOSE IN PLACE TO SHOW IN *YOUR* CODE WHERE YOU DID EACH STEP.
         // YOU MAY BREAK UP STEP 3 AND 4 IF YOUR SOLUTION REQUIRES IT, BUT
         // MAINTAIN THE ORDER of.. step 3: PROCESSING, step 4: OUTPUT
         
         /*
          * This next line is simply to demonstrate the use of the var_dump()
          * and to show the contents of the system global variable $_POST.
          * Do not leave this in your final code. This is an
          * example of a debug statement.
          */
        //  var_dump($_POST);
         
         /* * *********************************************
          * STEP 1: INPUT: Do NOT process, just get the data.
          * Do not delete this comment,
          * ********************************************** */
         
         if (!empty($_POST['text1']) && !empty($_POST['text2']) && !empty($_POST['text3']) && !empty($_POST['text4']) && !empty($_POST['text5'])) {
             // extract the data from the global $_POST (if it exists) into local variables.
             // NEVER work with $_POST directly, get away from it as fast as possible.
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
         
         // clean up the variables (a little) by removing leading and trailing white space
         // follow the instructions in the assignment for further cleaning steps
         $text1 = trim($text1);
         $text2 = trim($text2);
         $text3 = trim($text3);
         $text4 = trim($text4);
         $text5 = trim($text5);
         
         
         if (!empty($text1) && !empty($text2) && !empty($text3) && !empty($text4) && !empty($text5)) {
         
             /*     * *************************************************************************
              * STEP 3 and 4: PROCESSING and OUTPUT: Notice this code only executes
              * if you have valid data from steps 1 and 2. Your code must always have
              * a saftey feature similar to this.
              * Do not delete this comment.
              * ************************************************************************ */
         
             // the following code shows how you can access parts of the $_POST array
             echo "your title is: " . $text1 . " ". $text2 . " ". $text3 . " ". $text4 . " ". $text5 .  "<br>";
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
   </body>
</html>
