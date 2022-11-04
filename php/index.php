<?php
  include "connect_db.php";
  session_start();
  if(!isset($_SESSION["logged_in"]) || !$_SESSION["logged_in"]) {
    header("Location: login.php");
  }
  if($_POST["logout"] != null) {
    session_destroy();
    header("Location: login.php");
  }
?>
<html>
 <head>
 </head>
 <body>
  <h1>POS - Prüfungsorganisationssystem</h1>
  <div>
    <p>
      Wenn wir nicht gerade down sind, finden Sie hier ihre Noten.
    </p>
    <div>
      <b>Aufgabenstellung</b><br />
      Herzlich willkommen zu unserem eigenen POS. Vielleicht ist es sogar verlässlicher als das Original!<br />
      Wenn ihr auf eine Vorlesung klickt, könnte ihr eure Noten abfragen.
      
      Eine Flag befindet sich im Verzeichnis /flag/flag.txt. Leider haben die findigen
      Administratoren den Zugriff auf diese Datei von außen gesperrt. Ihr müsst also
      einen Weg finden, die Datei trotzdem zu lesen.
      <br /><br />
      Bonus (ohne SSRF):
      Schafft ihr es, die Noten von anderen Studenten abzufragen? (Hinweis: Unsere Uni ist klein und es gibt nur einen anderen Studenten mit der matrikelnr 654321)
      <br /><br />
      Sendet Lösungen, Fragen oder Hinweise auf Störungen bitte an <a href="mailto:***REMOVED***">***REMOVED***</a>.

    </div>
    <h2>Vorlesungen</h2>
    <?php
    foreach($vorlesungen as $vorlesung => $schnitt) {
      echo "<p><a href=\"view_vorlesung.php?vorlesung=".urlencode($vorlesung)."\">" . $vorlesung . " - Schnitt: " . $schnitt . "</a></p>";
    }
    ?>
    <p>
      <form method="POST">
        <input type="hidden" name="logout" value="true" />
        <input type="submit" value="Logout" />
      </form>
    </p>
  </div>

 </body>
</html>