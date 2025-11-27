<?php
    include('cfg.php');
    include('showpage.php');
?>


<!DOCTYPE html>

<html>

<head>  
<meta name="description" content="Projekt 1">
<meta name="keywords" content="HTML5, CSS3, JavaScript">
<meta name="author" content="Bartosz Olszak">
<title>Budowle Minecraft</title>
<link rel="stylesheet" href="css/style.css">
<script src="script/kolorujtlo.js" type="text/javascript"></script>
<script src="script/timedate.js" type="text/javascript"></script>
<script src="script/jquery-3.7.1.js"></script>
</head>


<body onload="startclock()">
    <div id="menu">
        <img src="Images/logo1.png", id="logo">

        <div id="zegarek" class="czas"></div>
        <div id="data" class="czas"></div>
        
        <h6>Budowle</h6>
        <a href="index.php?idp=dom"><p>Dom Czarodzieja</p></a>
        <a href="index.php?idp=zamek"><p>Zamek</p></a>
        <a href="index.php?idp=samochod"><p>Samochód</p></a>

        <div id="animacjaTestowa1" class="test-block">Kliknij, a się powiększe</div>

        <script>
            $("#animacjaTestowa1").on("click", function(){
                $(this).animate({
                    width: "500px",
                    opacity: 0.4,
                    fontSize: "3em",
                    borderWidth: "10px"
                }, 1500);
            });
        </script>

        <div id="animacjaTestowa2" class="test-block">
            Najedź kursorem, a się powiększe
        </div>

        <script>
        $("#animacjaTestowa2").on({
            "mouseover" : function() {
                $(this).animate({
                    width: 300
                }, 800);
            },
            "mouseout" : function() {
                $(this).animate({
                    width: 200
                }, 800);
            }
        });
        </script>


        <div id="animacjaTestowa3" class="test-block">
            Klikaj, abym urósł
        </div>

        <script>
        $("#animacjaTestowa3").on("click", function(){
            if (!$(this).is(":animated")) {
                $(this).animate({
                    width: "+=50",
                    height: "+=10",
                    opacity: "-=0.1",
                    duration: 3000 //inny sposób deklaracji czasu trwania animacji
                });
            }
        });
        </script>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


        <FORM METHOD="POST" NAME="background">
        <INPUT CLASS="button" TYPE="button" VALUE="Domyślny" ONCLICK="changeBackground('#202020')">
        <INPUT CLASS="button" TYPE="button" VALUE="żółty" ONCLICK="changeBackground('#FFFF00')">
        <INPUT CLASS="button" TYPE="button" VALUE="czarny" ONCLICK="changeBackground('#000000')">
        <INPUT CLASS="button" TYPE="button" VALUE="biały" ONCLICK="changeBackground('#FFFFFF')">
        <INPUT CLASS="button" TYPE="button" VALUE="zielony" ONCLICK="changeBackground('#00FF00')">
        <INPUT CLASS="button" TYPE="button" VALUE="niebieski" ONCLICK="changeBackground('#0000FF')">
        <INPUT CLASS="button" TYPE="button" VALUE="pomarańczowy" ONCLICK="changeBackground('#FF8000')">
        <INPUT CLASS="button" TYPE="button" VALUE="szary" ONCLICK="changeBackground('#C0C0C0')">
        <INPUT CLASS="button" TYPE="button" VALUE="czerwony" ONCLICK="changeBackground('#FF0000')">
    </div>
    <div id="container">
        <header><h1>Strona Główna</h1></header>

        <nav>
            <a href="index.php?idp=glowna"><div class="tile">Strona Główna</div></a>
            <a href="index.php?idp=serwer"><div class="tile">Serwer</div></a>
            <a href="index.php?idp=filmy"><div class="tile">Filmy</div></a>
            <a href="index.php?idp=informacje"><div class="tile">Informacje</div></a>
            <a href="index.php?idp=kontakt"><div class="tile">Kontakt</div></a>
        </nav>
        <div style="clear: both;"></div>
        
        <main>
            <?php
              if (isset($_GET['id']))
              {
                  $id_strony = $_GET['id'];
                  $tresc_strony = PokazPodstrone($id_strony);
                  echo $tresc_strony;
              }
              else
              {
                  $tresc_strony = PokazPodstrone(1); 
                  echo $tresc_strony;
              }
            ?>
        </main>
        
        <div style="clear: both;"></div>
    </div>
    <div style="clear: both;"></div>

    <footer><p>&copy; 2025 Bartosz Olszak. Wszelkie prawa zastrzeżone.</p></footer>
    <?php
            $nr_indeksu = '175286';
            $nrGrupy = 'ISI3';
            echo 'Autor: Bartosz Olszak '.$nr_indeksu.' grupa '.$nrGrupy.' <br /><br />';
        ?>
</body>
</html>

