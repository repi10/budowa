<?php
include_once 'config.php';
// error_reporting(0);
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
$query = mysqli_query($mysqli, "SELECT * FROM oferta");
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="topbar pattern2">
            <img src="favicon.ico">
            <a href="#home">
                <div class="navbar-option">
                    Oferta
                </div>
            </a>
            <a href="#kg">
                <div class="navbar-option">
                    Księga Gosci
                </div>
            </a>
            <a href="#contact">
                <div class="navbar-option">
                    Kontakt
                </div>
            </a>
            <!-- <a href="#partnership">
                <div class="navbar-option">
                    Partnership
                </div>
            </a> -->
        </div>

        <div class="c-content pattern1">
        <div id="home" class="content ">
            <div id="cluster" style="display: flex; justify-content: space-between;">
                <div class="two-thirds ">
                    <div class="bg">
                    <p>
                        Jeżeli w planach masz długo wyczekiwany remont mieszkania lub domu i potrzebujesz fachowców to firma remontowo– budowlana z Bielska-Białej "u Harnasia"wykona dla Ciebie wszystkie zaplanowane usługi na najwyższym poziomie. Realizujemy zarówno małe projekty jak i duże inwestycje w przystępnej cenie. Współpracujemy z dostawcami wysokiej klasy armatury sanitarnej i łazienkowej oraz z projektantami i hurtowaniami budowlanymi. Dzięki temu jesteśmy w stanie zapewnić najwyższej klasy materiały w atrakcyjnych cenach. Jednocześnie dzięki takiej współpracy potrzebne materiały mamy na czas, dzięki czemu unikamy nieprzewidzianych opóźnień. Do każdego zlecenia podchodzimy indywidualnie. Zapewniamy fachową pomoc w adaptacji wnętrz oraz doborze, zakupie i transporcie materiałów.
                    </p>
                </div>
                </div>
                <div id="intro" class="one-third ">
                    <div class="bg">
                    <p>
                        <span class="bolded">Cennik</span><br><br>
                    <table class="striped" style="color: white;">
                    <tr class="header">
                        <td>Nazwa</td>
                        <td>Cena</td>
                        <td></td>
                    </tr>
<?php

while ($row = mysqli_fetch_array($query)) {
echo "<tr>";
echo "<td>".$row['nazwa_oferty']."</td>";
echo "<td>".$row['cena']."</td>";
echo "<td>".$row['opis']."</td>";
echo "</tr>";
}

?>               </table>   </p>
</div>
                </div>

            </div>
        </div>
        </div>
        
        
   
    
        <div class="c-content">
            <div id="kg" class="content ">
                <div id="cluster" style="">
                      <div class="title"> <span >Księga Gości</span></div><br>
                    <div>
                    <table  border=0>
    
                        <tr bgcolor='#CCCCCC'>
                            <td>Imię</td>
                            <td>Usługa</td>
                            <td>Komentarz</td>
                            
                        </tr>
                        <?php 
                        
                        while($res = mysqli_fetch_array($result)) { 		
                            echo "<tr>";
                            echo "<td>".$res['name']."</td>";
                            echo "<td>".$res['svc']."</td>";
                            echo "<td>".$res['comment']."</td>";	
                            echo "<td><div style=\"display: flex;\"><div class=\"button\"><a href=\"edit.php?id=$res[id]\">Edytuj</a></div> | <div class=\"button\"><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Jestes pewny?')\">Usuń</a></div></div></td>";		
                        }
                        ?>
                        </table>
                        <div class="button cnt closer"><a href="add.html">Dodaj wpis</a></div>
                    </div>
                </div>
            </div>
         </div>

         <div class="c-content pattern3">
            <div id="contact" class="content ">
                <div id="cluster" >
                    <div style="margin-bottom: 150px">
                    <span class="title">Contact Us!</span>
                </div>
                    <div id="addressBox" style="display: flex;">
                      <div  class="two-thirds">
                        <p><span id="addressLn">Infolinia: </span></p>
                        <p> +1 80 BUDOWA (+1 802 83692) </p>
                        <p><a href="mailto:contact@budowa.xyz">contact@budowa.xyz</a></p>
                        <div>&nbsp;</div>
                        <p><span id="addressLn">Adress:</span></p>
                        <p>1236 Crestview Terrace</p><p>San Antonio, TX 78217</p>
                        <div>&nbsp;</div>
                        </div>
                        <div class="one-third" style="text-align: right;"><iframe style="left: 0;/* text-align: left; */" src="https://embed.waze.com/iframe?zoom=16&amp;lat=29.485112&amp;lon=-98.566219&amp;ct=livemap&amp;pin=1" width="300" height="300" allowfullscreen=""></iframe></div>
                        
                    </div>
                    </div>
                </div>
            </div>
         </div>
    </body>
</html>