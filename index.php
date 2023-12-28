<?php 
  //session  = un moyen simple de stocker des données individuelles pour chaque utilisateur en utilisant un identifiant de session unique. ex.login on fb

// session_start();
  ?>

<!-- <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>

    <form action="index.php" method = "post"> username:<br>
        <input type="text" name="username"> <br>password:<br>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="login">
    </form>
    
  </body>
</html>  -->


<?php 
//   //on check q la variable post pour loging isset
//   if(isset($_POST["login"])){
   
// //on verifie que le username et psw ne sont pas vide
//     if(!empty($_POST["username"]) &&
//     !empty($_POST["password"])){
// //et assigne la session pr username et psw
//       $_session["username"] = $_POST["username"];
//       $_session["password"] = $_POST["password"];
//  //redirect le browser a home page 
//     header("location :home.php");
//     }
// //si l'un des case est vide on affiche Missing username/password
//     else {
//       echo"Missing username/password <br>";
//     }
   
//   }

  
?>

<?php 
// //string
// $name = "Bro code";
// $food = "pizza";
// $email = "fake@gmail.com";
// //integer no quote either double or simple""/''//cote simple ou double
// $age = 21;
// $users = 2;
// $quantity = 3;
// //float
// $gpa = "2.5";//gpa is grade point average (la moyenne général)
// $price = 4.99;
// $tax_rate = 5.1;

// //boolean with if statement
// $employed = true;
// $online = false;
// $for_sale = true;

// $total = null;//total of order


// echo"Hello {$name}<br>"; // echo $name;
// echo"You like\n{$food}<br>";
// echo"Your email is {$email}<br>";


// echo"You are\n{$age}\n years old <br>";
// echo"There are {$users}\n users online <br>";
// echo"You would like to buy {$quantity} \nitems <br>";

// echo" Your gpa is:\n{$gpa}<br>";
// echo"Your Pizza is:\n{$price}<br>";//here we dont have a mistake as it mentionned in the video it's ok with or without \n. Ici on pas d'érreur à lm'exception de la video mais si on aura une faute il faudra mettre /n avant {}.
// echo"the sales tax rate is:\n{$tax_rate}%<br>";

// echo"Online status:\n{$online}<br>";
// echo"You have ordered {$quantity} x 
// {$food}s <br>";
// $total = $quantity * $price;
// echo"Your total is:\€{$total} <br>";//on met le back slash \ suivie de querency $ or €
// ?>

<?php 
/**********Arithmetic operators*********/
// //+ - */** %
// $x = 10;
// $y = 2;
// $z = null;//il l'initialise la varible à null pour pouvoir lui assigner d'autre valeur par la suite.

// // $z = $x + $y;
// // $z = $x - $y;
// // $z = $x * $y;
// // $z = $x / $y;
// // $z = $x ** $y;
// $z = $x % $y;//modulo le reste de la   division est 0= nombre pair,reste de la division 1= nombre impair. even here,  we can have odd (rest of division is one)
// echo "le reste de la division est:{$z}<br>";

/**********Increment/Decrement opearatorsincrementation/decrementation()*********/

// $counter = 10;
// //$counter++;//la même chose que $counter = $counter +1;//pour incrementer avec 1
// //$counter--;//pour decrementer avec 1
// $counter+=3;//incrementer par 3
// $counter-=2;//decrementer par 2
// echo $counter;
  ?>


<?php 
/*************$_GET, $_POST = special variable used to collect data from an HTML form ******$$$*/

  // data is sent to the file in the action attribute of <form>
  // <form action="some_file.php" method = "get">

  // on a deux methodes pour recuperer les donner du HTMl form
  ?>

  <!-- <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
      <form action="index.php" method="post"> 
        <label>username:</label> <br>
        <input type="text" name="username"><br>
        <label>password:</label> <br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
     
  </body>
  </html> -->


  <?php 
    //on utilise get methode dans notre html donc ici on recupere $_GET (Elle) renvoie ARRAY)
    // echo $_GET["username"]. " <br>";
    // echo $_GET["password"]. " <br>";

//autre façon d'ecrire
    // echo "{$_GET["username"]}<br>";
    // echo "{$_GET["password"]}<br>";
//ici les données sont visible dans notre lien de la page (avec get method)


