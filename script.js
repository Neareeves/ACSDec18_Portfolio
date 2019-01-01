 // Mode anglais/français

 let languageSwitchInEnglish = document.getElementById('inEnglish');
 let languageSwitchInFrench = document.getElementById('inFrench');
 let anglais = document.getElementsByClassName('anglais');
 let francois = document.getElementsByClassName('francais');

 

 for (var i = 0; i < francois.length; i++) {
    francois[i].style.display= 'block';
}
for (var i = 0; i < anglais.length; i++) {
   anglais[i].style.display='none';
}

function switchIdiomaEN() {

        for (var i = 0; i < francois.length; i++) {
            francois[i].style.display="none";
        }
            for (var i = 0; i < anglais.length; i++) {
            anglais[i].style.display= 'block';}
       }
languageSwitchInEnglish.addEventListener('click', switchIdiomaEN);
function switchIdiomaFR() {
 
        for (var i = 0; i < francois.length; i++) {
            francois[i].style.display= 'block';
        }
         for (var i = 0; i < anglais.length; i++) {
            anglais[i].style.display="none";}
}
languageSwitchInFrench.addEventListener('click', switchIdiomaFR);


var accueil = new Vue ({
    el: '#accueil',

    data: {
        produit: 'bottes',

        details: ['leather','elastane','blablabla'],
        inventaire: 0,
        cart:0,
    },
    methods: {
        addToCart: function() {
            this.cart ++
        },
    }

})


//modals************************************************
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 

//   var app = new Vue ({
//     el: '#app',

//     data: {
//         produit: 'bottes',
//         image: 'fond_jungle3.jpg',
//         details: ['leather','elastane','blablabla'],
//         inventaire: 0,
//         cart:0,
//     },
//     methods: {
//         addToCart: function() {
//             this.cart ++
//         },
// }

// })