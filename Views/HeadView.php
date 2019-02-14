<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Portfolio</title>
  <link href="https://fonts.googleapis.com/css?family=Anton|Righteous|Timmana" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/sidebar.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="manifest" href="manifest.json">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>


  <!-- <div style="font-size:30px;cursor:pointer"> -->

    <div class="container" id="containBurger">
      <!-- input:checked along with the + and ~  selectors can be used to watch for a state change with CSS-->


      <input type="checkbox" id="menu21" />
      <label for="menu21"  id="burger">
        <div></div>
        <div></div>
        <div></div>
      </label>

    </div>
    <!-- </div> -->

    <div id="mySidenav" class="sidenav">
<!-- <nav>
  <ul> -->
  <!-- <a href="#"><span class='francais icone'><img src="logoaac.png"></span></a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a> -->
  <span class="icone"><a href="?page=home"><img src="logoaac.png"></a></span>
  <span class='francais icone'><a href="?page=accueil"><i class="fas fa-user-circle"></i></a></span>
  <span class='anglais icone'><a href="?page=accueil"><i class="fas fa-user-circle"></i></a></span>

  <span class='francais icone'><a href="?page=projets"><i class="fas fa-code"></i></a></span>
  <span class='anglais icone'><a href="?page=projets"><i class="fas fa-code"></i></a></span>
  <span class='francais icone'><a href="Images/CV.pdf"><i class="fas fa-address-card"></i></a></span>
  <span class='anglais icone'><a href="Images/resume.pdf"><i class="fas fa-address-card"></i>
  </a></span>
  <span class="icone"><a href="?page=accueil#contact"><i class="fas fa-file-signature"></i></a></span>
  <span id="inEnglish"  class="francais icone"><img id="inEnglish" src="Images/GB.png"></span>
  <span id="inFrench" class="anglais icone"><img src="Images/FR.png"></span>
     <!-- </ul>
     </nav> -->
   </div>
   <script>

//Just to flash the showcase, this is pure CSS
var inputs = document.getElementsByTagName("input"),
labels = document.getElementsByTagName("label");

//Label Menus to make them easier to search for
// for (var x = 0; x < labels.length; x++){
//   labels[x].innerHTML += "<b>Menu "+ (x + 1) + "</b>";
// }

//Checks all checkboxs triggering all CSS transitions 
function check (status) {
  for (var x = 0; x < inputs.length; x++){
    inputs[x].checked = status;
  }
  if(status){
    var uncheck = setTimeout(function() { 
      check(false);
    }, 2000);
  }
  
}


// Triggers demonstration on button click


// Flashes menus on load
document.addEventListener("DOMContentLoaded", function(event) { 
  check(true);
});



//push sidebar
let swticher =0;
function openNav() {

}

function closeNav() {
  console.log(swticher);
  if (swticher == 1) {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.getElementById("containBurger").style.marginLeft = "0px";
    swticher = 0;

  }else if (swticher == 0) {

    document.getElementById("mySidenav").style.width = "180px";
    document.getElementById("main").style.marginLeft = "180px";
    document.getElementById("containBurger").style.marginLeft = "200px";
    swticher = 1;

  }
}


//sinon, class open, qui s'enleve ou s'en va au click par une fonction js
document.getElementById("burger").addEventListener('click',closeNav);

</script>