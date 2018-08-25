<?php

//Api Web Remote Control


function set($funz,$sec,$cod){
	
	//Api Per Il controllo degli apparecchi
	
	
	if($sec == "1"){
	//  Sezione/Edifico 1	
		
		$url = "https://example.com/api/ex/ex1/ex2/func?par1=$funz&par2=$sec&par3=$cod"
		
		$res = file_get_contents($url);
		
		if($res){ // Se il risultato è vero o positivo oppure indica il successo dell'azione invio notifica
			
			
			//Inserire Api Per Notifiche
			
			
			
			// ------------------------
			
			
		}
	
	}else if($sec == "2"){
		//  Sezione/Edifico 2	
		
		$url = "https://example.com/api/ex/ex1/ex2/func?par1=$funz&par2=$sec&par3=$cod"
		
		$res = file_get_contents($url);
		
		if($res){ // Se il risultato è vero o positivo oppure indica il successo dell'azione invio notifica
			
			
			//Inserire Api Per Notifiche
			
			
			
			// ------------------------
			
			
		}
	
	}else if($sec == "3"){
		//  Sezione/Edifico 3	
		
		$url = "https://example.com/api/ex/ex1/ex2/func?par1=$funz&par2=$sec&par3=$cod"
		
		$res = file_get_contents($url);
		
		if($res){ // Se il risultato è vero o positivo oppure indica il successo dell'azione invio notifica
			
			
			//Inserire Api Per Notifiche
			
			
			
			// ------------------------
			
			
		}
	
	}else if($sec == "4"){
		//  Sezione/Edifico 4	
		
		$url = "https://example.com/api/ex/ex1/ex2/func?par1=$funz&par2=$sec&par3=$cod"
		
		$res = file_get_contents($url);
		
		if($res){ // Se il risultato è vero o positivo oppure indica il successo dell'azione invio notifica
			
			
			//Inserire Api Per Notifiche
			
			
			
			// ------------------------
			
			
		}
	
	}else if($sec == "5"){
		//  Sezione/Edifico 5	
		
		$url = "https://example.com/api/ex/ex1/ex2/func?par1=$funz&par2=$sec&par3=$cod"
		
		$res = file_get_contents($url);
		
		if($res){ // Se il risultato è vero o positivo oppure indica il successo dell'azione invio notifica
			
			
			//Inserire Api Per Notifiche
			
			
			
			// ------------------------
			
			
		}
	
	}
	
	
}



if($_GET['sec'] == "1"){
	
	echo "Sec Scelto : ".$_GET['sec'] ;
	
	echo "<br>";
	
if($_GET['funz'] == "on"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "off"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "help"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "other"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}
	
	
	
}else if($_GET['sec'] == "2"){
	
	echo "Sec Scelto : ".$_GET['sec'] ;
	
	echo "<br>";
	
	if($_GET['funz'] == "on"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "off"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "help"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "other"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}
	
	
	
}else if($_GET['sec'] == "3"){
	
	echo "Sec Scelto : ".$_GET['sec'] ;
	
	echo "<br>";
	
	if($_GET['funz'] == "on"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "off"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "help"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "other"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}
	
	
	
}else if($_GET['sec'] == "4"){
	
	echo "Sec Scelto : ".$_GET['sec'] ;
	
	echo "<br>";
	
	if($_GET['funz'] == "on"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "off"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "help"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "other"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}
	
	
	
}else if($_GET['sec'] == "5"){
	
	echo "Sec Scelto : ".$_GET['sec'] ;
	
	echo "<br>";
	
	if($_GET['funz'] == "on"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "off"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "help"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}else if($_GET['funz'] == "other"){
	
	
	set($_GET['funz'],$_GET['sec'],$_GET['cod']);
	
	
}
	
	
	
}

	
	
	
	
	

?>
