<html>
<head>
<style>
h1{
	color:red;
	margin-top:21%;
}
</style>
</head><?php
$height=0; 
$width=0; 
 
if ($_POST['height']!=strval(floatval($_POST['height'])))  
{ 
    print "<center><h1>Height is invalid<br />"; 
    print "<a href='Exercies.html'>try again</A></center></h1>"; 
    exit; 
} 

$height=$_POST['height']; 

if ($height<0 || $height>2.5) 
{ 
    print "<center><h1>Height must be value between 0 and 2.5<br />"; 
    print "<a href='Exercies.html'>try again</A></center></h1>"; 
    exit; 
} 

if ($_POST['weight']!=strval(intval($_POST['weight'])))  
{ 
    print "<center><h1>Weight is invalid<br />"; 
    print "<a href='Exercies.html'>try again</A></center></h1>"; 
    exit; 
} 

$weight=$_POST['weight']; 

if ($weight<0 || $weight>500) 
{ 
    print "<center><h1>Weight must be value between 0 and 500<br/>"; 
    print "<a href='Exercies.html'>try again</A></center></h1>"; 
    exit; 
} 

$bmi=$weight / ($height * $height); 

print("<center><h1 style='color:green;'>Your Body mass index (BMI) is $bmi</h1></center>"); ?> 
<br>
<center><img src="bmival.PNG" width="700" height="500"  alt="Logo of a BMI table" /></center>
</html>

