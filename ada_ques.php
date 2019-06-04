<?php
    session_start();
    require "connection.php";
    $con=Connection();
    $username=$_SESSION["username"];
    mysqli_close($con);
?>



<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>couse enroll</title>
        <link rel="stylesheet" type="text/css" href="resources/css/course_style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        
           <header>
                    <div class="page-header" style="border: 10px; padding-bottom: 30px; ">
                    <h2>EDUCOM.IN <label align="right"><?php echo $username;?></p>
                
                    </h2>
                   
                    </div>
                   <!-- <div style="padding-left: 1200px; padding-bottom: 200px;">
                    <button type="submit" id="signup_btn" name="signup" class="page-header" style="background: #05a2a8; ">Logout</button>
                    </div>!-->
                </header>
<body>
<div class="container-fluid" style=" margin-right:120px;padding:20px; margin-left:40px">
    <div id="quiz-time-left"></div>
    <script type="text/javascript">
    var total_seconds=60;
    var cur_min=parseInt(total_seconds/60);
    var cur_sec=parseInt(total_seconds%60);
    function CheckTime(){
        document.getElementById("quiz-time-left").innerHTML="<b>Time left: "+cur_min+" mins "+cur_sec+" secs</b>";
        if(total_seconds<=0){
            setTimeout('document.mainmenu.submit()',1);
        }
        else{
            total_seconds=total_seconds-1;
            cur_min=parseInt(total_seconds/60);
             cur_sec=parseInt(total_seconds%60);
             setTimeout("CheckTime()",1000);
        }
    }
    setTimeout("CheckTime()",1000);
    </script>
    <p>
    <br>
    </p>
    
    
    <form action="test.php" method="POST" id="mainmenu" name="mainmenu">
     
    <div class="form-group row">
  1.What is recurrence for worst case of QuickSort and what is the time complexity in Worst case?
       </div>
       <div class="form-group row">
        <label class="radio-inline">
        <input type="radio" name="question1" id="question1" value="1" checked>Recurrence is T(n) = T(n-2) + O(n) and time complexity is O(n^2)
        </label>
        <label class="radio-inline">
        <input type="radio" name="question1" id="question1" value="2">Recurrence is T(n) = 2T(n/2) + O(n) and time complexity is O(nLogn)
        </label>
        <label class="radio-inline">
        <input type="radio" name="question1" id="question1" value="3">Recurrence is T(n) = T(n-1) + O(n) and time complexity is O(n^2);
        </label>
        <label class="radio-inline">
        <input type="radio" name="question1" id="question1" value="4">Recurrence is T(n) = T(n/10) + T(9n/10) + O(n) and time complexity is O(nLogn)
        </label>
    </div>
    <div class="form-group row">
    2.1. The Knapsack problem is an example of ____________
       </div>
       <div class="form-group row">
        <label class="radio-inline">
        <input type="radio" name="question2" id="question2" value="1" checked> Greedy algorithm
        </label>
        <label class="radio-inline">
        <input type="radio" name="question2" id="question2" value="2">1D dynamic programming
        </label>
        <label class="radio-inline">
        <input type="radio" name="question2" id="question2" value="3">2D dynamic programming;
        </label>
        <label class="radio-inline">
        <input type="radio" name="question2" id="question2" value="4">Divide and conquer
        </label>
    </div>
    <div class="form-group row">
    3. Language which is based on Pascal is
    </div>
    
    <div class="form-group row">
        <label class="radio-inline">
        <input type="radio" name="question3" id="question3" value="1" checked>FORTRAN
        </label>
        <label class="radio-inline">
        <input type="radio" name="question3" id="question3" value="2">COBOL
        </label>
        <label class="radio-inline">
        <input type="radio" name="question3" id="question3" value="3">ADA;
        </label>
        <label class="radio-inline">
        <input type="radio" name="question3" id="question3" value="4">C++
        </label>
        </div>

        <div class="form-group row">
    4.The running time of quick sort depends heavily on the selection of
    </div>
    
    <div class="form-group row">
        <label class="radio-inline">
        <input type="radio" name="question4" id="question4" value="1" checked>Pivot elements;
        </label>
        <label class="radio-inline">
        <input type="radio" name="question4" id="question4" value="2">Arrangements of elements in array
        </label>
        <label class="radio-inline">
        <input type="radio" name="question4" id="question4" value="3">Size 0 elements
        </label>
        <label class="radio-inline">
        <input type="radio" name="question4" id="question4" value="4">No of inputs
        </label>
        </div>

        <div class="form-group row">
    5.Finding the location of the element with a given value is:
    </div>
    
    <div class="form-group row">
        <label class="radio-inline">
        <input type="radio" name="question5" id="question5"  value="1" checked>Traversal
        </label>
        <label class="radio-inline">
        <input type="radio" name="question5" id="question5" value="2">Search;
        </label>
        <label class="radio-inline">
        <input type="radio" name="question5" id="question5" value="3">Sort
        </label>
        <label class="radio-inline">
        <input type="radio" name="question5" id="question5" value="4">None of the above
        </label>
        </div>
        <div style="text-align: center;">
        <p><button type="submit" id="ada_eval" name="btn_submit" value="ada_eval">SUBMIT</button></p>
          </div>

    </form>
    </div>



</body>
</html>