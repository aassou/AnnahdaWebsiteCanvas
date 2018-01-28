<?php
$i = 15;
$sqlStatement = "INSERT INTO `t_image`(`name`, `url`, `description`, `idProjet`, `created`, `createdBy`) 
VALUES ";

for($i; $i < 95; $i++) $sqlStatement .= "('Annahda10_".$i."','/images/projects/Annahda10_".$i.".jpg','Annahda ".$i."_15',11,now(),'admin'),";

echo $sqlStatement;