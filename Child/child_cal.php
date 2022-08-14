<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_cal.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
    <title>Calendar</title>
</head>
<body>


    <section>
        <div class="box">
            <div class="container">
                <div id="dycalendar"></div>
            </div>
        </div>
    </section>
  <div class="container">
        <div class="calendar">
             <div class="month">
                 <i class="fas fa-angle-left prev"> </i>
                     <div class="date">
                          <h1></h1>
                          <p></p>
                     </div>
                     <i class="fas fa-angle-right next"></i>
             </div>
             <div class="weekdays">
                 <div>Sun</div>
                 <div>Mon</div>
                 <div>Tue</div>
                 <div>Wed</div>
                 <div>Thu</div>
                 <div>Fri</div>
                 <div>Sat</div>
             </div>
             <div class="days">
                 
             </div>
        </div>
    </div> -->


<!-- <script src="dycalendar.js"></script>

<script>
    dycalendar.draw({
        target:'dycalendar',
        type:'month'
    })
</script>

    
</body>
</html>  -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calendar</title>
    <link rel="stylesheet" href="child_cal.css" />
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
   
       <div class="logo-bar"> 
  
    <a  href="child_dashboard.php">
        <button class="btn1"><img src="images/back.png" height="80px" width="60px">  </button>
      </a>
      <img src="images/logo.jpg" align="right" height="80px" width="80px" >
  </div>
    <div class="container">
      
           
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
            <h1></h1>
            <p></p>
          </div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="days"></div>
      </div>
      <hr style="color: blue; ">           
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div>  
    </div>

    <script src="child_cal.js"></script>
  </body>
</html>