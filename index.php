<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = [
    'unsolo@hotmail.fr',
    'bataillesylvie@live.fr',
    'heliosens59@gmail.com',
];

$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                Actualité : nous essayons d\'envoyer des mails
            </div>
        </body>
    </html>
';

foreach ($to as $adress){
    echo mail($adress, 'Newsletter', $html, "From: heliosens59@gmail.com") ?
        "$adress : succès<br>" : "$adress : échec<br>";
    }

