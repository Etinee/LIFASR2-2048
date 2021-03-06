<!-- jeu-2048.php -->
<html>
 <head>
 	<meta charset="utf-8" />
  <?php   global $score = 0;
  require_once 'fonctions-2048.php'; ?>
  <link rel="stylesheet" href="style2048.css" />
  <title>2048</title>
 </head>
 <body>
 	<?php write_log("action-joueur=".$_GET['action-joueur']."\n");
   ?>

   <h1>Venez jouer au 2048 ! </h1>
   <h3>Le but de ce jeu simple et de faire glisser les cases sur la grille,
      pour combiner deux cases de même valeur et ainsi créer une nouvelle case
      portant la somme des deux précédentes. Il faut continuer ainsi jusqu'à
      obtenir la case 2048 ! (ou plus pour les pros)</h3>
    <div class="regle">
      <p>Le jeu se présente sous la forme d'une grille 4x4. Au début de la
        partie, deux cases contiennent un chiffre (2 ou 4). Les nombres peuvent
        se déplacer à droite, à gauche, en haut ou en bas. Quand deux cases de
        même valeur se rencontrent, elles fusionnent en une case qui vaut la
        somme des 2 cases fusionnées. Après chaque action du joueur, une
        nouvelle case apparaît avec pour valeur 2 ou 4. Le but est donc
        d'obtenir une case valant 2048 avant que la grille ne soit pleine et
        qu'aucun mouvement ne soit plus possible. Si plus aucun mouvement n'est
        possible, la partie est perdue.<br />
       <a target="_blank" href="http://perso.univ-lyon1.fr/olivier.gluck/supports_enseig.html#LIFASR2">plus d'information ici</a>
     </p>
    </div>
   <h2>Score = <?php affiche_score; ?></h2>
   <form class="jeu-2048" action="jeu-2048.php" method="get">
     <input type="submit" name="action-joueur" value="Nouvelle Partie" />
   </form>
    <table>
      <tr>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </table>
   <form class="jeu-2048" action="jeu-2048.php" method="get">
     <input type="submit" name="action-joueur" value="←">
     <input type="submit" name="action-joueur" value="↑">
     <input type="submit" name="action-joueur" value="↓">
     <input type="submit" name="action-joueur" value="→">
   </form>
   <div class="fin"></div>
 </body>
</html>
