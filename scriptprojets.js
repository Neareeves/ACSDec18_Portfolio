
/******** vue des projets **********/
var projets = new Vue ({
    el: '#projets',

   data: {
        item7: {
        
            titre: 'Meme Generator',
            principe: 'A partir d’un support image, l’utilisateur devra pouvoir ajouter un contenu texte personnalisé pour transformer l\'image en meme',
            technologies: ['Ajax, ','PHP, ','JavaScript'],
            description: "Ce projet est la concrétisation de l'association de Javascript, PHP et MySQL. Il a fallu que les images soient chargées par l'utilisateur, stockées sur une base de données, puis réutilisées pour être transformées en memes, de manière à ce que les visiteurs puissent les afficher et les télécharger. Il a permis de découvrir la manipulation d'images avec PHP et les fonctions GD.",
                details: ['5 jours,','groupe de 3,','blablabla'],
            cahierCharges: ['écrire sur l\'image via un formulaire, ','déplacer le texte avec la souris'],
            illustration: 'Images/mememaker.png',
            altimg: 'Illustration ou capture d\'écran du projet',
            link: 'http://aletha.promo-24.codeur.online/Projet_13_memeR/',
            github: 'https://github.com/Neareeves/ACSDec18_MemeGenerator',
        
        },
        item6: {
        
            titre: 'Explorateur de fichiers PHP',
            principe: 'Réaliser un outil permettant de naviguer dans les dossiers et les fichiers hébergés sur le serveur',
            technologies: ['PHP, ', 'twig'],
            description: 'Découverte des fonctions de lecture, de scan et de téléchargement de fichiers avec PHP.',
            details: ['5 jours,','groupe de 4,','blablabla'],
            cahierCharges: ['Créer un outil qui permette de naviguer dans les dossiers, ','ouvrir et télécharger le fichier, ', 'créer une identité visuelle originale, '],
            illustration: 'Images/explo.png',
            altimg: 'Illustration ou capture d\'écran du projet d\'explorateur PHP',
            link: 'https://aletha.promo-24.codeur.online/Explorateur/index.php',
            github: 'https://github.com/Neareeves/',
        },
        
        item3: {
        
            titre: 'Outil de révision',
            principe: 'Réaliser une mini application de tables de multiplications',
            technologies: ['Ajax, ','boucles PHP.'],
            description: 'La page, à l\'aspect material design, doit proposer plusieurs exercices (imposés) de révision des tables de multiplications. Première utilisation d\'Ajax.',
            details: ['5 jours,','groupe de 4,','blablabla'],
            cahierCharges: ['aspect material design, ','site responsive'],
            illustration: 'Images/multiplications.png',
            altimg: 'Illustration ou capture d\'écran du projet d\'outil de révision des tables de multiplication',
            link: 'http://aletha.promo-24.codeur.online/',
            github: 'https://github.com/Neareeves/AcsOct18P9MultiplicationPhp',
        },
        
        item4: {
            titre: 'Carte de voeux animée',
             principe: 'Création d\'une carte de voeux animée pour les fêtes',
            technologies: ['format SVG, ','Smil, ', 'CSS'],
            description: 'La carte a été créée sur Illustrator, puis exportée en SVG et animée grâce à des Keyframes CSS.',
            details: ['3 jours,','solo,',''],
            cahierCharges: ['Au moins deux animations, ','un formulaire qui permet d\'envoyer la carte à quelqu\'un par mail.'],
            illustration: 'Images/cartevoeux.png',
            altimg: 'Illustration ou capture d\'écran du projet',
            link: 'http://aletha.promo-24.codeur.online/cartevoeux/',
            github: 'https://github.com/Neareeves/',
        },
        
        item5: {
            titre: 'Space Invaders',
             principe: 'Jeu Space Invaders',
            technologies: ['JavaScript'],
            description: 'Réalisation en trois jours d\'un jeu Space Invaders en JavaScript. Les éléments (aliens,blocs de protection, navette spatiale, projectiles...) ont été créés et animés sur photoshop (grâce notamment à des gifs), puis se déplacent grâce à JS. Les aliens tirent de manière aléatoire des projectiles qui détruisent les blocs de protection et la fusée. Le score est comptabilisé, ainsi que les vies, représentées par des coeurs qui se brisent lorsque la navette est percutée.',
            details: ['3 jours,','groupe de 4'],
            cahierCharges: ['Vague d\'ennemis destructible, ','vaisseau mobile et qui tire des projectiles qui détruisent les aliens'],
            illustration: 'Images/spaceinvader.png',
            altimg: 'Illustration ou capture d\'écran du projet',
            link: 'https://aletha.promo-24.codeur.online/acsoct18spaceinvaders/index.html/',
            github: 'https://github.com/Neareeves/ACSoct18SpaceInvaders',
        },
        item2: {
            titre: 'Era Transfer',
            principe: 'WeTransfer-like',
            technologies: ['PHP', 'animations CSS'],
            description: 'Réalisation d\'un site de transmission de fichiers et de dossiers. Le site ouvre sur une page avec un formulaire pour uploader ses fichiers, entrer son email et celui de son destinataire, et envoyer. Le destinataire reçoit alors un mail avec un lien pour télécharger les fichiers qu\'on lui a envoyés. Les fichiers, entre-temps, sont enregistrés dans un répertoire et compressés.',
            details: ['4 jours,','groupe de 3'],
            cahierCharges: ['Créer un service similaire à WeTransfer en insistant sur le design et l\'expérience utilisateur. Rester sur le principe "keep it simple".'],
            illustration: 'Images/ERA-wetransfer.png',
            altimg: 'Illustration ou capture d\'écran du projet',
            link: 'https://aletha.promo-24.codeur.online/Projet_15_wetransfer/',
            github: 'https://github.com/Neareeves/ACSoct18SpaceInvaders',
        },
        item: {
            titre: 'Claire la Fermière',
            principe: 'Projet réalisé en 24h dans le cadre d\'un hackathon',
            technologies: ['PHP, JS, Géolocalisation'],
            description: 'Conception et intégration d\'un site de mise en relation entre agriculteurs et citoyens intéressés par des visites à la ferme et des animations. Le site a été conçu à partir de 0 et intégré sur une journée. Nous avon développé la géolocalisation, un système de fiches où exploitations agricoles peuvent se présenter et annoncer leurs événements, et un système de contact par mail pour les visiteurs.',
            details: ['24h', 'à 2 personnes'],
            cahierCharges: ['Rapprocher agriculteurs et habitants des alentours'],
            illustration: 'Images/claire.png',
            altimg: 'Illustration ou capture d\'écran du projet',
            link: 'https://aletha.promo-24.codeur.online/',
            github: 'https://github.com/Neareeves/Hackathon_Clairelafermiere ',
        },
        item8: {
            titre: 'Portfolio sur Laravel',
            principe: 'adaptation de ce portfolio sur le framework PHP Laravel',
            technologies: ['PHP, Laravel'],
            description: 'Adaptation du site sur lequel vous êtes sur le framework PHP Laravel.',
            details: ['Projet solo'],
            cahierCharges: ['Apprendre à maîtriser les différentes fonctions de Laravel'],
            illustration: 'Images/logoaac.png',
            altimg: 'Illustration ou capture d\'écran du projet',
            link: 'https://aletharrias.com',
            github: 'https://github.com/Neareeves/ACSJan19_postfolioLaravel',
        },
    },
methods: {
    addToCart: function() {
        this.cart ++
    },
}

});


