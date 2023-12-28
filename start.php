<?php 
/*session_start();

  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    This is the login page <br>
    <form action="home.php"method="post">
        <input type="submit" name="logout", value="logout">
    </form>
  </body>
  </html>*/
  ?>
<?php 
// $_SESSION["username"] = "Nasscoding";
// $_SESSION["password"] = "diatom123"; 

// echo $_SESSION["username"]."<br>";
// echo $_SESSION["password"]."<br>";
  ?>

<?php 

// echo $_SESSION["username"]."<br>";
// echo $_SESSION["password"]."<br>";

// if(isset($_POST["logout"])){
//     session_destroy();
//     header("location:index.php");
// }
  ?>



<?php 
  
  //$_SERVER
  ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"  method="post"> username: <br>
  <input type="text" name= ""username>
  <input type="submit">
  </form>
  <!-- The htmlspecialchars() function converts some predefined characters to HTML entities.

The predefined characters are:

& (ampersand) becomes &amp;
" (double quote) becomes &quot;
' (single quote) becomes &#039;
< (less than) becomes &lt;
> (greater than) becomes &gt; -->
 
</body>
</html>
<?php 
//$_[] = variable de serveur et d'éxécution, est un tableau contenant des informations telles que les en-têtes, les chemins et les emplacements de script. Les entrées de cet array sont créées par le serveur web, il n'y a donc aucune garantie que chaque serveur web fournira chacune de ces informations ; les serveurs peuvent en omettre certaines ou en fournir d'autres qui ne sont pas répertoriées ici. 


// foreach($_SERVER AS $key => $value){
//     echo"{$key} = {$value} <br>";
//   }
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  echo"HELLO";
 }
//requiest method
//   ?>
   