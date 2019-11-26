<?php
$texto=file("palavras.txt");
$letras = preg_split("//", $_GET['palavra'], -1, PREG_SPLIT_NO_EMPTY);
$anagrama=$letras;
var_dump($anagrama);
xana();
function xana(){
analgrama(strlen($_GET['palavra']),0);
}

function analgrama($vet,$n){
	if($n==$vet){

		for($i=0;$i<sizeof($anagrama);$i++){
		//	echo $anagrama[$i];
		}
	}else{

		for($i=0;$i<$vet;$i++){
			$a=false;
			for($j=0;$j<$n;$j++){
				if( $anagrama[$j]==$vet[$i]){
					$a=true;
				}

			}
			if(!$a){
				$anagrama[$n]=$vet[$i];
				analgrama($vet,$n+1);
			}
		}
	}


}



$minuscula = $_GET['palavra'];
$palavra = strtoupper($minuscula);

$letras = preg_split("//", $palavra, -1, PREG_SPLIT_NO_EMPTY);

$tamanho = sizeof($letras);
$tamanhoo=1;
for($i=$tamanho;$i>0;$i--){
	
	$tamanhoo*=$i;
}
	for($i=0;$i<$tamanhoo;$i++){
	
	$anal= str_shuffle($palavra);
	
   

	
if( preg_match( "/" .$anal."/",file_get_contents("palavras.txt"),$matches,PREG_OFFSET_CAPTURE ) ){ 
    //var_dump($matches);
   	//echo $anal ;
   echo "<br>";




    
}else{
   
}
	}