//$_POST (À CHANGER DAns HTML aussi), cette methode est plus sécurisé rien ne s'affiche dans notre url.
// echo "{$_POST["username"]}<br>";
// echo "{$_POST["password"]}<br>";

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="index.php" method="post"> 
        <label>quantity:</label> <br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="Total">
    </form>
</body>
</html> -->



<?php 
//exercice avec le deuxieme form
// $item = "pizza";
// $price = 5.99;
// $quantity = $_POST["quantity"];//variable locale
// // $total = null;

// $total = $quantity * $price;


// echo"You have ordered 
// {$quantity} x{$item}/s <br>";
// echo"Your total is:€{$total}";//pas besoins de / ici  pour moi sinon il sera afficher dans page (tu testes avec/et sans).
//p.s. si tu change la methode post avec get tu peux changer ta quantité dans  l'url (non sécurisé qui affiche une quantité deja exemple 3  et tu veux 1O tu actualise et t'aura le total dans la page a tester aussi).
  ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <form action="index.php" method="post">
      <label>x:</label>
      <input type="text" name="x">
      <label>y:</label>
      <input type="text" name="y">
      <label>z:</label>
      <input type="text" name="z">
      <input type="submit" value="total">
    </form>
    
  </body>
  </html> -->


  <?php 
  // $x = $_POST["x"];
  // $y = $_POST["y"];//superglobal
  // $z = $_POST["z"];
  // $total = null;

  // $total = abs($x);
  //$total = round($x);
  // $total = floor($x);//round down
  // $total = ceil($x);//round up
  // $total = sqr($x);
  // $total = pow($x,$y);//
  // $total = max($x, $y, $z);
  // $total = min($x, $y, $z);
  // $total = pi();// affiche π  = 3.14
  // $total = rand(1, 6);//genere un nombre random entre 1 et 6
  // echo $total;

  ?>

  <!-- <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Exercice rayon de cercle (radius circle) </title>
  </head>
  <body>
      <FORM action="index.php" method="post">
        <label>Radius</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">

      </FORM><br>
  </body>
  </html> -->


<?php 
// $radius = $_POST["radius"];
// //formule du périmetre de cercle  (Circumference) = π × diameter = 2π × radius. 
// $circumference = null;
// $area = null;//Area (A) = π r²
// $volume= null;


// $circumference = 2 * pi() *
// $radius;
// $circumference  = round($circumference,2);//round to second digit

// $area = pi() * pow($radius, 2);
// $area = round($area, 2);

// $volume = 4/3 * pi()* pow($radius, 3);
// $volume = round($volume, 2);


// echo"circumference = {$circumference}cm <br>";
// echo"Area = {$area}cm^2 <br>";//en cm^2
// echo "Volume :{$volume }cm^3 <br>"

?>

 
<?php 
//  //if statement
//   $age = 18;// ce code est vrai donc il l'excute et rentre pas dans les autres elseif/else
//   if($age >= 18){

//   echo" you may enter this site";
// }
// elseif($age<= 0){
//   echo"That wasn't a valid age";

// }
// elseif($age>= 100){
// echo "You are too old to enter this site";
// }
// else {
//   echo "you must be 18+ to enter";
// }
    ?>



<?php 
    
// $adult = true;
// if($adult){
//   echo "you may enter this site";

// }else{
// echo "You must be an adult to enter";
// }

      ?>



<?php 
// //exercice calcul de paie
// $hours = 0;
// $rate = 15;
// $weekly_pay = null;

// if($hour<=0){//0heure/sem
//   $weekly_pay = 0;
// }
// elseif ($hours<= 40){//heure normal
// $weekly_pay = $hours * $rate;
// } 
// else{ //heure sup
// $weekly_pay = ($rate *40) +(($hours - 40) * ($rate *1.5));
// }

        ?>




<?php 
// les operateur de logique &&( true si les deux conditions sont true), ||(true c'est une condition est true), !(true si false, false si true).
// $temp = 25;
// $cloudy = true;


// if($temp>= 0 && $temp <=30){
// echo" The weather is good";
// }
// else {
// echo"the weather is bad.";
// }

// if($temp < 0 || $temp >30){
//   echo" The weather is bad";
//   }
//   else {
//   echo"the weather is good.";
//   }


  // if($temp < 0 || $temp >30){
  //   echo" The weather is bad";
  //   }
  //   else {
  //   echo"the weather is good.";
  //   }


  // if(!$cloudy){
  //   echo"it's sunny";
  // } 
  // else{
  //   echo"it's cloudy";
  // }
  // ?>



  <?php 
  // $age = 18;
  // $citizen = true;

