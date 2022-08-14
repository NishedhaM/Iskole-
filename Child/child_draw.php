<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="child_draw.css">
  <title>Document</title>
</head>
<body>
  <div class="nav-container">
    <a href="child_dashboard.php">
    <button class="btn1"><img src="images/back.png" height="80px" width="60px">  </button></a>
<img src="images/logo.jpg" align="right" height="80px" width="80px">
<h1>My Drawing Board</h1> 
<div class="main">
<div class="field">
  <canvas id="canvas"></canvas>
  <div class="tools">
    <button onClick="undo_last()" type="button" class="button">Undo</button>
    <button onClick="clear_canvas()" type="button" class="button">Clear</button>
    <button id="save" type="button" class="button">Save</button>
   

    <div onClick="change_color(this)" class="color-field" style="background: red;"></div>
    <div onClick="change_color(this)" class="color-field" style="background: rgb(63, 42, 255);"></div>
    <div onClick="change_color(this)" class="color-field" style="background: rgb(77, 255, 92);"></div>
    <div onClick="change_color(this)" class="color-field" style="background: rgb(255, 251, 14);"></div>

    <input onInput="draw_color = this.value" type="color" class="color-picker"
    height="100px">
    <input type="range" min="1" max="100" class="pen-range"
                onInput="draw_width = this.value">
  </div>
</div>
<br><br>
<hr style="color: blue; ">           
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div> 
</div> 
</body>
<script src="child_draw.js"></script>
</html>