<!DOCTYPE html>
<html>
<head>
  <title>Data Eval</title>
  <meta charset="utf-8">
</head>

<body>
  <h1> Datenauswertung </h1>
  <?php
    $name = htmlspecialchars($_GET['name']);
    $zoom = htmlspecialchars($_GET['zo']);
    $lat = substr(htmlspecialchars($_GET['la']),0,6);
    $lng = substr(htmlspecialchars($_GET['lo']),0,6);
    $Bahn = htmlspecialchars($_GET['Bahn']);
    $freePlace = htmlspecialchars($_GET['freePlace']);
    $reqPlace = htmlspecialchars($_GET['reqPlace']);
    echo 'Eingabe:', $name,',',$zoom,',',$lat,',',$lng,',',$Bahn,',',$freePlace,',', $reqPlace,'<br><br>';
    // in Datei schreiben
    $icon = 'Daten/Icon_Gruppengefluester-07-40px.png';
    $csvfile = 'TeilnehmerlisteMFG-5.csv';

    $line = $name.";"."B:".$Bahn."  suche:".$reqPlace."  biete:".$freePlace.";".$lat.";".$lng.";".$icon;
    echo '<h2>Kontrollausgabe</h2>';
    echo $line."<br>";
    # echo '<br> <button onclick="history.back()">zurück zur Eingabe ohne Speichern</button><br>';

    # https://www.w3schools.com/php/php_file_create.asp
    $myfile = fopen($csvfile, "a") or die("Unable to open file!");
    # Achtung der Zeilenumbruch am Ende der nächsten Zeile muss da bleiben!!
    fwrite($myfile, $line.'
');
    fclose($myfile);
    echo '<h3>Daten erfolgreich übernommen</h3>';
    echo '<a href="MFG-Harald-LL-v17h.html?lat=',$lat,'&lon=',$lng,'&zoom=',$zoom,'"> zurück zur Karte</a> <br>';

 # https://www.w3schools.com/jsref/met_his_back.asp
  ?>
  <br> <button onclick="history.back()">zurück zur Eingabe</button>

</body>
</html>