//   if($age>=18 && $citizen){
// echo"you can vote";
//   }
//   else{
//     echo"you can't vote";
//   };

// //autre façon d'ecrire le code 
//   if(!$age>=18 || $citizen){
//     echo"you cannot vote";
//       }
//       else{
//         echo"you can vote";
//       };
  ?>




<?php 
    // $child = false;
    // $senior = false;
    // $ticket = null;



    // if($child || $senior){
    //   $ticket = 10;
    // }
    // else {
    //   $ticket=15;
    // }
    // echo "the ticket price is \${$ticket}";
      ?>

<?php 
  //switch statement (replacement of elseif)
  // $grade = "Pizza";

  // switch ($grade){
  //   case"A":
  //     echo"you did Great";
  //     break;
  //   case"B":
  //     echo"you did Good";
  //     break;
  //   case"C":
  //     echo"you did Ok";
  //     break;
  //   case"D":
  //     echo"you did Poorly";
  //     break;
  //   case"F":
  //     echo"you failed";
  //     break;
  //   default:
  //   echo"{$grade} is not valid";

//another example

  //   $date = date("l");//give day of the week
  // switch ($date){
  //   case"Monday":
  //     echo"I hate Mondays";
  //     break;
  //   case"Tuesday":
  //     echo"you did Good";
  //     break;
  //   case"Friday":
  //     echo"you did Ok";
  //     break;
  //   case"Wedensday":
  //     echo"you did Poorly";
  //     break;
  //   case"Thursday":
  //     echo"It's almost the weekend";
  //     break;
  //   case"Friday":
  //     echo"the weekend is here";
  //     break;
  //   case"Friday":
  //     echo"let's relax";
  //     break;
  //   default:
  //   echo"{$date} is not a date";
  // } 
  
        ?>



<?php 
  
//For loop
// for($i = 10; $i>0;$i-=2){ //on peut avoir jusqu'a 3 condition à l'intérieur du for, ici le compteur,la condition, l'incrementtaion ou la décrementation.
//   echo $i. "<br>";
// }
    ?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document loop</title>
  </head>
  <body>
    <form action="index.php" method ="post">
    <label> Enter a number to count down from:</label>
    <input type="text" name ="counter">
    <input type="submit" value="start">
    </form>
</body>
</html> -->

<?php 
//   $counter = $_POST["counter"];
//   // for($i=0;$i <= $counter; $i++){
//   //   echo $i. "<br>";
//  for($i = $counter;$i >0; $i--){
//     echo $i. "<br>";

//   }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document while</title>
    </head>
    <body>
      <form action="index.php" method ="post">
      <input type="submit" name="stop" value ="stop">
      </form>
</body>
</html> -->


<?php 

//while loop () one statement/condition.  a utiliser pour une action à l'infinie qui permet de updater le code a chaque fois
// $counter = 0;
// While($counter <=0){
//   $counter++;
//   echo $counter."<br>";
// }

// $second = 0;
// $running = true;
// while($running){
//   if(isset($_POST["stop"])){
// $running = false;
//   }
// else {
// //wait a second
// $second++;
// echo $second."<br>";
// }
// }

  ?>

<?php 
//array
// $foods = array("apple","orange","banana","coconut");
// $foods = array("apple","orange","banana","coconut");

// $foods[0] = "pineapple";//changer le premier element de array
// array_push($foods, "pineapple");//ajoute un element a la fin du array
// array_push($foods, "kiwi", "blueberry");
//array_pop($foods);//retourne derbier element du array si array est vide elle retourne null


// echo $foods[0]. "<br>";
// echo $foods[1]."<br>";
// echo $foods[2]."<br>";
// echo $foods[3]."<br>";
// array_unshift() - Empile un ou plusieurs éléments au début d'un tableau
//array_shift — Dépile un élément au début d'un tableau
// array_shift($foods);
// $foods = array_reverse($foods); //reverse le array
// echo count($foods);

  ?>


<?php 
//associative array (key, value pairs)
// $capitals = array("USA"=> "Washigton D.C",
//           "Japan"=> "Kyoto", 
//           "South Korea"=>"Seoul",
//           "India"=> "New Delhi");

