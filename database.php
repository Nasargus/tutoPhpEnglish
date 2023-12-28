<?php 
$db_server = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "buisinessdb";
$conn = "";
try {
  $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {
  echo "Could not connect";
}
if ($conn) {
  echo "You are connected!";
}

  ?>
<?php 
//   //methode plus simplifié mais ici j'ai erreur je n'ai pas les bonnes info pour me connecte à ma data base!i ll check this later

// $db_server = "localhost";
// $db_user = "root";
// $db_pass = "root";
// $db_name = "buisinessdb";
// $conn = "";

// try{
//     $conn = mysqli_connect($db_server,
//     $db_user, 
//     $db_pass,
//     $db_name);
// }
// catch(mysqli_sql_exception){
//     echo"could not connect";
// }

// if($conn){
//     echo"you are connected!";
// } 
//     ?>



