<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>PAGINA TRANCE</title>
	<link rel="stylesheet" type="text/css" href="general.css">
</head>
		
<body background="img/20.jpg">
<div class="caja">
	
    <div class="banner"></div>
    
    <div class="menu"> 
	<nav>
		<ul>
    <li><a href="#" class="concerts">Concerts</a></li>        
    <li><a href="#" class="news">News</a></li>        
    <li><a href="#" class="radio">Radio</a></li>
    <li><a href="#" class="videos">Videos</a></li>        
    <li><a href="#" class="mixes">Mixes </a></li>         
    <li><a href="#" class="music">Music</a></li>        
    <li><a href="#" class="people">People</a></li>
    <li><a href="#" class="featured">Featured</a></li> 
    <li><a href="http://pag-personal.blogspot.mx/" target="_blank">Blog</a></li>
    <li><a href="usuarios.php" class="welcome">Usuarios</a></li>         
    <li><a href="index.php" class="welcome">Welcome</a></li>        
                 
		</ul>	
	</nav>
        
        
    
    </div>
        <div class="contenido"> Contenido de la pagina
        <ul class="galeria">
        <li><a href="#img1"><img src="img/Galeria%20de%20la%20Pagina/24.jpg"></a></li>
        <li><a href="#img2"><img src="img/Galeria%20de%20la%20Pagina/2.jpg"></a></li>
        <li><a href="#img3"><img src="img/Galeria%20de%20la%20Pagina/3.jpg"></a></li>
        <li><a href="#img4"><img src="img/Galeria%20de%20la%20Pagina/4.jpg"></a></li>    
    </ul></div>
    
               
        <div class="destacados"> Area de destacado y relacionado
	
            <section>
		<article>

            
		</article>
	</section>
	<aside id="datos">
		<form id="formulario2" action="proceso.php" method="POST" >
		<table >
		<tr>
			<td> <label for="usuario">Usuario :</label></td>
			<td><input type="text" id="txtusr" name="txtusr" placeholder="Usuario" autofocus></td>
		</tr>  
		<tr>
			<td><label for="passwrd">Password :</label></td>
			<td><input type="password" id="txtpwd" name="txtpwd" ></td>
		</tr>
		<tr>
			<td><input type="submit" name="btn" value="Aceptar" id="btn"></td>
		</tr>
		</table>
		</form>
	
	</aside>
	<footer></footer>
           
            
</div> 
    <div class="gl"> 
    

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1869.8141202127053!2d-101.22373849190843!3d20.398212446585816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c8c58dcd0ed3d%3A0x7d052b46eb2332e9!2sUTSOE%2C+Ecologista%2C+38400+Valle+de+Santiago%2C+Gto.!5e0!3m2!1ses!2smx!4v1467813356795" width="750" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        

        
    </div>
    
    <div class="pie de pagina">Pie de pagina</div>
    </div>

<script src="public/plugins/jquery-2.1.4.min.js"></script>
<script>
$(document).ready(function(){
	// this is the id of the form
	$("#datos").find("form").on("submit", function (event) {
     event.preventDefault();
		$.ajax({
          url: "proceso.php", 
          type: "POST",
          //datos del formulario
          data: $(this).serialize(),
          //una vez finalizado correctamente
          success: function (response) {
		 	if(response!=""){
				alert(response); 
				// show response from the php script.	
			}
          }
     });
	});

});
    
</script>
</body>
</html>