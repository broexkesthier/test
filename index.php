<?php include 'head.php'; ?>

    <section class="jumbotron">
        <div class="container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3 col-sm-offset-1">
                                <h3>Leidenschaft</h3>
                                <p>Lebe deinen Traum!</p>
                            </div>
                            <div class="col-sm-6 col-sm-offset-1">
                                <img class="img-responsive" title="Teaser" src="img/gallery_teaser_01.png" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3 col-sm-offset-1">
                                <h3>Spaß</h3>
                                <p>Genieße dein Leben!</p>
                            </div>
                            <div class="col-sm-6 col-sm-offset-1">
                                <img class="img-responsive" title="Teaser" src="img/gallery_teaser_02.png" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3 col-sm-offset-1">
                                <h3>Vitalität!</h3>
                                <p>Gesundheit für Körper, Geist & Seele!</p>
                            </div>
                            <div class="col-sm-6 col-sm-offset-1">
                                <img class="img-responsive" title="Teaser" src="img/gallery_teaser_03.png" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="three-columns">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="img/pole_icon.png" />
                    <p><strong>Pole Dance kann jeder lernen - auch Du!</strong></p>
                </div>
                <div class="col-sm-4">
                    <img src="img/kalender_icon.png" />
                    <p><strong>Workshop & Events</strong></p>
                </div>
                <div class="col-sm-4">
                    <img src="img/junggesellinnenabschied_icon.png" />
                    <p><strong>Junggesellinnenabschied bei uns feiern!</strong></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                    <img class="img-responsive" title="Pole Dance" src="img/section_pole_dance.png" />
                </div>
                <div class="col-sm-6">
                    <h2>Unsere etwas anderen Tanzkurse warten auf Dich!</h2>
                    <p>Bestimmt auch der perfekte Tanzkurz für Dich! Schau bei unseren Kursen vorbei und melde Dich direkt zum nächsten Kurs bei uns zur Probestunde an.</p>
                    <p><a class="btn btn-default" role="button" href="<?=BASE?>kurse.php">Mehr lesen</a></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container wegbeschreibung">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Dein Weg zu uns!</h2>
                    <p>Ob mit dem Auto, Bus oder Bahn - wir sind schnell erreichbar!</p>
                    <p>Tanzloft NRW<br>
                    Sittarder Straße 63<br>
                    41748 Viersen</p>
                    <p><a class="btn btn-default" href="<?=BASE?>kontakt.php" role="button">Mehr lesen</a></p>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <img class="img-responsive" title="Wegbeschreibung" src="img/section_wegbeschreibung.png" />
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>  