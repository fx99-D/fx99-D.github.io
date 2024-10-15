<!DOCTYPE html>
<html>
<head>
  <title>Trip Sharing</title>
  <meta charset="utf-8">
</head>

<body>

  <h1> Trip Sharing Formular </h1>
  <!-- <h4>Zum Abbrechen benutze bitte die "Zurück Funktion" Deines Browsers</h4> -->

<script>
    // document.write( document.referrer );
    // https://stackoverflow.com/questions/8814472/how-to-make-an-html-back-link
    // geht auf standard zuück
    // document.write('<a href="' + document.referrer + '">Go Back</a>');
</script>
   <br> <button onclick="history.back()">Zurück zur Karte ohne Eintrag</button>

  <h3> Ich starte bei: </h3>

  <form action="write.php" id="user">

  <?php
    $zoom = htmlspecialchars($_GET['zoom']);
    # echo "zoom: ",$zoom,"<br>";
    $lat = substr(htmlspecialchars($_GET['lat']),0,6);
    $lng = substr(htmlspecialchars($_GET['lng']),0,6);

    # Koordinaten in form eintragen damit automatisch in weiterer Verarbeitung
    echo "Koordinaten: ","<br>";
    echo '<label for="la"> </label> <input type="text" name="la" id="la" value="' , $lat, '">';
    echo '<label for="lo"> </label> <input type="text" name="lo" id="lo" value="' , $lng, '">'; 
    echo '<label for="zo"> </label> <input type="text" name="zo" id="lo" value="' , $zoom, '"><br><br>';
  ?> 

  <h3> Meine Angebote </h3>
    <table>
       <tr>
          <td><label for="name">Name</label></td>
          <td><input type="text" name="name" id="name" maxlength="40"  value="Max Muster"></td>
       </tr>
       <tr>
          <td><label for="Bahn">gemeinsame Bahnfahrt</label></td>
          <td><input type="text" name="Bahn" id="Bahn" maxlength="4" value="ja"></td>
       </tr>

       <tr>
          <td><label for="freePlace">freie Plätze</label></td>
          <td><input type="text" name="freePlace" id="freePlace" maxlength="4" value="0"></td>
       </tr>
       <tr>
          <td><label for="reqPlace"> gesuchte Plätze </label> </td>
          <td><input type="text" name="reqPlace" id="reqPlace" maxlength="4" value="0"></td>
       </tr>
    </table>

    <br>    <button type="submit">absenden</button>
  </form>
</body>
</html>


