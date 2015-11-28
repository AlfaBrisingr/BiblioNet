</br>
<font color="#333333" size="+4" face="broadway"> <div align="center" > Formulaire d'inscription ! </div></font>

<form method="post" action="?uc=Inscription&action=Inscription" >
	<p align="center"><font face="Lucida Console, Monaco, monospace"  >
		<table>
			<tr>
        <td><b>Nom:</b><font color="#FF0000">*</font> </td>
        <td><input type="text" placeholder="nom" name="nom"   size="20" required /></td>
      </tr>
      <tr>        
        <td><b>Prénom:</b><font color="#FF0000">*</font> </td>
        <td><input type="text" placeholder="Prenom" name="prenom"   size="20" required /></td>
      </tr>
      <tr>
        <td><label for="msg" ><b>E-mail :</b><font color="#FF0000">*</font> </label></td>
        <td><input type="email" placeholder="Votre adresse E-mail" name="mail" id="email" size="20" required/></td>
      </tr>
      <tr>
        <td><b>Mot de passe:</b><font color="#FF0000">*</font> </td>
        <td><input type="password" placeholder="Votre mot de passe" name="mdp"   size="20" required /></td>     
      </tr>
      <tr>        
        <td><b>Adresse:</b><font color="#FF0000">*</font> </td>
        <td><input type="text" placeholder="Adresse" name="adresse"   size="20" required /></td>
      </tr>
      <tr>        
        <td><b>Code Postal:</b><font color="#FF0000">*</font> </td>
        <td><input type="text" placeholder="CodePostal" name="code"   size="20" required /></td>
      </tr>
      <tr>        
        <td><b>Ville:</b><font color="#FF0000">*</font> </td>
        <td><input type="text" placeholder="Ville" name="ville"   size="20" required /></td>
      </tr>
      <tr>
       <td></td><td><input type="submit" /><input type="reset" /></td>
     </tr>

   </table>
 </form>
</font></p>
<?php if(isset($_SESSION['error'])) { unset($_SESSION['error']); } ?>