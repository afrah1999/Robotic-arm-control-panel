<!DOCTYPE html>
<html>
<head>
	<title>robot control panel</title>
<link rel="stylesheet" type="text/css" href="control panel.css">

	<script type="text/javascript" src="control panel.js"></script>
</head>
<body style="background-image: linear-gradient(to left, #535782,#2C3E50 );
">
<div id="snackbar"></div> 



<form id="main" action="control panel.php" method="POST">
	<h1>لوحة التحكم بالذراع الآلية</h1>

<div class="con">
<span class="Value" id="rangeValue1">90</span>
<input type="range" min="0" max="180" value="90" oninput="rangeValue1.innerText = this.value" class="slider"
 name="slider1" >
	  	<img src="lable.svg"  class="mno" width="100" height="100">
 <span class="motor">محرك 1</span> 
</div>

	<div class="con">
		<span class="Value" id="rangeValue2">90</span>
	  <input type="range" min="0" max="180" value="90" oninput="rangeValue2.innerText = this.value" class="slider" 
	  name="slider2" >
		<img src="lable.svg"  class="mno" width="100" height="100">
 <span class="motor">محرك 2</span> 
</div>

<div class="con">
			<span class="Value" id="rangeValue3">90</span>
	  <input type="range" min="0" max="180" value="90" oninput="rangeValue3.innerText = this.value"  class="slider"
	  name="slider3">
			<img src="lable.svg" class="mno" width="100" height="100">
 <span class="motor">محرك 3</span> 
</div>

<div class="con">
			<span class="Value" id="rangeValue4">90</span>
	  <input type="range" min="0" max="180" value="90" oninput="rangeValue4.innerText = this.value"  class="slider"
	  name="slider4">
		<img src="lable.svg"  class="mno" width="100" height="100">
 <span class="motor">محرك 4</span> 
</div>

<div class="con">
			<span class="Value" id="rangeValue5">90</span>
	  <input type="range" min="0" max="180" value="90" oninput="rangeValue5.innerText = this.value" class="slider"
	  name="slider5">
		<img src="lable.svg"  class="mno" width="100" height="100">
 <span class="motor">محرك 5</span> 
</div>
<div class="con">
			<span class="Value" id="rangeValue6">90</span>
	  <input type="range" min="0" max="180" value="90" oninput="rangeValue6.innerText = this.value" class="slider"
	  name="slider6">
		<img src="lable.svg"  class="mno" width="100" height="100">
 <span class="motor">محرك 6</span> 
</div>
<br>
<button type="submit" name="save" class="grad">حفظ</button>
<!-- <button type="submit" name="run" class="grad" >تشغيل</button>
 -->
</form>

	<img id="design" src="background-copy.png"  width="490px" height="317px" >
	<img id="arm" src="arm.png"  width="200" height="300" >


<?php
$dsn="mysql:hsot=localhost;dbname=control panel";
$username ="root";
$password="";
try{
$conn=new PDO($dsn,$username,$password);

}
catch(PDOExeption  $Exception){
  throw new MyDatabaseException( $Exception->getMessage( ) , (int)$Exception->getCode( ) );	exit();
}


if(isset($_POST["save"])){
	$s1=$_POST["slider1"];
    $s2=$_POST["slider2"];
	$s3=$_POST["slider3"];
	$s4=$_POST["slider4"];
    $s5=$_POST["slider5"];
	$s6=$_POST["slider6"];

	$sliders = array($s1,$s2,$s3,$s4,$s5,$s6);
	
 for ($x = 0; $x <= 6; $x++) {
  $sql = "INSERT INTO ControlPanel (motor1,motor2,motor3,motor4,motor5,motor6)
  VALUES ('$s1','$s2','$s3','$s4','$s5','$s6')";
}
  $conn->exec($sql);
   echo '<script>
        myFunction("تم حفظ قيم الزوايا للمحركات");
    </script>';
    
} else{
echo '<script>
        myFunction("
يرجى تحريك شريط التمرير والضغط على حفظ.");
    </script>';
}

?>



</body>
</html>
<!--border-style: solid ;
  border-width: medium;
border-color: white;
border-radius: 16px;
 box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

//////////////////////////
// if(isset($_POST["run"])){
// 	$sql1 = "INSERT INTO run (run)
//   VALUES (1)";
//   $conn->exec($sql1);
//  echo '<script>
//         myFunction("robot arm is runing");
//     </script>';
// }
-->
