<?php

function poss($chai){
	$alpha='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$tab=array();
	for ($i=0; $i<strlen($chai); $i++) { 
		array_push($tab,strpos($alpha,$chai[$i])+1);
	}

	return $tab;
}

function add($tab1, $tab2){
	//$tab1=str_split($tab1);
	//$tab2=str_split($tab2);
	$tabl=array();
	$leng=count($tab1)>count($tab2)? count($tab2):count($tab1);

	for ($i=0; $i < $leng; $i++) { 
		array_push($tabl,((($tab1[$i])+($tab2[$i]))%26)-2);
	}
	
	return $tabl;
}

function space_open($a){


}

if (isset($_POST['crypt'])) {


if (!empty($_POST['text']) & !empty($_POST['key'])) {
	 

$alpha='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$str=strtoupper($_POST['text']);
$key=strtoupper($_POST['key']);
$str_tab=str_split($str,strlen($key));
if(preg_match(" ", $str)){
	
}
$res=array();
for ($i=0; $i <count($str_tab) ; $i++) { 
	
	$res=add(poss($str_tab[$i]) , poss($key));
for ($k=0; $k< count($res); $k++) {
		echo $res[$k].'<br>';
 	//@$result.=$alpha[$res[$k]];
 
 }
}
}else {
echo '  Remplissez correctement tous les champs ...';}
   }

//$tabb=array();
/*$tabb2=array(3,2,1);

$tabb=add( poss($str_tab[1]) , poss($str_tab[0]) );
//print_r($tabb);

for ($i=0; $i <count($tabb) ; $i++) { 
	// $tabb[$i].'<br>';
	echo $alpha[$tabb[$i]];
}
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<br><br>
<form method="POST" >
	

<label for="text">Text:  </label>
<input type="text" value="<?= @$str ?>" name="text">

<label for="key">Clé:  </label>
<input type="text" value="<?= @$key ?>" name="key">

<input type="submit" value="Crypter" name="crypt">

</form>

<br><br>
<div>
<?php //echo @$result ?>
</div>
</body>
</html>