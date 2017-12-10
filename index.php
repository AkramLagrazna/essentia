<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Essentia.</title>
  
  
  <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300">
<link rel="stylesheet prefetch" href="https://fonts.googleapis.com/icon?family=Material+Icons">

      <link rel="stylesheet" href="css1/style.css">

  
</head>

<body>
  <div class="cotn_principal">
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>ENTRA</h2>  
  <p>Hai giá un account? Entra su Essentia!</p> 
  <button class="btn_login" onclick="cambiar_login()">ENTRA</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>REGISTRATI</h2>

  
  <p>Non hai ancora un account? Cosa aspetti? Entra su Essentia!</p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">REGISTRATI</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >

       <div class="cont_img_back_">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
  <form action="login.php" method="post">
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>LOGIN</h2>
 <input name="username" type="text" placeholder="Username">
<input name="password" type="password" placeholder="Password">
<button class="btn_login" onclick="cambiar_login()">ENTRA</button>
	  </div>
   	</form>

   <form action="registrazione.php" method="post">
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>REGISTRATI</h2>
	<input type="text" placeholder="username" name="username">
	<input type="text" placeholder="email" name="email">
	<input type="text" placeholder="password" name="password">
	<input type="text" placeholder="ripeti password" name="x2password">
	<input type="text" placeholder="nome" name="nome">
	<input type="text" placeholder="cognome" name="cognome">
	<input type="text" placeholder="scuola" name="scuola">
	<input type="text" placeholder="classe" name="classe">
	<div>
	<input type="radio" name="genere" value="M">      M    <input type="radio" name="genere" value="F">      F
	   </div>
	<input type="date" name="nascita">
<button class="btn_sign_up" onclick="cambiar_sign_up()">REGISTRATI</button>

 </div>
</form>
    </div>
  </div>
 </div>
</div>
 <?
if (isset($_COOKIE["session"])) { 
	//YUPPI, HEEEEEEEEI! QUESTA (CH, CH) MI FA FARE YUPPI!
	header('Location: home.php');
}else{
//niente
}
  ?>
    <script  src="js1/index.js"></script>

</body>
</html>
