<?php
session_start();
include 'include/header.php';
?>
<h1>Besoin d'informations? Contactez-nous!</h1>

<form method="post" action="infosform.php">


  <label>Prénom</label> : <input type="text" name="prenom"/></br>
  <label>Nom</label> : <input type="text" name="nom"/></br>
  <label>Adresse mail</label> : <input type="text" name="mail"/></br>
  <label>Message</label> : <input type="text" name="message"/></br>

<input type="submit" value="Valider" />


</form>
<?php
include 'include/footer.html';