// echo $capitals["Japan"];
// //afficher le pays et sa capital
// foreach($capitals as $key => $value) {
//  echo "{$key} = {$value} <br>";

//}

// $capitals["USA"] = "LasVegas";
//ajouter nouvelle key value
// $capitals["China"] = "Beijing";
// array_pop($capitals);//enleve dernier element
//array_shift($capitals);//enleve le premier
// $keys = array_keys($capitals);

// foreach($keys as $key) {
//  echo "{$key} <br>";

// $values = array_values($capitals);
// $capitals = array_flip($capitals);//renverse les clés et les valeurs de notre array
// // $capitals = array_reverse($capitals);//reverse l'ordre dans notre array 
// echo count($capitals);

// // foreach($capitals as $key => $value) {
// //   echo "{$key} = {$value} <br>";

// // }

  ?>

  <!-- <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <form action="index.php" method ="post">
      <label> Enter a country</label>
      <input type="text" name="country">
      <input type="submit">

    </form>
    
  </body>
  </html> -->

  <?php 
  // //associative array suite practice

  // $capitals = array("Usa"=> "Washigton D.C",
  //                   "Japan"=> "Kyoto", 
  //                   "South Korea"=>"Seoul",
  //                   "India"=> "New Delhi");
  // $capital =  $capitals[$_POST["country"]];

  // echo "The capital is 
  // {$capital}";

    ?>

<?php 
   //isset() = Retourne True si la variable est déclaré et non null
   //empty() = retourne True si la variable n'est pas déclarer, false, null ou ""(string vide).

  //  $username = "";


  // //  echo isset($username);

  // if(isset($username)){
  //   echo "This variable is set";
  // }
  // else{
  //   echo "This variable is Not set";
  // }


  //  echo empty($username);

  // if(empty($username)){
  //   echo "This variable is empty";
  // }
  // else{
  //   echo "This variable is Not empty";
  // }
      ?>
  
  <!-- <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document isset/empty</title>
      </head>
      <body>
        <form action="index.php" method="post">
          <label>username</label>
          <input type="text" name = "username"><br>
          <label>password</label>
          <input type="password" name = "password"><br>
          <input type="submit" name="login" value="Log in">
        </form>
      </body>
      </html> -->

  
  <?php 

 /* 
foreach($_POST as $key => $value){
echo"{$key} = {$value} <br>";
}*/
//pratique pour verifier formulaire de login pour projet final! en prmeier on verifie if isset() puis if  empty()

/*if(isset($_POST["login"])){
  $username =  $_POST["username"];
  $password =  $_POST["password"];
  if(empty($username)){
    echo"username is missing, please enter your username!";
  }
elseif(empty($password)) {
  echo"password is missing, please enter your psw!";
}
else{
  echo "Hello {$username}";

}
}*/
?>

        <!-- <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Radio button</title>
        </head>
        <body>
          <form action="index.php" method="post">
            <input type="radio" name ="credit_card" value="visa">
            visa<br>
            <input type="radio" name ="credit_card" value="Mastercard">
            Mastercard<br>
            <input type="radio" name ="credit_card" value="American express">
            American Express<br>
            <input type="submit" name="confirm" value="confirm">

          </form>
        </body>
        </html> -->


<?php 
// radio button=Les éléments <input> dont l'attribut type vaut radio sont généralement utilisés pour construire des groupes d'options parmi lesquelles on ne peut choisir qu'une valeur. Les « boutons radio » sont représentés par des cercles remplis lorsqu'ils sont sélectionnés. ici l'exemple de credit card for online paiement.

/*if(isset($_POST["confirm"])){
// deuxieme if is nested if statment
  if(isset($_POST["credit_card"])){
    $credit_card = $_POST["credit_card"];
    echo $credit_card; 
}
else{
  echo "Please make a selection";
}
}//ici on verifie si on a le confirm et la selection d'une carte bancaire*/
//ici on verifie quelle type de carte à été selctionné, sin on slectionne rien et on click sur le boutton confirm il nous affiche le dernier else avec warning que la variable credit_card n'est pas définie, donc pour ne plus afficher ce warning il faudra declarer $credit_card = null; dans le premier avant(if imbriquée qui correspond au deuxieme ici!)
/*if(isset($_POST["confirm"])){
  $credit_card  = null;//declaration de variable à null ppour eviter les warning.
    if(isset($_POST["credit_card"])){
      $credit_card = $_POST["credit_card"];
     
  }
  if( $credit_card == "visa"){
   echo"vous avez choisi Visa";
  }
  elseif( $credit_card ==   "Mastercard"){
    echo"vous avez choisi Mastercard";
   }
  elseif( $credit_card == "American Express"){
    echo"vous avez choisi American Express";
   }

  else{
    echo"fait un choix svp";
   }
}*/


