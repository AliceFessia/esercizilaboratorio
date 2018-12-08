<?php include("top.html");
$name = $_POST["Name"];
if(isset($_POST["Name"]) and !empty($_POST["Name"])and isset($_POST["Age"]) and !empty($_POST["Age"]) and isset ($_POST["Personality_Type"]) and !empty($_POST["Personality_Type"]) and isset ($_POST["Min"]) and !empty($_POST["Min"]) and isset($_POST["Max"]) and !empty($_POST["Max"])){
/*$gender = $_POST["Gender"];
$age = $_POST["Age"];
$personality  = $_POST["Personality_Type"];
$os = $_POST["Favorite_OS"];
$min = $_POST["Min"];
$max = $_POST["Max"];*/
$data = implode(",", $_POST);//uso Post una volta per tutte le variabili sopra e le memorizzo in un'unica variabile che sarebbe $data
    file_put_contents("singles.txt",$data."\n",FILE_APPEND);//file_append aggiunge la stringa nuova al file singles.txt;
?>
Thank you!<br>
Welcome to NerdLuv, <?=$name?><br>
Now <a href="matches.php"> log in to see your matches!</a>
<?php } else{
    echo("Error");
} include("bottom.html"); ?>