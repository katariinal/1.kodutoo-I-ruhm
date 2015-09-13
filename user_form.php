<?php
    //user_form.php
    
    //jutumärkide vahele input elemendi NAME
    //echo $_POST["email"];
    //echo $_POST["password"];
    
    $email_error="";
    $password_error="";
    
    //Kontrolli ainult siis, kui kasutaja vajutab logi sisse nuppu
    if($_SERVER["REQUEST_METHOD"] == "POST"){      //kasutaja vajutas nuppu
    
        //Kontrollime kasutaja e-post, et see ei ole tühi
        if(empty($_POST["email"])){
            $email_error ="Ei saa olla tühi";
        }
        //Kontrollime parooli
        if(empty($_POST["password"])){
            $password_error="Ei saa olla tühi";
        }else{
            
            //parool ei ole tühi, kontrollime pikkust
            if(strlen($_POST["password"]) < 8){
                $password_error="Peab olema vähemalt 8 sümbolit";
                
            }
            
        }
        
        
    }
       
?> 
    

<html>
    
    <head>
        <title>User login page</title>
    </head>
    <body>
		<p></p>
        <h2>Login</h2>
        <form action="user_form.php" method="post">
        <input name="email" type="email" placeholder="E-post">* <?php echo $email_error;?> <br><br>
        <input name="password" type="password" placeholder="Parool">* <?php echo $password_error;?> <br><br>
        
        <input type="submit" value="Logi sisse">
        </form>
        <h2>Create user</h2>
		<form action="user_form.php" method="post">
        <input type="text" name="firstname" placeholder="Eesnimi">*<br><br>
		<input type="text" name="lastname" placeholder="Perenimi">*<br><br>
		<input type="radio" name="sex" value="female" checked>Male * <br><br>
		<input type="radio" name="sex" value="male">Female*<br><br>
		<input type="email" name="email" placeholder="E-post">*<br><br>
		<input name="password" type="password" placeholder="Parool">*
		<input name="password" type="password" placeholder="Korda parooli">*<br><br>
		


		</form>
    </body>
    
</html>