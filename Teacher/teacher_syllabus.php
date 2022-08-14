<?php
session_start();
  
if(!$_SESSION['id']){
    header('location:../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>Syllabus</title>
    <link rel="stylesheet" href="./teacher_syllabus.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
   
</head>
<body>
    <input type="checkbox" name="" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="brand-flex">
                <a href="./teacher_profile.php"><img src="./teacher_images/logo.png" width="50px" alt=""></a>

                <div class="brand-icons">
                    <!-- <span class="las la-bell"></span> -->
                    <a style="margin-left:170px" href="./teacher_mailbox/mailbox.php"><span class="las la-bell"></span><a>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
               
             <img src="teacher_images/teacher2.jpg"  alt="">
                    <div>
                   <h3><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h3>
                   <span><?php echo ($_SESSION['email']); ?></span> 
            </div>
         </div>
         <div class="sidebar-menu">
               
            <ul>
              
               <li><a href="./teacher_dashboard.php">
                   <span class="las la-tachometer-alt"></span>Dashboard
               </a></li>

               <li><a href="./teacher_subjects/sub_grade1.php">
                   <span class="las la-book"></span>Subjects
               </a></li>

               <li><a href="./mystudents/mystudents.php"><span class="las la-users"></span>My Students</a></li>

               <li><a href="./teacher_quiz/quiz.php"><span class="las la-check-circle"></span>Tasks</a>
               </li>
                
                <li><a href="./analytics/progressreport.php"><span class="las la-chart-pie"></span>Analytics</a></li>

                <li><a href="./teacher_calendar/calendar_0/index.php">
                    <span class="las la-calendar"></span>Calendar
                </a></li>
                
                <li>
                <a href="./teacher_discussion/discussion.php">
                   <span class="las la-users"></span>Discussion
               </a></li>

               <li>
                <a href="./teacher_exhibition.php">
                   <span class="las la-images"></span>Exhibition
               </a></li>

           
               <li><a href="./ChatApp/login.php"><span class="las la-comments"></span>Chat</a></li>
               

               <li><a href="./teacher_finance/finance.php">
                   <span class="las la-credit-card"></span>Finance
               </a></li>


               <li><a href="../login.php">
               <span class="fas fa-sign-out-alt"></span>Logout
               </a></li>

            </ul>



   </div>
    </div>

</div>


        <div class="main-content">
            <header>
                <div class="menu-toggle">
                    <label for="sidebar-toggle">
                        <span class="las la-bars"></span>
                    </label>
                </div>
                

                <div class="header-icons">
                    <!-- <span class="las la-search"></span>
                    <span class="las la-bookmark"></span>
                    <span class="las la-sms"></span> -->
                </div>
            </header>

            <main>
                <div class="page-header">
                    <div>
                        <a href="./teacher_subjects/mathematics/grade1/subjectindex.php">Back</a>
                        <h3>
                            Syllabus
                        </h3>
                    </div>
                 
                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a> -->

                    </div>
                  
                </div>
                
                <div class="container1">
              
                <h>Mathematics</h>
                <table>
                       
                    <tr>
                          
                        <td></td>
                   
                        <td><b>Grade 1</b></td>
                        <td><b>Grade 2</b></td>
                        <td><b>Grade 3</b> </td>
                        <td><b>Grade 4</b></td>
                        <td><b>Grade 5</b></td>
                       
                        <td></td>
            
                    </tr>
                  
                    <tr>
                      
                        <td>Numbers</td>
                        <td>
                            <ul>
                            <li>Chap1)Introduction Numbers</li>
                            <li>Chap2)Game with Numbers</li>
                            <li>Chap3)Using seeds and count</li>
                            <li>Chap4)Writing Numbers</li>
                            </ul>

                        </td>
                        <td>
                            <ul>
                            <li>Chap1)Introduction Numbers</li>
                            <li>Chap2)Game with Numbers</li>
                            <li>Chap3)Using seeds and count</li>
                            <li>Chap4)Writing Numbers</li>
                            <li>Chap5)Working with Numbers</li>
                               
                                </ul>

                        </td>
                        <td>
                            <ul>
                            <li>Chap1)Introduction Numbers</li>
                            <li>Chap2)Game with Numbers</li>
                            <li>Chap3)Using seeds and count</li>
                            <li>Chap4)Writing Numbers</li>
                            <li>Chap5)Working with Numbers</li>
                            <li>Chap6)Introducing numbers to others</li>
                               
                                </ul>
                        </td>
                        <td>
                            <ul>
                            <li>Chap1)Introduction Numbers</li>
                            <li>Chap2)Game with Numbers</li>
                            <li>Chap3)Using seeds and count</li>
                            <li>Chap4)Writing Numbers</li>
                            <li>Chap5)Working with Numbers</li>
                            
                                </ul>
                        </td>
                        <td>
                            <ul>
                            <li>Chap1)Introduction Numbers</li>
                            <li>Chap2)Game with Numbers</li>
                            <li>Chap3)Using seeds and count</li>
                            <li>Chap4)Writing Numbers</li>
                            <li>Chap5)Working with Numbers</li>
                            <li>Chap6)Introducing numbers to others</li>
                                
                                </ul>
                        </td>
                       
                     
                    </tr>
                    <tr>
                      
                      <td>Addition</td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          </ul>

                      </td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          <li>Chap5)Working with Numbers</li>
                             
                              </ul>

                      </td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          <li>Chap5)Working with Numbers</li>
                          <li>Chap6)Introducing numbers to others</li>
                             
                              </ul>
                      </td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          <li>Chap5)Working with Numbers</li>
                          
                              </ul>
                      </td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          <li>Chap5)Working with Numbers</li>
                          <li>Chap6)Introducing numbers to others</li>
                              
                              </ul>
                      </td>
                     
                   
                  </tr>
                  <tr>
                      
                      <td>Multiplication</td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          </ul>

                      </td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          <li>Chap5)Working with Numbers</li>
                             
                              </ul>

                      </td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          <li>Chap5)Working with Numbers</li>
                          <li>Chap6)Introducing numbers to others</li>
                             
                              </ul>
                      </td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          <li>Chap5)Working with Numbers</li>
                          
                              </ul>
                      </td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          <li>Chap5)Working with Numbers</li>
                          <li>Chap6)Introducing numbers to others</li>
                              
                              </ul>
                      </td>
                     
                   
                  </tr>
                  <tr>
                      
                      <td>Substraction</td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          </ul>

                      </td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          <li>Chap5)Working with Numbers</li>
                             
                              </ul>

                      </td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          <li>Chap5)Working with Numbers</li>
                          <li>Chap6)Introducing numbers to others</li>
                             
                              </ul>
                      </td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          <li>Chap5)Working with Numbers</li>
                          
                              </ul>
                      </td>
                      <td>
                          <ul>
                          <li>Chap1)Introduction Numbers</li>
                          <li>Chap2)Game with Numbers</li>
                          <li>Chap3)Using seeds and count</li>
                          <li>Chap4)Writing Numbers</li>
                          <li>Chap5)Working with Numbers</li>
                          <li>Chap6)Introducing numbers to others</li>
                              
                              </ul>
                      </td>
                     
                   
                  </tr>
                  
                   </table>
                   <br><br>
                   <h>Sinhala</h>
                   <table>
                       
                    <tr>
                          
                        <td></td>
                   
                        <td><b>Grade 1</b></td>
                        <td><b>Grade 2</b></td>
                        <td><b>Grade 3</b> </td>
                        <td><b>Grade 4</b></td>
                        <td><b>Grade 5</b></td>
                       
                        <td></td>
            
                    </tr>
                  
                    <tr>
                      
                        <td>Words</td>
                        <td>
                            <ul>
                            <li>Introduction Numbers</li>
                            <li>Game with Numbers</li>
                            <li>Using seeds and count</li>
                            <li>Writing Numbers</li>
                            </ul>

                        </td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>

                        </td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                        </td>
                       
                     
                    </tr>
                       <tr>
                           <td>Letters</td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                          
                       </tr>
                       <tr>
                           <td>Pillam</td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                          
                       </tr>
                       <tr>
                        <td>Substraction</td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                        
                       </tr>
                  
                   </table> 
                   <br><br>
                   <h>English</h>
                   <table>
                       
                    <tr>
                          
                        <td></td>
                   
                        <td><b>Grade 1</b></td>
                        <td><b>Grade 2</b></td>
                        <td><b>Grade 3</b> </td>
                        <td><b>Grade 4</b></td>
                        <td><b>Grade 5</b></td>
                       
                        <td></td>
            
                    </tr>
                  
                    <tr>
                      
                        <td>Numbers</td>
                        <td>
                            <ul>
                            <li>Introduction Numbers</li>
                            <li>Game with Numbers</li>
                            <li>Using seeds and count</li>
                            <li>Writing Numbers</li>
                            </ul>

                        </td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>

                        </td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                        </td>
                       
                     
                    </tr>
                       <tr>
                           <td>Addition</td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                          
                       </tr>
                       <tr>
                           <td>Multiplication</td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                          
                       </tr>
                       <tr>
                        <td>Substraction</td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                        
                       </tr>
                  
                   </table>  
                   <br><br>
                   <h>Aesthetic</h>
                   <table>
                       
                    <tr>
                          
                        <td></td>
                   
                        <td><b>Grade 1</b></td>
                        <td><b>Grade 2</b></td>
                        <td><b>Grade 3</b> </td>
                        <td><b>Grade 4</b></td>
                        <td><b>Grade 5</b></td>
                       
                        <td></td>
            
                    </tr>
                  
                    <tr>
                      
                        <td>Numbers</td>
                        <td>
                            <ul>
                            <li>Introduction Numbers</li>
                            <li>Game with Numbers</li>
                            <li>Using seeds and count</li>
                            <li>Writing Numbers</li>
                            </ul>

                        </td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>

                        </td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                        </td>
                       
                     
                    </tr>
                       <tr>
                           <td>Addition</td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                          
                       </tr>
                       <tr>
                           <td>Multiplication</td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                          
                       </tr>
                       <tr>
                        <td>Substraction</td>
                        <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                           <td>
                            <ul>
                                <li>Introduction Numbers</li>
                                <li>Game with Numbers</li>
                                <li>Using seeds and count</li>
                                <li>Writing Numbers</li>
                                </ul>
                           </td>
                        
                       </tr>
                  
                   </table> 

                </div>
            </main>
        </div>
        <script src="./calendar.js"></script>
</body>
</html>