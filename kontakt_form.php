<?php

    include_once 'functions.php';
    
    if(isset($_POST['name']))    {$name =  strip_tags($_POST['name']);    }else{$name  = '';}
    if(isset($_POST['email']))   {$email = strip_tags($_POST['email']);   }else{$email = '';}
    if(isset($_POST['telefon'])) {$telefon = strip_tags($_POST['telefon']); }else{$telefon = '';}
    if(isset($_POST['text']))    {$text =  strip_tags($_POST['text']);    }else{$text  = '';}
    
    $mailOk = false;
    $captchaErr = false;

    if(
        $name != '' && 
        $email != '' && checkEmail($email) &&
        $text != '' && 
        isset($_POST['captcha_code'])
    ){
        $captchaErr = true;
        include_once 'securimage/securimage.php';
        $securimage = new Securimage();
        if($securimage->check($_POST['captcha_code'])){
            $captchaErr = false;
            $mailOk = true;
            
            $from_name = 'Tanzloft Kontaktformular';
            $from_email = 'formular@tanzloft-nrw.de';
            // $to_email = 'info@tanzloft-nrw.de';
            $to_email = 'broexkes.thier@gmail.com';
            $subject = 'Kontaktaufnahme von "'.$name.'" über die Webseite';
            $text_message = 
                "Name: '".$name."'\n
                E-Mail: '".$email."'\n
                Telefonnummer: '".$telefon."'\n
                Nachricht:\n
                -----------------------\n
                ".$text."
                -----------------------\n";
            $html_message = 
                "Name: '".$name."<br />
                E-Mail: '".$email."<br />
                elefonnummer: '".$telefon."<br />
                Nachricht:<br />
                <hr />
                ".str_replace("\n",'<br />',$text)."
                <hr />";
            sendHTMLmail($from_name, $from_email, $to_email, $subject, $text_message, $html_message);
        }
    }

 include 'head.php'; ?>

    <section class="jumbotron">
    	<div class="container">
    		<div class="row">
                <div class="col-md-6">
			        <h2>Kontakt</h2>
			        <p>Wir freuen uns auf Dich!</p>
		    	</div>
	    	</div>
    	</div>
    </section>
    <section>
        <div class="container content">
            <?php if(!$mailOk){ ?>
            <h2>Anschrift</h2>
            <div class="row">
                <div class="col-md-8">
                    <p>Tanzloft NRW<br>Sittarder Straße 63<br>41748 Viersen</p>
                    <p>Tel: 02133 - 23 42 23<br>E-Mail: <a href="mailto:info@tanzloft-nrw.de">info@tanzloft-nrw.de</a><br>41748 Viersen</p>
                </div>
                <!--<div class="col-md-4">
                    <p>- gute parkmöglichkeiten</p>
                    <p>- gute verkehrsanbindung</p>
                </div>-->
            </div>
            <hr>
            <h2 id="kontaktformular">Kontaktformular</h2>
            <form name="contactForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validateContactForm();">
                <div class="form-group">
                    <label for="InputName">Name, Vorname</label>
                    <input type="text" class="form-control" id="InputName" placeholder="Name, Vorname" name="name" value="<?php echo $name; ?>">
                </div>
                <div class="form-group">
                    <label for="InputEmail">E-Mail Adresse</label>
                    <input type="email" class="form-control" id="InputEmail" placeholder="E-Mail Adresse" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                    <label for="InputTelefon">Telefon</label>
                    <input type="tel" class="form-control" id="InputTelefon" placeholder="Telefon" name="telefon" value="<?php echo $telefon; ?>">
                </div>
                <div class="form-group">
                    <label for="TextareaNachricht">Ihre Nachricht</label>
                    <textarea name="text" class="form-control" rows="3" id="TextareaNachricht"><?php echo $text; ?></textarea>
                </div>
                <div class="form-group">
                    <p>Sicherheitscode</p>
                    <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" /><span class="refresh"></span>
                    <p>Geben Sie hier die Lösung der Rechnung ein:</p>
                     <input type="text" class="form-control" name="captcha_code" maxlength="6" <?php if($captchaErr){echo 'class="wrong test"';} ?>/>
                    <?php
                        if($captchaErr){
                            echo '<br />Ups, der eingegebene Code war falsch. Versuch es noch einmal!';
                        }
                    ?>
                    </div>
                <div class="form-group cleafix">
                    <div class="pull-right">
                        <input type="reset" value="Zurücksetzen" class="btn btn-default" />
                        <input type="submit" value="Absenden"  class="btn btn-default" />
                    </div>
                </div>
            </form>

            <?php }else{ ?>
                <div class="confirm-site">
                    <h2>Vielen Dank, <?php echo $name; ?>.</h2>
                    <p>Die Nachricht wurde erfolgreich verschickt.</p>
                </div>
            <?php } ?>
        </div>
    </section>




   
   
<?php include 'footer.php'; ?>  