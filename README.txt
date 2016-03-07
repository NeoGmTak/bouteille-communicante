Pour pouvoir utiliser le site il faut d'abord ajouter la base de données à PHPMyAdmin dans un base de données appelée "bouteille"
Ensuite si vous êtes sur MAC il faut rajouter "root" à la ligne 4 pour le dernier champ normalement vide : ''.

Pour ce site nous avons utilisé l'API openweathermap.org qui nous permet de récupérer la température en JSON via un appel AJAX en jQuery.
Cette température nous permet de définir une fréquence à laquelle une personne doit boire. 
Une fois qu'une personne à bu celle-ci, ou son aide soignante, doit cliquer sur le bouton "La patiente a bu" qui permet de définir d'ajouter à la bdd le fait qu'elle a bu.
Si une personne ne boit pas pendant un certain temps (ici le temps est en seconde pour faire des tests) une alerte apparaît et un son se lance.