/*** traduction anglaise ************/
var projets = new Vue ({
    el: '#projetsang',

   data: {
        item6: {
        
            titre: 'Meme Generator',
            principe: 'From a given picture, the user must be able to add some customed text, and create a meme.',
            technologies: ['Ajax, ','PHP, ','JavaScript'],
            description: "The purpose of this project was to combine JavaScript, PHP and SQL languages. We had to find a way to upload pictures from a form, store them into the database, and then use it. Then, with JavaScript, the matter was to be able to write a dynamic text on the picture, and move it with the cursor. Finally, we collected the position of the text to create the meme file. The user can see it or download it.",
                details: ['5 days,','team of 3,',''],
            cahierCharges: ['Write on the picture with a form, ','move the text with the cursor'],
            illustration: 'Images/mememaker.png',
            altimg: 'Illustration or screenshot of the project',
            link: 'http://aletha.promo-24.codeur.online/Projet_13_memeR/',
            github: 'https://github.com/Neareeves/ACSDec18_MemeGenerator',
        
        },
        item4: {
        
            titre: 'PHP file explorer',
            principe: 'Create a tool to navigate from files to repositories on the server',
            technologies: ['PHP, ', 'twig'],
            description: 'We discovered how to read without executing, and download files.',
            details: ['5 days,','team of 4,',''],
            cahierCharges: ['Create a visual and original identity, ','open and download files', ],
            illustration: 'Images/explo.png',
            altimg: 'Illustration or screenshot of the project',
            link: 'https://aletha.promo-24.codeur.online/Explorateur/index.php',
            github: 'https://github.com/Neareeves/',
        
        },
        item7: {
        
            titre: 'Study tool for mathematics',
            principe: 'Create a mini app for multiplication table',
            technologies: ['Ajax, ','boucles PHP'],
            description: 'The page had to offer several (given) exercices, to practice calculation. First time I used Ajax to get the result of the operation without reloading the full page.',
            details: ['2 days,','team of 2,'],
            cahierCharges: ['material design aspect, ','responsive site'],
            illustration: 'Images/multiplications.png',
            altimg: 'Illustration or screenshot of the project',
            link: 'http://aletha.promo-24.codeur.online/',
            github: 'https://github.com/Neareeves/AcsOct18P9MultiplicationPhp',
        },
        item: {
            titre: 'Animated wish card',
             principe: 'Creation of an animated wish card for Christmas',
            technologies: ['format SVG','Smil', 'CSS'],
            description: 'I had to create an animated wish, card, starting with illustrator. I drew the elements and then edited the SVG file. Then I animated the elements with CSS.',
            details: ['3 days,','solo,'],
            cahierCharges: ['At least two animations, ','a form to send the card to someone by mail.'],
            illustration: 'Images/cartevoeux.png',
            altimg: 'Illustration or screenshot of the project',
            link: 'http://aletha.promo-24.codeur.online/cartevoeux/',
            github: 'https://github.com/Neareeves/ACSoct18SpaceInvaders',
        },
        item5: {
            titre: 'Space Invaders',
             principe: 'Space Invaders game',
            technologies: ['JavaScript', 'design programs'],
            description: 'Creation in three days of one Space Invaders game in JavaScript. The elements (aliens, spaceship, protection rocks, bullets...) were created with Photoshop and Illustrator, and turned into gifs to be animated. Then I made the invaders move and shoot randomly with JS. Everytime they touch the spaceship, it is destoyed and it looses a heart, while le score increases or gets lower, depending on the success of the player.',
            details: ['3 days,','team of 4,'],
            cahierCharges: ['DOM manipulation, ','the spaceship moves and shoots bullets, and destroys aliens'],
            illustration: 'Images/spaceinvader.png',
            altimg: 'Illustration or screenshot of the project',
            link: 'https://aletha.promo-24.codeur.online/acsoct18spaceinvaders/index.html/',
            github: 'https://github.com/Neareeves/ACSoct18SpaceInvaders',
        },
        item3: {
            titre: 'Era Transfer',
            principe: 'WeTransfer-like',
            technologies: ['PHP', 'CSS animations'],
            description: 'Creation of a tool to store and send files. The website must open on a form, to upload the files, and store the sender and receiver mails. Then, the receiver gets a mail with a link to download the files. The files are stores online and compressed before being sent.',
            details: ['4 days,','team of 3'],
            cahierCharges: ['Create a tool like WeTransfer with a strong identity. "keep it simple".'],
            illustration: 'Images/ERA-wetransfer.png',
            altimg: 'Illustration ou capture d\'écran du projet',
            link: 'https://aletha.promo-24.codeur.online/Projet_15_wetransfer/',
            github: 'https://github.com/Neareeves/ACSoct18SpaceInvaders',
        },
        item2: {
            titre: 'Claire la Fermière',
            principe: 'Made for a hackathon about rural connectivity',
            technologies: ['PHP', 'JS', 'location'],
            description: 'Conception and integration from scratch of a website to link farmers and citizens that are interested in visiting their farms. We made everything in 24hours, and were 2. We developped the location system, the forms to send mails to farmers, and the farms profiles, were visitors can see a presentation and the agenda of the activities.',
            details: ['24h', '2 people'],
            cahierCharges: ['Everything was made from scratch'],
            illustration: 'Images/claire.png',
            altimg: 'Illustration ou capture d\'écran du projet',
            link: 'https://aletha.promo-24.codeur.online/',
            github: 'https://github.com/Neareeves/Hackathon_Clairelafermiere ',
        },
        item8: {
            titre: 'Portfolio on Laravel',
            principe: 'adaptation of the website where you stand on the PHP framework Laravel',
            technologies: ['PHP, Laravel'],
            description: 'adaptation of the website where you stand on the PHP framework Laravel.',
            details: ['solo'],
            cahierCharges: ['I did this to learn Laravel\'s functions'],
            illustration: 'Images/logoaac.png',
            altimg: 'Illustration ou capture d\'écran du projet',
            link: 'https://aletharrias.com',
            github: 'https://github.com/Neareeves/ACSJan19_postfolioLaravel',
        },
    },
methods: {
    addToCart: function() {
        this.cart ++
    },
}

});

// data: {
//         item: [
//         {
//         titre: 'Meme Generator',
//         description: 'gfdgfd',
//         details: ['5 jours','groupe de 3','blablabla'],
//         cahierCharges: ['écrire sur l\'image via un formulaire','déplacer le texte avec la souris']},
//         ],
//         inventaire: 0,
//         cart:0,
//         detailess: ['en 5 jours','par groupe de 3','blablabla'],
//     },