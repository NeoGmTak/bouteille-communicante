Pour pouvoir utiliser le site il faut d'abord ajouter la base de donn�es � PHPMyAdmin dans un base de donn�es appel�e "bouteille"
Ensuite si vous �tes sur MAC il faut rajouter "root" � la ligne 4 pour le dernier champ normalement vide : ''.

Pour ce site nous avons utilis� l'API openweathermap.org qui nous permet de r�cup�rer la temp�rature en JSON via un appel AJAX en jQuery.
Cette temp�rature nous permet de d�finir une fr�quence � laquelle une personne doit boire. 
Une fois qu'une personne � bu celle-ci, ou son aide soignante, doit cliquer sur le bouton "La patiente a bu" qui permet de d�finir d'ajouter � la bdd le fait qu'elle a bu.
Si une personne ne boit pas pendant un certain temps (ici le temps est en seconde pour faire des tests) une alerte appara�t et un son se lance.
