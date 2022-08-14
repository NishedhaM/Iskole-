<?php
   session_start();

   if(!$_SESSION['id']){
       header('location:teacher_login.php');
   }

   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,'demo');
  //  echo ($_SESSION['id']);
   if(isset($_POST['submit'])){

       $date = date('Y-m-d');
       $qid = trim($_POST['qid']);
       $q_title = trim($_POST['q_title']);
       $Q1=trim($_POST['Q1']);
       $op1=trim($_POST['op1']);
       $op2=trim($_POST['op2']);
       $op3=trim($_POST['op3']);
       $op4=trim($_POST['op4']);
    //    $ans=trim($_POST['ans']);

       if(isset($_POST['ans11'])){
           $ans=$op1;
        }

        if(isset($_POST['ans12'])){
            $ans=$op2;
        }

        if(isset($_POST['ans13'])){
            $ans=$op3;
        }

        if(isset($_POST['ans14'])){
            $ans=$op4;
        }


       $Q2=trim($_POST['Q2']);
       $op21=trim($_POST['op21']);
       $op22=trim($_POST['op22']);
       $op23=trim($_POST['op23']);
       $op24=trim($_POST['op24']);

       if(isset($_POST['ans21'])){
            $ans2=$op21;
        }

        if(isset($_POST['ans22'])){
            $ans2=$op22;
        }

        if(isset($_POST['ans23'])){
            $ans2=$op23;
        }

        if(isset($_POST['ans24'])){
            $ans2=$op24;
         }

       $Q3=trim($_POST['Q3']);
       $op31=trim($_POST['op31']);
       $op32=trim($_POST['op32']);
       $op33=trim($_POST['op33']);
       $op34=trim($_POST['op34']);
      
       if(isset($_POST['ans31'])){
        $ans3=$op31;
        }

        if(isset($_POST['ans32'])){
        $ans3=$op32;
        }

        if(isset($_POST['ans33'])){
        $ans3=$op33;
        }

        if(isset($_POST['ans34'])){
        $ans3=$op34;
         }

       $Q4=trim($_POST['Q4']);
       $op41=trim($_POST['op41']);
       $op42=trim($_POST['op42']);
       $op43=trim($_POST['op43']);
       $op44=trim($_POST['op44']);
      

       if(isset($_POST['ans41'])){
        $ans4=$op41;
        }

        if(isset($_POST['ans42'])){
        $ans4=$op42;
        }

        if(isset($_POST['ans43'])){
        $ans4=$op43;
        }

        if(isset($_POST['ans44'])){
        $ans4=$op44;
         }

       $Q5=trim($_POST['Q5']);
       $op51=trim($_POST['op51']);
       $op52=trim($_POST['op52']);
       $op53=trim($_POST['op53']);
       $op54=trim($_POST['op54']);
      

       if(isset($_POST['ans51'])){
        $ans5=$op51;
        }

        if(isset($_POST['ans52'])){
        $ans5=$op52;
        }

        if(isset($_POST['ans53'])){
        $ans5=$op53;
        }

        if(isset($_POST['ans54'])){
        $ans5=$op54;
         }

       $query = " INSERT INTO `quizz` (`qid`, `sid`, `gid`, `uid`, `q_title`, `teacher_id`, `uploaded_date`) VALUES ('$qid', 'S1', 'G1', 'U1', '$q_title', $_SESSION[id], '$date');";
       $query_run = mysqli_query($connection,$query);
       $query="INSERT INTO `question` (`qqid`, `qid`, `q_desc`, `op1`, `op2`, `op3`,`op4`, `ans`) VALUES ('1', '$qid', '$Q1', '$op1', '$op2', '$op3','$op4', '$ans')";
       $query_run = mysqli_query($connection,$query);
       $query="INSERT INTO `question` (`qqid`, `qid`, `q_desc`, `op1`, `op2`, `op3`,`op4`, `ans`) VALUES ('2', '$qid', '$Q2', '$op21', '$op22', '$op23','$op24', '$ans2')";
       $query_run = mysqli_query($connection,$query);
       $query="INSERT INTO `question` (`qqid`, `qid`, `q_desc`, `op1`, `op2`, `op3`, `op4`, `ans`) VALUES ('3', '$qid', '$Q3', '$op31', '$op32', '$op33', '$op34','$ans3')";
       $query_run = mysqli_query($connection,$query);
       $query="INSERT INTO `question` (`qqid`, `qid`, `q_desc`, `op1`, `op2`, `op3`, `op4`, `ans`) VALUES ('4', '$qid', '$Q4', '$op41', '$op42', '$op43', '$op44','$ans4')";
       $query_run = mysqli_query($connection,$query);
       $query="INSERT INTO `question` (`qqid`, `qid`, `q_desc`, `op1`, `op2`, `op3`, `op4`,`ans`) VALUES ('5', '$qid', '$Q5', '$op51', '$op52', '$op53', '$op54', '$ans5')";
       $query_run = mysqli_query($connection,$query);


       if( $query_run){
           echo '<script> alert("Quiz Updated")</script>';

       }else{
           echo '<script> alert("Quiz Not Updated")</script>';

       }
   }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quiz.css"/>
    <title>Quiz3</title>
