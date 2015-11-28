<?php
if(SessionOuverte()==false)
{
  ?>

  <form method="post" action="?uc=Connexion&action=Connexion">
    <p align="center"><font face="Lucida Console, Monaco, monospace" >
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

</br></br></br></br></br></br></br></br></br></br>
<div>
 <b>Les champs marqués d'un <font color="#FF0000">*</font> sont obligatoires !</b>
</div>
<?php if(isset($_SESSION['error'])) { unset($_SESSION['error']); } ?>
<?php 
}
else
{
  ?>
</br></br></br></br>


<p align="center" >
  <div style="background-color:#02E887;width:600px; height:130px; margin:auto ;border:2px solid #018063; border-radius:4px" align="center">
    <font face="Arial" size="+2">
    </br>
    Bonjour ; Vous êtes bien connecté. 
  </font>
</div>
</p>
<?php
}
?>


