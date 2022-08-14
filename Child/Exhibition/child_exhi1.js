// function like() {
//     const xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//         console.log( this.responseText )
//       }
//     };
//     xhttp.open("POST", "child_exhi4_1.php/");
//     xhttp.setRequestHeader("Content-type" , "apllication/x-www-form-urlencoded");
//     xhttp.send( );
//   }

function like(id) {
    var likee;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
      likee=this.responseText
      // document.getElementById('likeCount').innerText=likee
    }
  };
  xhttp.open("POST", "child_exhi1_1.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("fname="+id);
  alert(id)
}