</head>
<body>
  <div class="nav-container">
    <div class="logo">
      <img src="images/logo.jpg" align="right" height="80px" width="80px" >
    </div> 
    <button class="btn1"><img src="images/back.png" height="80px" width="60px">  </button>
      <h1 class="title" style="margin-left: 700px;">Quiz</h1>
      <form action="view1.php" method="post">
                              <input type="hidden" name="view_id" value="<?php echo $qid; ?>">
                              <button type="submit" name="view_btn" class="hbtn hb-fill-right-rev-bg-br" id="submit2"> VIEW</a></button>
                            </form>
  </div>
<div class="qa_box">
   
 <form action="" method="post">
    <div class="qa_body">
        <div class="qa_set active">
            <div class="rec1">
          <!-- <button id="submit" name="submit">Send</button> -->
     
              <input type="text1" placeholder="Untitled Form" name="q_title" id="q_title" required>

              <input style="margin-left: -870px;" type="text2" placeholder="Quiz no" name="qid" id="qid" required>
              
              <div class="select">
              <label for="unit">Unit:</label>
              <select id="unit" name="unit">
                <option value="Num">Numbers</option>
                <option value="Add">Addition</option>
                <option value="Mul">Multiplication</option>
                <option value="Sub">Substraction</option>
              </select>
              </div>
            
        </div>
      </div>
    </div>

        <div class="qa_set ">
         

            <input type="text11" placeholder="Question1" name="Q1" id="Q1" required>
            <div class="imgandrecord">
                <!-- <a href="#"><img src="../teacher_images/Rectangle 33.png"></a>
                <a href="#"><img src="../teacher_imges/Rectangle 38.png"></a> -->
            </div>
            <input type="checkbox" name="ans11" id="ch"><input type="text12" placeholder="Option1" name="op1" id="op1" required><br>
            <input type="checkbox" name="ans12" id="ch"><input type="text13" placeholder="Option2" name="op2" id="op2" required><br>
            <input type="checkbox" name="ans13" id="ch"><input type="text14" placeholder="Option3" name="op3" id="op3" required><br>
            <input type="checkbox" name="ans14" id="ch"><input type="text14" placeholder="Option4" name="op4" id="op4" required>
            <!-- <input type="text15" placeholder="Correct Option" name="ans" id="ans" required> -->

                <!-- <div class="delete">
                    <a href="#"><img style="width:30px;height:30px"  src="../teacher_images/trash.png"></a>

                </div> -->


           
        </div>



          <div class="qa_set ">
            <input type="text11" placeholder="Question2" name="Q2" id="Q2" required>
            <div class="imgandrecord">
                <!-- <a href="#"><img src="img/Rectangle 33.png"></a>
                <a href="#"><img src="img/Rectangle 38.png"></a> -->
            </div>
            <input type="checkbox" name="ans21" id="ch"><input type="text12" placeholder="Option1" name="op21" id="op1" required><br>
            <input type="checkbox" name="ans22" id="ch"><input type="text13" placeholder="Option2" name="op22" id="op2" required><br>
            <input type="checkbox" name="ans23" id="ch"><input type="text14" placeholder="Option3" name="op23" id="op3" required><br>
            <input type="checkbox" name="ans24" id="ch"><input type="text14" placeholder="Option4" name="op24" id="op4" required>

                <!-- <div class="delete">
                        <a href="#"><img style="width:30px;height:30px;"  src="../teacher_images/trash.png"></a>

                </div> -->
          </div>


             <div class="qa_set ">
              <input type="text11" placeholder="Question3" name="Q3" id="Q3" required>
              <div class="imgandrecord">
                  <!-- <a href="#"><img src="img/Rectangle 33.png"></a>
                  <a href="#"><img src="img/Rectangle 38.png"></a> -->
              </div>
                      <input type="checkbox" name="ans31" id="ch"><input type="text12" placeholder="Option1" name="op31" id="op1" required><br>
                      <input type="checkbox" name="ans32" id="ch"><input type="text13" placeholder="Option2" name="op32" id="op2" required><br>
                      <input type="checkbox" name="ans33" id="ch"><input type="text14" placeholder="Option3" name="op33" id="op3" required><br>
                      <input type="checkbox" name="ans34" id="ch"><input type="text14" placeholder="Option4" name="op34" id="op4" required>
