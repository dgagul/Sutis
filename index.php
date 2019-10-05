<!DOCTYPE html>

<?php include('php/send_email.php');?>


<html lang="de-CH" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Bildschirmgrösse für andere Geräte, kein Zoom -->
    <meta name="keywords" content="sutis, bbq, party, grill, catering, imbiss, familienbetrieb, barbecue, holzkohle, pius suter, monika suter, event, betriebsfest">

    <title>Sutis | Spezialitäten</title>

    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-medium.css">
    <link rel="stylesheet" type="text/css" href="css/style-small.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Roboto+Slab|Roboto:500&display=swap" rel="stylesheet">
    <link rel="icon" href="Bilder/favicon.ico.ico" type="image/x-icon">
  </head>

  <body>

    <!-- HEADER ----------------------------------------->

    <header>
      <div id="logo">
        <a href="#home">
          <img src="Bilder/logo-sutis.gif" alt="Logo">
        </a>
      </div>

      <nav id="main-nav">
        <i class="fas fa-bars"> MENU</i>
        <i class="fas fa-times"></i>
        <ul>
          <a href="#home"><li>Home</li></a>
          <a href="#angebot"><li>Angebot</li></a>
          <a href="#impressionen"><li>Impressionen</li></a>
          <a href="#überuns"><li>Über uns</li></a>
          <a href="#kontakt"><li>Kontakt</li></a>
        </ul>
      </nav>
    </header>

    <!-- HOME ----------------------------------------->

    <section id="home">
      <hr>
      <img src="Bilder/SUTIS-Schrift.png" alt="SUTIS" id="h1"></img>
      <h2>Imbiss & BBQ Catering</h2>
      <a href="#angebot">
        <img src="Bilder/pfeil.png" style="background-color:white" alt="Pfeil" id="pfeil">
      </a>
    </section>

    <!-- ANGEBOT ----------------------------------------->

    <section id="angebot">
      <h3>Angebot</h3>
      <hr>
      <div id="imbiss">
        <div class="abschnitt">
          <h4>Imbiss</h4>
          <img src="Bilder/imbiss.jpg" alt="imbiss"></img>
          <p>
          Unsere beiden Imbisswagen trifft man an verschiedenen Anlässen wie Messen, Märkten oder an der Fasnacht an. Wo immer möglich, setzen wir <span id="frische">regionale,
          frische und gesunde Produkte</span> ein. Feine Würste vom Grill, saftige Hamburger, verschiedene Hot Dogs mit frisch gebackenem Brot und leckere Raclette- und
          Chnobli-Brote geniesst man bei uns. <br><br> <span id="zitat"> Doch der Mensch lebt nicht vom Brot allein. Nach einer gewissen Weile braucht er auch einen Drink (Woody Allen).</span> <br><br>
          Unser Angebot erstreckt sich von Mineral über Süssgetränke bis zu alkoholischen Getränken wie Wein oder frisch gezapftem Bier. Auch mit Tee und Kaffee,
          Punsch oder Kafi Schnaps löscht man sich bei uns den Durst. An kalten Tagen servieren wir Ihnen auch gerne den besten Glühwein.  </p>
        </div>
      </div>

      <div id="grill">
        <div class="abschnitt">
          <h4>BBQ Catering</h4>
          <img src="Bilder/grill.png" alt="grill"></img>
          <p>
          Planen Sie ein Event, ein Geburtstags- oder sogar ein Betriebsfest? Gerne unterstützen wir Sie dabei und fahren mit unserem <span id="bbq">BBQ-Catering-Anhänger</span> zu Ihnen. <br><br>
          Sei es ein saftiger Schweinskrustenbraten vom Nidwaldner Säuli, ein rosa gebratenes, zartes Stück Fleisch vom BBQ-Rind, ein leckeres Pouletsteak, ein aromatisches
          Stück vom Lamm oder einfach eine schmackhafte Grillwurst. Gegart auf dem <span id="holzkohle">Holzkohlengrill</span> schmeckt’s einfach besser!  </p>
        </div>
      </div>
    </section>

    <!-- IMPRESSIONEN ----------------------------------------->

    <section id="impressionen">
      <h3>Impressionen</h3>
      <hr>

      <div>
        <div id="eindrücke">
          <div id="bilderkarussell">
            <figure>
              <img src="Bilder/bild001.jpg" alt="Bild1">
              <figcaption>Imbissburg Luga</figcaption>
            </figure>
            <figure>
              <img src="Bilder/bild002.jpg" alt="Bild2">
              <figcaption>Imbissburg Määs Luzern</figcaption>
            </figure>
            <figure>
              <img src="Bilder/bild003.jpg" alt="Bild3">
              <figcaption>Imbissburg Määs Luzern</figcaption>
            </figure>
            <figure>
              <img src="Bilder/bild004.jpg" alt="Bild4">
              <figcaption>Imbissburg Määs Luzern</figcaption>
            </figure>
            <figure>
              <img src="Bilder/bild005.jpg" alt="Bild5">
              <figcaption>Imbissburg Määs Luzern</figcaption>
            </figure>
            <figure>
              <img src="Bilder/bild006.jpg" alt="Bild6">
              <figcaption>Imbissburg Weihnachtsmarkt</figcaption>
            </figure>
            <figure>
              <img src="Bilder/bild007.jpg" alt="Bild7">
              <figcaption>Imbissburg Weihnachtsmarkt</figcaption>
            </figure>
            <figure>
              <img src="Bilder/bild008.jpg" alt="Bild8">
              <figcaption>Imbissburg Weihnachtsmarkt</figcaption>
            </figure>
            <figure>
              <img src="Bilder/bild009.jpg" alt="Bild9">
              <figcaption>Imbiss Fasnacht</figcaption>
            </figure>
            <figure>
              <img src="Bilder/bild010.jpg" alt="Bild10">
              <figcaption>Imbiss Fasnacht</figcaption>
            </figure>
            <figure>
              <img src="Bilder/bild011.jpg" alt="Bild11">
              <figcaption>Imbiss Fasnacht</figcaption>
            </figure>
            <figure>
              <img src="Bilder/bild012.jpg" alt="Bild12">
              <figcaption>Imbiss Fasnacht</figcaption>
            </figure>
          </div>
        </div>
        <div id="location">
          <h4>Wo Sie uns treffen können...</h4><br>
          <p><b>5. - 20.10.2019</b> - <span>Lozärner Herbstmääs</span> <br>auf dem Inseli am Lunapark und auf dem Bahnhofplatz beim Torbogen <br><br>
            <b>5. - 22.12.2019</b> <span>Lozärner Wiehnachtsmarkt</span> <br>auf dem Feanziskanerplatz <br><br>
            <b>20. - 25.2.2019</b> <span>Lozärner Fasnacht</span> <br>auf dem Rosengartplatz bei der Kapellbrücke <br><br>
          </p>
        </div>
      </div>
    </section>


    <!-- ÜBER UNS ----------------------------------------->


    <section id="überuns">

      <h3>Über uns</h3>
      <hr>
      <div class="grid">
        <figure class="familienfoto">
          <img src="Bilder/familie1.jpg" alt="familie1"/>
            <figcaption>
              <p>Corinne, Pius, Nicole, Monika</p>
              <a href="#">View more</a>
            </figcaption>
        </figure>
        <p>Sutis Imbiss & BBQ Catering ist ein Familienbetrieb, der schmackhafte und genussvolle Waren anbietet.
          Frische und Genuss – gepaart mit Freundlichkeit! Will heissen, wir beglücken Besucher mit leckeren Speisen,
          kompetenter Bedienung und einem freundlichen Lächeln. Unsere Gäste schätzen unser Angebot und unsere aufmerksame Art sehr. </p>
      </div>
    </section>


    <!-- KONTAKT ----------------------------------------->

    <section id="kontakt">
      <h3>Kontakt</h3>
      <hr>
      <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
        <div class="success">
          <span> <br> <?= $success; ?></span>
          <i class="far fa-times-circle"></i>
        </div>

        <input class="input_text" type="text" placeholder="E-Mail*" tabindex="1" name="mail" value="<?= $from ?>"><br class="br" id="br1">
        <span class="alert" id="mailAlert"><i class="fas fa-exclamation-triangle"></i> <?= $mail_error; ?></span><br><br class="br" id="br2">

        <input class="input_text" type="text" placeholder="Betreff" tabindex="2" name="betreff" value="<?= $betreff ?>">
        <span></span><br>

        <textarea class="input_text" type="text" placeholder="Nachricht*" tabindex="3" name="nachricht"><?php echo htmlspecialchars($text); ?></textarea><br class="br" id="br3">
        <span class="alert" id="textAlert"><i class="fas fa-exclamation-triangle"></i> <?= $text_error; ?></span><br><br class="br" id="br4">

        <input class="button" type="submit" tabindex="4" name="submit"><br>

        <input type="hidden" id="successVar" value="<?= $success ?>">
        <input type="hidden" id="errorVarMail" value="<?= $mail_error ?>">
        <input type="hidden" id="errorVarText" value="<?= $text_error ?>">
      </form>
    </section>


    <!-- FOOTER ----------------------------------------->


    <footer>
      <div class="inhalt">
        <div class="follow">
          <p>Follow us</p>
          <a href="https://www.facebook.com/campaign/landing.php?&campaign_id=1557999560&extra_1=s%7Cc%7C294722991322%7Ce%7Cfacebook%7C&placement=&creative=294722991322&keyword=facebook&partner_id=googlesem&extra_2=campaignid%3D1557999560%26adgroupid%3D61885662631%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D1t1%26target%3D%26targetid%3Dkwd-541132862%26loc_physical_ms%3D1003054%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=EAIaIQobChMIqtaHivXy4wIVBUQYCh0BEgoKEAAYASAAEgJPcPD_BwE" target="_blank">
            <i class="fab fa-facebook-square"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <p class="angaben">
          &copy; Sutis IMBISS & BBQ CATERING <br>
          Schädrütistrasse 10 <br>
          CH-6006 Luzern <br>
          info@sutis.ch <br>
        </p>
      </div>
    </footer>

    <script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/mobile-menu.js"></script>
    <script type="text/javascript" src="js/alert.js"></script>

  </body>

</html>