//Le même exemple avec switch
// $credit_card  = null;//ici on le declare hors if statement pour eviter le warning
// if(isset($_POST["credit_card"])){
//   $credit_card = $_POST["credit_card"];
// }

// switch($credit_card){
//   case"visa":
//     echo"You selected Visa";
//     break;
//   case"Mastercard":
//     echo"You selected Mastercard";
//     break;
//   case"American Express":
//     echo"You selected American Express";
//     break;
//   default:
//     echo"Please make a selction";
//  }  
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkbox in Php</title>
</head>
<body>

  <form action="index.php" method = "post">
    <input type="checkbox" name="pizza" value="Pizza">Pizza<br> 
    <input type="checkbox" name="humberger" value="Humberger">Humberger<br>
    <input type="checkbox" name="hotdog" value="Hotdog">Hotdog<br>
    <input type="checkbox" name="tacos" value="Tacos">Tacos<br>
    <input type="submit" name="submit"><br>
    
  </form>

</body>
</html> -->

<?php 
// //isset()
// if(isset($_POST["submit"])){

//   if(isset($_POST["pizza"])){
//     echo"You like Pizza! <br>";
//   }
//   if(isset($_POST["humberger"])){
//     echo"You like humbergers!  <br>";
//   }
//   if(isset($_POST["hotdog"])){
//     echo"You like hotdogs!  <br>";
//   }
//   if(isset($_POST["taco"])){
//     echo"You like tacos!  <br>";
//   }
//   if(empty($_POST["pizza"])){
//     echo"You don't like Pizza! <br>";
//   }
//   if(empty($_POST["humberger"])){
//     echo"You don't like humbergers!  <br>";
//   }
//   if(empty($_POST["hotdog"])){
//     echo"You don't like hotdogs!  <br>";
//   }
//   if(empty($_POST["tacos"])){
//     echo"You don't like tacos!  <br>";
//   }
// }
?>

<!-- <!DOCTYPE html>
//checkbox on array 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkbox in Php/array</title>
</head>
<body>
  
<form action="index.php" method = "post">
    <input type="checkbox" name="foods[]" value="Pizza">Pizza<br> 
    <input type="checkbox" name="foods[]" value="Humberger">Humberger<br>
    <input type="checkbox" name="foods[]" value="Hotdog">Hotdog<br>
    <input type="checkbox" name="foods[]" value="Tacos">Tacos<br>
    <input type="submit" name="submit"><br>
    
  </form>

</body>
</html>


<?php
// //array
// if(isset($_POST["submit"])){

//   $foods = $_POST ["foods"];

//   foreach($foods as $food){
//     echo $food. "<br>";
//   };
// }
  ?>


<?php
// function Happy_birthday(){
//   Echo "Hppy bday dear";
//   Echo "Hppy bday dear";
//   Echo "Hppy bday dear";
//   Echo "Hppy bday dear you are X old year";
// }
// Happy_birthday();
?>

<?php 
// function Happy_birthday($first_name, $age){
//   Echo "Hppy bday {$first_name} <br>";
//   Echo "Hppy bday {$first_name} <br>";
//   Echo "Hppy bday {$first_name} <br>";
//   Echo "Hppy bday dear you are 
//   {$age} old year <br>";

// }
// Happy_birthday("Dad", 64);
// Happy_birthday("Tosma", 36);
// Happy_birthday("Dan", 3);

  ?>

<?php 
//function avec return
// function is_even($number){
// $result = $number % 2;
// return $result;
// }
// echo is_even(11);
  ?>

<?php 
//square (sqrt) root (La racine carrée de deux varibles)
//   function hypotenuse($a, $b){
//     $c = sqrt($a ** 2 + $b **2);
//     return $c;
//   }
//   echo hypotenuse(4,5);
    ?>

<?php 
//string functions                                        
// $username = "Nass diatom geol";
// $phone = "078-656-5654";
 //$username = array("Nass", "diatom", "geol");