<!--               
                  <div class="delete">
                  <a href="#"><img style="width:30px;height:30px"  src="../teacher_images/trash.png"></a>
                  </div> -->
             
            </div>
              <div class="qa_set ">
                <input type="text11" placeholder="Question4" name="Q4" id="Q4" required>
                <div class="imgandrecord">
                  <!-- <a href="#"><img src="img/Rectangle 33.png"></a>
                  <a href="#"><img src="img/Rectangle 38.png"></a> -->
                </div>
                <input type="checkbox" name="ans41" id="ch"><input type="text12" placeholder="Option1" name="op41" id="op1" required><br>
                    <input type="checkbox" name="ans42" id="ch"><input type="text13" placeholder="Option2" name="op42" id="op2" required><br>
                    <input type="checkbox" name="ans43" id="ch"><input type="text14" placeholder="Option3" name="op43" id="op3" required><br>
                    <input type="checkbox" name="ans44" id="ch"><input type="text14" placeholder="Option4" name="op44" id="op4" required>
                    <!-- <div class="delete">
                        <a href="#"><img style="width:30px;height:30px"  src="../teacher_images/trash.png"></a>

                    </div> -->
              </div>

                <div class="qa_set ">
                  <input  type="text11" placeholder="Question5" name="Q5" id="Q5" required>
                  <div class="imgandrecord">
                  <!-- <a href="#"><img src="img/Rectangle 33.png"></a>
                  <a href="#"><img src="img/Rectangle 38.png"></a> -->
                  </div>
                  <input type="checkbox" name="ans51" id="ch"><input type="text12" placeholder="Option1" name="op51" id="op1" required><br>
                      <input type="checkbox" name="ans52" id="ch"><input type="text13" placeholder="Option2" name="op52" id="op2" required><br>
                      <input type="checkbox" name="ans53" id="ch"><input type="text14" placeholder="Option3" name="op53" id="op3" required><br>
                      <input type="checkbox" name="ans54" id="ch"><input type="text14" placeholder="Option4" name="op54" id="op4" required>
                    <!-- <div class="delete">
                        <a href="#"><img style="width:30px;height:30px"  src="../teacher_images/trash.png"></a>
                    </div>    -->
                </div>
                 
                
                  <div class="qa_set">
                     <button id="submit" name="submit">Send</button>
                        </form>

                    
                      
                  </div>
    
                  <div class="qa_footer">
                    <span class="btn2" id="skip">Next</span>
                    
                  </div>
                 




</div>
               <br>  <br>
            <hr style="color: blue; ">           
        
       
    

 <script>
 var skip = document.getElementById('skip');
 var score = document.getElementById('score');
 var totalScore = document.getElementById('totalScore');
 var countdown = document.getElementById('countdown');
 var count = 0;
 var scoreCount = 0;
 var duration = 0;
 var qaSet = document.querySelectorAll('.qa_set');
 var qaAnsRow = document.querySelectorAll('.qa_set .skip input');

skip.addEventListener('click',function(){
    step()
    duration = 10;
})

// qaAnsRow.forEach(function(qaAnsRowSingle){
//     qaAnsRowSingle.addEventListener('click',function (){
//       setTimeout(function(){
//           step();
//           duration = 10;
//       },500)  

//       var valid = this.getAttribute("valid");
//       if(valid=="valid"){
//         scoreCount +=20;
//         score.innerHTML = scoreCount;
//         totalScore.innerHTML = scoreCount;
//       }else{
//         scoreCount =20;
//         score.innerHTML = scoreCount;
//         totalScore.innerHTML = scoreCount;
//       }
//     })
// });

 function step(){
     count +=1;
     for(var i=0;i<qaSet.length; i++){
         qaSet[i].className='qa_set';
     }
     qaSet[count].className='qa_set active';
     if(count==6){
         skip.style.display='none';
         clearInterval(durationTime);
         countdown.innerHTML=0;

     }
 }

//  var durationTime = setInterval(function(){
//      if(duration==10){
//         duration = 0;
//      }
//      duration +=1;
//      countdown.innerHTML=duration;
//      if(countdown.innerHTML == "10"){
//          step()
//      }
//  },1000);
  </script> 

    
</body>
</html>