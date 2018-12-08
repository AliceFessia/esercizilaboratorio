<?php include("top.html"); 
$name = $_GET["Name"];
if(isset($name) and !empty($name)){
?><!-- preleva la variabile Name dall'URL e la assegna alla variabile $name-->
<h1>
Matches for <?= $name?>
</h1>
<?php $single=file("singles.txt");//salvo il file single.txt nella variabile overview
  foreach($single as $j){
      list($namet,$gendert,$aget,$typet,$ost,$mint,$maxt) = explode(",",$j);
          if($namet == $name){
              $gender = $gendert;
              $age = $aget;
              $type = $typet;
              $os = $ost;
              $min = $mint;
              $max = $maxt;
          }
  
  }
  foreach($single as $i){//$i scorre le "parti" dell'array
      list($pname,$pgender,$page,$ptype,$pos,$pmin,$pmax) = explode(",",$i);//ho preso la stringa e l'ho divisa con explode nelle sue varie variabli
      $typecheck = 0;
for($i=0;$i<4;$i++){
    if($type[$i] == $ptype[$i])
        $typecheck = 1;
}

if($gender != $pgender and (int)$min<(int)$page and (int)$page<(int)$max and (int)$pmin<(int)$age and (int)$pmax>(int)$age and $os == $pos and $typecheck ==1){

?>
<div class="match">
<p>
<img src=" http://www.cs.washington.edu/education/courses/cse190m/12sp/homework/4/user.jpg" alt="partner">
<?=$pname?>
</p>
<ul>
    <li><b>gender</b> = <?=$pgender?></li>
    <li><b>age</b> = <?=$page?></li>
    <li><b>type</b> = <?=$ptype?></li>
    <li><b>OS</b> = <?=$pos?></li>
</ul>
</div>
<?php } ?>

<?php } ?>

<?php }else{
        echo("Error");
}
    include("bottom.html"); ?>