
  var ven = document.getElementById("popup-1");
  var cate = document.getElementById("popup-2");
  var photo = document.getElementById("popup-3");
  var music =  document.getElementById("popup-4");
  var dance =  document.getElementById("popup-5");
  var salon =  document.getElementById("popup-6");
  var cake =  document.getElementById("popup-7");
  var deco =  document.getElementById("popup-8");
  var sound =  document.getElementById("popup-9");
  var dress =  document.getElementById("popup-10");
  // var vn = document.getElementById("ve");
  // var cat = document.getElementById("ca");
  // var pho = document.getElementById("ph");
  // var muc = document.getElementById("mu");
  // var dac = document.getElementById("da");
  // var sal = document.getElementById("sa");
  // var cak = document.getElementById("cak");
  // var dec = document.getElementById("dec");
  // var sou= document.getElementById("so");
  // var dre = document.getElementById("dr");



  var vBtn = document.getElementById("venue");
  var cBtn = document.getElementById("catering");
  var pBtn = document.getElementById("photo");
  var mBtn =  document.getElementById("music");
  var dBtn =  document.getElementById("dance");
  var sBtn =  document.getElementById("salon");
  var caBtn =  document.getElementById("cake");
  var deBtn =  document.getElementById("deco");
  var slBtn =  document.getElementById("sound");
  var dsBtn =  document.getElementById("dress");
  var cbBtn =  document.getElementById("backc");
  var pbBtn =  document.getElementById("backp");
  var mbBtn =  document.getElementById("backm");
  var dbBtn =  document.getElementById("backd");
  var sbBtn =  document.getElementById("backs");
  var cabBtn =  document.getElementById("backca");
  var debBtn =  document.getElementById("backde");
  var slbBtn =  document.getElementById("backsl");
  var drbBtn =  document.getElementById("backdr");


  // vn.className = "active";

  vBtn.onclick = function(){
    ven.style.display="none";
    cate.style.display="block";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "active";
    // pho.className ="no";
    // muc.className ="no";
    // dac.className ="no";
    // sal.className ="no";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="no";
  }

  cBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="block";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "active";
    // muc.className ="no";
    // dac.className ="no";
    // sal.className ="no";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="no";
    
  }
   
  pBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="block";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "no";
    // muc.className ="active";
    // dac.className ="no";
    // sal.className ="no";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="no";
    
  }

  mBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="block";
    salon.style.display="none";
    cake.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "no";
    // muc.className ="no";
    // dac.className ="active";
    // sal.className ="no";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="no";
    
  }

  dBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="block";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "no";
    // muc.className ="no";
    // dac.className ="no";
    // sal.className ="active";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="no";
   
  }

  sBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="block";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "no";
    // muc.className ="no";
    // dac.className ="no";
    // sal.className ="no";
    // cak.className ="active";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="no";
   
  }
  

  caBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="block";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "no";
    // muc.className ="no";
    // dac.className ="no";
    // sal.className ="no";
    // cak.className ="no";
    // dec.className ="active";
    // sou.className ="no";
    // dre.className ="no";
  
  }

  deBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="block";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "no";
    // muc.className ="no";
    // dac.className ="no";
    // sal.className ="no";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="active";
    // dre.className ="no";
   
  }

  slBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="block";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "no";
    // muc.className ="no";
    // dac.className ="no";
    // sal.className ="no";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="active";
   
  }

//   dsBtn.onclick = function(){
//     cate.style.display="none";
//     ven.style.display="none";
//     photo.style.display="none";
//     music.style.display="none";
//     dance.style.display="none";
//     salon.style.display="none";
//     cake.style.display="none";
//     deco.style.display="none";
//     sound.style.display="none";
//     dress.style.display="block";
//     conent.style.display="none";
   
//   }


cbBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="block";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "active";
    // cat.className = "no";
    // pho.className = "no";
    // muc.className ="no";
    // dac.className ="no";
    // sal.className ="no";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="no";
   
  }


pbBtn.onclick = function(){
    cate.style.display="block";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "active";
    // pho.className = "no";
    // muc.className ="no";
    // dac.className ="no";
    // sal.className ="no";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="no";
}



mbBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="block";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "active";
    // muc.className ="no";
    // dac.className ="no";
    // sal.className ="no";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="no";
}


dbBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="block";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "no";
    // muc.className ="active";
    // dac.className ="no";
    // sal.className ="no";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="no";
}


sbBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="block";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "no";
    // muc.className ="no";
    // dac.className ="active";
    // sal.className ="no";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="no";
}


cabBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="block";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "no";
    // muc.className ="no";
    // dac.className ="no";
    // sal.className ="active";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="no";
}


debBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="block";
    deco.style.display="none";
    sound.style.display="none";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "no";
    // muc.className ="no";
    // dac.className ="no";
    // sal.className ="no";
    // cak.className ="active";
    // dec.className ="no";
    // sou.className ="no";
    // dre.className ="no";
}


slbBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="block";
    sound.style.display="none";
    dress.style.display="none";
//     vn.className = "no";
//     cat.className = "no";
//     pho.className = "no";
//     muc.className ="no";
//     dac.className ="no";
//     sal.className ="no";
//     cak.className ="no";
//     dec.className ="active";
//     sou.className ="no";
//     dre.className ="no";
 }


drbBtn.onclick = function(){
    cate.style.display="none";
    ven.style.display="none";
    photo.style.display="none";
    music.style.display="none";
    dance.style.display="none";
    salon.style.display="none";
    cake.style.display="none";
    deco.style.display="none";
    sound.style.display="block";
    dress.style.display="none";
    // vn.className = "no";
    // cat.className = "no";
    // pho.className = "no";
    // muc.className ="no";
    // dac.className ="no";
    // sal.className ="no";
    // cak.className ="no";
    // dec.className ="no";
    // sou.className ="active";
    // dre.className ="no";
}