<?php include 'head.php'; ?>

    <section class="jumbotron">
    	<div class="container">
    		<div class="row">
                <div class="col-md-5">
			        <h2>Kontakt</h2>
			        <p>Bei Fragen kannst du uns gerne kontaktieren.</p>
		    	</div>
	    	</div>
    	</div>
    </section>
    <section>
        <div class="container content">
            <h2>Anschrift</h2>
            <p>Tanzloft NRW<br>Sittarder Straße 63<br>41748 Viersen</p>
            <p>Tel: 02133 - 23 42 23<br>E-Mail: <a href="mailto:info@tanzloft-nrw.de">info@tanzloft-nrw.de</a><br>41748 Viersen</p>
            <hr>
            <h2>Kontaktformular</h2>
            <form>
                <div class="form-group">
                    <label for="InputName">Name, Vorname</label>
                    <input type="text" class="form-control" id="InputName" placeholder="Name, Vorname">
                </div>
                <div class="form-group">
                    <label for="InputEmail">E-Mail Adresse</label>
                    <input type="email" class="form-control" id="InputEmail" placeholder="E-Mail Adresse">
                </div>
                <div class="form-group">
                    <label for="InputTelefon">Telefon</label>
                    <input type="number" class="form-control" id="InputTelefon" placeholder="Telefon">
                </div>
                <div class="form-group">
                    <label for="TextareaNachricht">Ihre Nachricht</label>
                    <textarea class="form-control" rows="3" id="TextareaNachricht"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Absenden</button>
            </form>
        </div>
    </section>
   
<?php include 'footer.php'; ?>  