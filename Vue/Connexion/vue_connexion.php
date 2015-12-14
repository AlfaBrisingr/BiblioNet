<?php
if(SessionOuverte() == false)
{
  ?>

  <form method="post" action="?uc=Connexion&action=Connexion">
    <p align="center">
    </br></br></br></br></br>
    <table>

     <tr>
       <td><b>Adresse Mail:</b><font color="#FF0000">*</font> </td>
       <td><input type="text" placeholder="Adresse Mail" name="mail"   size="20" required /></td>
     </tr>
     <tr>        
      <td><label for="mdp"><b>Mot de passe :</b><font color="#FF0000">*</font></label></td>
      <td><input type="password" placeholder="Votre mot de passe" name="mdp" id="mdp" size="20" required/></td>
    </tr>
  </br>
  <tr>
   <td></td><td><input type="submit" /></td>
 </tr>
</table>
</form>


Les champs marqués d'un <font color="#FF0000">*</font> sont obligatoires !
<?php
}


<?php
if(SessionOuverte() == false)
{
  ?>

  <form method="post" action="?uc=Connexion&action=Connexion">
    <p align="center">
    </br></br></br></br></br>
    <table>

     <tr>
       <td><b>Adresse Mail:</b><font color="#FF0000">*</font> </td>
       <td><input type="text" placeholder="Adresse Mail" name="mail"   size="20" required /></td>
     </tr>
     <tr>        
      <td><label for="mdp"><b>Mot de passe :</b><font color="#FF0000">*</font></label></td>
      <td><input type="password" placeholder="Votre mot de passe" name="mdp" id="mdp" size="20" required/></td>
    </tr>
  </br>
  <tr>
   <td></td><td><input type="submit" /></td>
 </tr>
</table>
</form>


Les champs marqués d'un <font color="#FF0000">*</font> sont obligatoires !
<?php
}


