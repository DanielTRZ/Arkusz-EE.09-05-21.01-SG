<!DOCTYPE html>
<html lang="pl">

  <head>

     <meta charset="utf-8">
     <title>Port Lotniczy</title>
     <meta name="description" content="Opis zawartości strony dla wyszukiwarek">
     <meta name="keywords" content="słowa, kluczowe, opisujące, zawartość">
     <meta name="author" content="Jan Programista">
     <link rel="stylesheet" href="styl5.css">

  </head>
  
  <body>
  
  <div id="baner1"><img src="zad5.png" alt="logo lotnisko"></div>
  
  <div id="baner2"><h1>Przyloty</h1></div>
  
  <div id="baner3">
  <h3>przydatne linki</h3>
  <a href="Kwerendy.txt" target="_blank">Pobierz...</a>
  </div>
  
  <div id="glowny">
  <table>
   <tr>
         <th>czas</th> <th>kierunek</th> <th>numer rejsu</th> <th>status</th>
      </tr>
      
  <?php
    $baza=mysqli_connect('localhost','root','','egzaminsamoloty');
     if(mysqli_connect_errno())
     {echo"wystapil blad polaczenia z baza";}
      $wynik=mysqli_query($baza,'SELECT `czas`,`kierunek`,`nr_rejsu`,`status_lotu` FROM `przyloty` ORDER BY `czas` ASC');
      while($r=mysqli_fetch_array($wynik))
      {
     echo "<tr>";
     echo "<td>";
     echo $r["czas"];
     echo "</td>"; 
   
         
       
     echo "<td>";
     echo $r["kierunek"];
     echo "</td>";   
     
          
          
     
     echo "<td>";
     echo $r["nr_rejsu"];
     echo "</td>";  
        
     echo "<td>";
     echo $r["status_lotu"];
     echo "</td>";
     echo "</tr>"; 

      
      }
      
     
      mysqli_close($baza);
       echo isset($row['zespol1']);
      
  ?>
</table>
   
    
  </div>
  
  <div id="stopka1">
     <?php
      
      if (isset($_COOKIE["ciasteczko"])) {
				echo "<p><b>Dzień dobry strona używa ciasteczek</b></p>";
			} else {
				$cookie_name = "cookie";
				$cookie_value = "";
				$cookie_time = time() + 60*60*2;
				$cookie_path = "";
				$cookie_domain = "";
				$cookie_secure  = false;
				$cookie_httponly = false;
				setcookie($cookie_name, $cookie_value, $cookie_time, $cookie_path, $cookie_domain, $cookie_secure, $cookie_httponly);
				echo "<p  style='font-style:italic;'>Witaj ponownie na stronie lotniska</p>";
			}   
      ?>  
  </div>
  
  <div id="stopka2">
   Autor:0000000000
  </div>
  
  </body>
</html>