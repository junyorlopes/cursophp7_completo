<?php

function teste($callBack){
	//processo lento
	$callBack();
}

teste(function(){
	echo "Terminou!";
});

?>