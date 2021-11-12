<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mini examen de Programacion en php</title>
</head>
<body style="background-image: url(uefa.jpg)" style="background-position: center">
  <font face="Yu Gothic UI Semibold" color="#dadae4">
	
	

<?php 
  
  $cal = 0;

  $Nombre_a = $_GET['Nombre_a'];

  $Apellido_p = $_GET['Apellido_p'];

  $Apellido_m = $_GET['Apellido_m'];
  echo "<br> El nombre del alumno es: " . $Nombre_a;
  echo " " . $Apellido_p;
  echo " " . $Apellido_m;

  $Pregunta_1 = $_GET['Pregunta_1'];
  $resp_1 = "Un deporte balon pie";
  if ($Pregunta_1 == $resp_1) {
    echo "<br><br><br> 1.Respuesta correcta  <br><br>";
    $cal++;
  } else {
    echo "<br><br><br> 1.Resuesta incorrecta <br><br>";
  }


  $Pregunta_2 = $_GET['Pregunta_2'];
  if ($Pregunta_2 == "a") {
    echo "<br> 2.Que seleccion tiene mas copas del mundo?:<br> a) Brasil,es correcta  <br> b. Mexico <br> c. Alemania <br><br>";
    $cal++;
  } if ($Pregunta_2 == "b") {
    echo "<br> 2.Que seleccion tiene mas copas del mundo?: <br> a. Brasil  <br> b. Mexico (respuesta incorrecta) <br> c. Alemania <br><br>";
  } if ($Pregunta_2 == "c") {
    echo "<br> 2.Que seleccion tiene mas copas del mundo?: <br> a. Brasil  <br> b. Mexico <br> c. Alemania (respuesta incorrecta) <br><br>";
  }


  $Pregunta_3 = $_GET["Pregunta_3"];
    $resp2 = "Real madrid";
     if ( $Pregunta_3 == $resp2) {
      echo "<br> 3.Equipo conocido como merengue? es correcto  <br><br>";
      $cal++;
    }else {
      echo "<br> 3.Equipo conocido como merengue? es incorrecto  <br><br> ";
    }


    $Pregunta_4 = $_GET["Pregunta_4"];
     $resp3 = "Cristiano Ronaldo";
     if ( $Pregunta_4 == $resp3) {
      echo "<br> 4. Cual es el nombre completo de cr7?: <br>Respuesta correcta  <br><br> ";
      $cal++;
    }else {
      echo "<br> 4. Cual es el nombre completo de cr7?: <br>respuesta incorrecta <br><br> ";
    }


    $Pregunta_5 = $_GET["Pregunta_5"];
    if ($Pregunta_5 == "1") {
      echo "<br> 5. Cuantas champions tiene el real madrid?: <br>14 champions,Respuesta correcta  <br><br> ";
      $cal++;
    } else {
      echo "<br>  5. Cuantas champions tiene el real madrid?: <br>respuesta incorrecta  <br><br> ";
    }
    

    $Pregunta_6 = $_GET["Pregunta_6"];
      if ( $Pregunta_6 == "a") {
      echo "<br> 6.¿Quién es el jugador que más veces vio la tarjeta roja en la historia de LaLiga? : <br> a. Sergio ramos (Respuesta correcta) <br> b. Varane  <br> c. Van dai<br><br> ";
      $cal++;
    } if ($Pregunta_6 == "b") {
      echo "<br> 6.¿Quién es el jugador que más veces vio la tarjeta roja en la historia de LaLiga? : <br> a. Sergio ramos (Respuesta correcta) <br> b. Varane  <br> c. Van dai<br><br> ";
    }if ($Pregunta_6 == "c") {
      echo "<br> 6.¿Quién es el jugador que más veces vio la tarjeta roja en la historia de LaLiga? : <br> a. Sergio ramos (Respuesta correcta) <br> b. Varane  <br> c. Van dai<br><br> ";;
    }


    $Pregunta_7 = $_GET["Pregunta_7"];
     if ($Pregunta_7 == "1") {
      echo "<br> 7. ¿A partir de qué temporada se implantó el VAR?: <br>Respuesta correcta <br><br> ";
      $cal++;
    } else {
      echo "<br> 7. ¿A partir de qué temporada se implantó el VAR?: <br>respuesta incorrecta  <br><br> ";
    }


     $Pregunta_8 = $_GET["Pregunta_8"];
     if ( $Pregunta_8 == "a") {
      echo "<br> 8.  ¿Qué equipo ha sumado más puntos a lo largo de las 89 temporadas de LaLiga?: <br> a. Barcelona (respuesta incorrecta)  <br> b. Atletico de madrid  <br> c. Real madrid  <br><br> ";
      $cal++;
    } if ($Pregunta_8 == "b") {
      echo "<br> 8.  ¿Qué equipo ha sumado más puntos a lo largo de las 89 temporadas de LaLiga?: <br> a. Barcelona  <br> b. Atletico de madrid (respuesta incorrecta) <br> c. Real madrid <br><br> ";
    }if ($Pregunta_8 == "c") {
      echo "<br> 8.  ¿Qué equipo ha sumado más puntos a lo largo de las 89 temporadas de LaLiga?: <br> a. Barcelona <br> b. Atletico de madrid <br> c. Real madrid  (Respuesta correcta)  <br><br> ";
    }


    $Pregunta_9 = $_GET["Pregunta_9"];
     if ($Pregunta_9 == "1") {
      
             
      echo "<br> 9.¿Quién es el segundo máximo goleador de la historia de LaLiga, por detrás de Messi (438)?: <br>Respuesta correcta  <br><br> ";
      $cal++;
     
    }if ($Pregunta_9 == "2") {
             
      echo "<br> 9.¿Quién es el segundo máximo goleador de la historia de LaLiga, por detrás de Messi (438)?: <br>Respuesta incorrecta  <br><br> ";
      $cal++;
     }if ($Pregunta_9 == "0") {
    
      echo "<br> 9. ¿Quién es el segundo máximo goleador de la historia de LaLiga, por detrás de Messi (438)?: <br>respuesta incorrecta  <br><br> ";
    }


    $Pregunta_10 = $_GET["Pregunta_10"];
    $resp10 = "Leonel messi";
    if ( $Pregunta_10 == $resp10) {
      echo "<br> 10.Quien gano el ultimo balon de oro : <br>Respuesta correcta  <br><br> ";
      $cal++;
       }else {
      echo "<br> 10. Quien gano el ultimo balon de oro: <br>respuesta incorrecta  <br><br> ";
    }

    echo " Es: " . "$cal/10";

  if ($cal == 10) {
    echo "<br>Felicidades, eres diosito admin";
  }if  ($cal == 9) {
      echo "<br>Buen trabajo";
    }if  ($cal == 8) {
      echo "<br>nashe pudiste hacerlo mejor";
    }if ($cal == 7) {
      echo "<br> hechale mas ganas";
    }if ($cal == 6) {
      echo "<br> de pansazo";
    }if ($cal <= 5) {
      echo "<br>jijija por menso. <br>";
    }

  
 ?>
</font>
 </body>
</html>