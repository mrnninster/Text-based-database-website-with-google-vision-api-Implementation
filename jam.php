<?php
$pick = fopen('C:/xampp/htdocs/ridiculous/interact.txt', 'r');

$T= trim(fgets($pick));
for($i=1;$i<=$T;$i++){
$H=trim(fgets($pick));
$N=trim(fgets($pick));
$I=trim(fgets($pick));
$D=trim(fgets($pick));
$revN= strrev($N);
$secproc=hash('sha512', $revN);
if($secproc==$H){
	echo "
                <div class='big' >
                  <img style='width: 50%; height: 224px; border-radius: 10px;margin-bottom: 5px;' src='$I'/>
                    <h4 style='width: 49%; float: left; background-color: rgb(255,255,255); text-align: center; text-transform: uppercase; margin-top: 5%; font-size: 15px;'>
                      <strong style='text-decoration: underline;'>$N
                      </strong></br>
                      <p>
                      $D
                      </p>
                    </h4>
                </div>
";}
else{exit('HACK ATTEMPT, REVIEW INTERACTION');}}
?>