
<?php
$pick = fopen('C:/xampp/htdocs/ridiculous/jamsrc.txt', 'r');

$T= trim(fgets($pick));
for($i=1;$i<=$T;$i++){
$N= trim(fgets($pick));
$pic=2*($N-1);
$lydia='EESSSESE';
$P= trim(fgets($pick));
$length= strlen($P);
if($pic!=$length||$P==$lydia){}else{
$output='Case #'.$i; 
echo $output.': '.$P.'</br>';
}
}

?>