// $phone = "078-656-5654";

//$username = strtolower($username);//minuscule
//$username = strtoupper($username);//Majuscule
//$username = trim($username);//enleve l'espace
//$username = str_pad($username, 20, "0");// utilisée pour ajouter des caractères de remplissage à une chaîne jusqu'à ce qu'elle atteigne une certaine longueur dans l'exemple il ajoute des 0 jusqu'a 20 caractere ato total.
// $phone = str_replace("-", "", $phone);
// $username = strrev($username);//renverse les lettres
// $username = str_shuffle($username);//random shuffle 
// $equals = strcmp($username, "Nass");//compare deux string, s'il sont pareil il retourne 0 otherwise 1 or -1
// $count= strlen($username);//longueur
// $index = strpos($phone, "8");//trouve la position de "8" ou autres element
// // $first_name = substr($username, 0, 3);//creer new string a partir du string initial, il faut specifié le début et la fin ici je veux un nouveau string qui commence avec la lettre à index 0 et fini à 3.
// $lastname = substr($username, 4);//commence a 4 jusqu'a la fin de ma varible
// $fullaname = explode(" ", $username);// split string into an array
// $username = implode("-",$username);//prend array pr le convertir en string

// echo $username;

?>


<?php 
//Include() = copies the content of file(php/html/text) and includes it in our php file. Sections of our website become reusable and the changes only needs to made in one place.
// include("header.html");
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
    This is the home page <br>
    Stuff about your home page go here
  </body>
  </html>

<?php 
// include("footer.html");
  ?>


<?php 
/*cookie = les info sur les users dans un web browser.


86400second/day (temps d'expiration), "/" chemin de dossier par défaut

pour suppirmer les cookies, on change le temps d'expiration(86400 * 2)  en -0 
p.s on peut ajouter des cookies directement dans le navigateur inspect application cookie puis add cookie.*/



//   setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
//   setcookie("fav_drink", "Water", time() + (86400 * 3), "/");
//   setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/");

// foreach ($_COOKIE as $key => $value) {
//     echo "{$key} = {$value} <br>";
// }


//4 arguments, key, value , timeur (en seconde) & filepath
?>




<?php 

//hashing = transfomrer des données sensibles (psw) en lettres, chiffres,et/ou symboles via un processus mathematique()
//   $password = "pizza123";
//   $hash = password_hash($password,PASSWORD_DEFAULT );//DEUX ARGUMENT; LE PREMIER LA VARIABLE$PASSWORD, ET LE DEUXIEME ET LA CONSTANTE (ALGORITHM) PASSWORD_DEFAULT. LA VARAIBLE $hash va etre stocké dans notre DB.

//   echo $hash;
// //ici en compare le psw "hamburger666" avec notre psw $hash si ils sont mathimathiquement idem il retourne true
//   if(password_verify("hamburger666", $hash)){
//     echo"<br>You are logged in";
//   }
//   else{
//     echo"<br>incorrect psw";
//   }

    ?>

<?php 
// include("database.php");
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
  Hello <br>
</body>
</html> -->
<?php 
/******** filter sanitize filter  validate  pour filtrer et valider les usernames, age et les caracteres non autoriser dans une adresse mail********/
  ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>document</title>
</head>
<body>
  <form action="index.php" method="post">
    username:<br>
    <input type="text" name="username"> <br>age :<br>
    <input type="text" name="age"> <br>email:<br>
    <input type="text" name="email"><br>
    <input type="submit" name="login" value="login">
  </form>
</body>
</html> -->


<?php 
  
// if(isset($_POST["login"])){
//   $username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_SPECIAL_CHARS);

//   $age = filter_input(INPUT_POST, "age",FILTER_SANITIZE_NUMBER_INT);

//   $email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL);
//   ECHO "you email is 
//   {$email} and your are 
//   {$age} years old";
// }
// //filter validate
// if(isset($_POST["login"])){
//   $age = filter_input(INPUT_POST, "age",            FILTER_VALIDATE_INT);

//   $email = filter_input(INPUT_POST, "email",            FILTER_VALIDATE_EMAIL);

//   if(empty($email)){
//     echo"That email wasn't valid";
//   } 

//   else{
//       echo" you  email is :{$email}";
//   }

// }
//     ?>

<?php 
