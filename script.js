 // Mode anglais/français

let languageSwitch = document.getElementById('languageSwitch');



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