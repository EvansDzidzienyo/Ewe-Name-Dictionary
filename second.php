


<!doctype html>
<html>
<head>

<title>EWE Dictionary</title>

<link rel="stylesheet" type="text/css" href="page.css"/>
<link rel="stylesheet" type="text/css" href="inputs.css">

<style type="text/css">
#n{color:red; font-size:30px;}
#a{color:orange; font-size:30px;}
#m{color:green; font-size:30px;}
#e{color:blue; font-size:30px;}

fieldset{background-color:rgba(247, 236, 236, 1);}
body  {background:url("pb.jpg");}
header{background-color:#000033; color:white;}
footer{background-color:#000033;color:white;}

legend{ color:#330000; font-size:22px; font-family:ravie;}
    #p{font-weight:bold; color:deeppink; background:white; font-size:17.3px; padding-top:9px; font-family:segoe print; border-radius:7px;}
	h3{color:salmon; font-weight:bold; text-align:center; font-family: }
	
</style>

</head>




<body>
<section id="wrapper">

<header>
<h1>!WELCOME TO MY EWE DICTIONARY.</h1>
<h2> Did This Because I Am Proud Of My Tribe.I Love My People!</h2>
</header>


<form action="second.php" method="POST">
<fieldset>



<?php
if(isset($_POST['input'])){
	$input=$_POST['input'];
	
	switch ($input){
		case 'Enam':
		echo '<html><h3>Meaning:He Has Given To Me.</h3>
		       <img src="me.png" width="320" height="400">
		
		</html>';
		break;
		
		case 'Elorm':
		echo '<html><h3>Meaning:He Loves Me.</h3></html>';
		break;
		
		case 'Makafui':
		echo '<html><h3>Meaning:I Will Praise Him.</h3></html>';
		break;
		
		case 'Selasie':
		echo '<html><h3>Meaning:He Has Heard.</h3></html>';
		break;
		
		case 'Yayra':
		echo '<html><h3>Meaning:Blessing.</h3></html>';
		break;
		
		
		case 'Mawuli':
		echo '<html><h3>Meaning:God Is There,</h3></html>';
		break;
		
		
		
		case 'Eli':
		echo '<html><h3>Meaning:He Is There,</h3></html>';
		break;
		
		case 'Dzifa':
		echo '<html><h3>Meaning:He Hears It.</h3></html>';
		break;
		
		
		case 'Edem':
		echo '<html><h3>Meaning:He Has Redeemed Me.</h3></html>';
		break;
		
		
		case 'Elinam':
		echo '<html><h3>Meaning:He IS There For Me.</h3></html>';
		break;
		
		case 'Sena':
		echo '<html><h3>Meaning:He Has Given.</h3></html>';
		break;
		
		
		case 'Essene':
		echo '<html><h3>Meaning:He Has Heard Me.</h3></html>';
		break;
		
		
		case 'Dzigbordi':
		echo '<html><h3>Meaning:Patience.</h3></html>';
		break;
		
		case 'Esaaba':
		echo '<html><h3>Meaning:Prosperity.</h3></html>';
		break;
		
		default: echo '<html><h3>Meaning not found.</h3></html>';
	}
	
	
}
?>


<legend >LETS Find The Meaning Of Your Ewe Name:</legend><hr>

   <label>
    <span>
	<div id="n">N</span>
	<span id="a">A</span>
	<span id="m">M</span>
	<span id="e">E</span>
	</span>
     <input type="text" name="input" maxlength="20" required pattern="[A-Za-z]{3,}" title="Name should contain only alphabets and a minimum of three letters." placeholder="Type in your Ewe name"  value="<?php if(isset($input)){echo $input;}?>"  >
   </label>
<br>
<input type="submit" value="Search"/>

</fieldset>
</form>

<footer>CopyRight@2019</footer>

</section>
</body>
</html>