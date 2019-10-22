<html>
    <head></head>
    <body>
	<div class="page">
    	<div class="section" id="sectionContact">
						<h2>Contact</h2>
						<div class="siteInternet"></div>
						<div class="formulaire" id="formulair"></div>
						<p><span class="error">* required field</span></p>
							<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<div>
									<label for="name">Nom :</label>
									<input type="text" id="name" name="user_name" value="<?php echo $name;?>">
									<span class="error">* <?php echo $nameErr;?></span>
  									<br><br>
								</div>
								<div>
									<label for="mail">E-mail :</label>
									<input type="email" id="mail" name="user_mail" multiple value="<?php echo $email;?>">
									<span class="error">* <?php echo $emailErr;?></span>
  									<br><br>
								</div>
								<div>
									<label for="contact">Message :</label>
									<textarea name="contact" name="user_contact"><?php echo $comment;?></textarea>
								</div>
								<div class="boutton">
									<button type="button">Envoyer</button>
								</div>
	</div>
							</form>
                    </div>

    </body>
</html>