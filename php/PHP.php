<?php

# student pass or fail
$a=68;
if($a>=35)
{
  echo "pass";
}
else 
{
 echo"fail";
}
echo "<br><hr>";

#odd even
$b=2;
if ($b%2==0) {
	echo "even";
} else {
echo "odd<br>";
}
echo "<br><hr>";

#postive or negtive no
$n=55;
if ($n>0) {
	echo "postive".$n;
} 
elseif ($n<0) {
	echo "no is negtive".$n;
}
else {
	echo "no is zero".$n;
}
echo "<br><hr>";


#vowels or consonant
$c='a';
if ($c='A'||$c='a') {
	echo "char is vowel".$c;
} 
elseif ($c='E'||$c='e') {
	echo "char is vowel".$c;
}
elseif ($c='I'||$c='i') {
	echo "char is vowel".$c;
}
elseif ($c='O'||$c='o') {
	echo "char is vowel".$c;
}
elseif ($c='U'||$c='u') {
	echo "char is vowel".$c;
}
else {
	echo "char is cosonant".$c;
}
echo "<br><hr>";

# three number max 
$d=100;
$e=50;
$f=98;
 if ($d>$e && $d>$f) {
 echo $d."is max";
 }
 elseif ($e>$f) {
  	echo $e."is max";
  } 
 else {
 	echo $f."is max";
 }
echo "<br><hr>";

#minimum no if else ladders
$g=34;
$h=24;
$i=98;
if ($g>$h) {
if ($g>$i) {
	echo $g."is min";
} else {
	echo $i."is min";
}
} 
else {
	if ($h<$i) {
		echo $h."is min";
	} else {
	  echo $i."is min";
	}
}
echo "<br><hr>";

# simple calculate using switchcase
$j=6;
$k=9;
$l="+";
switch ($l) {
 	case '+':
 		echo "sum=".$j+$k;
 		break;
 	case '-':
 		echo "sub=".$j-$k;
 		break;
 	case '*':
 		echo "mul=".$j*$k;
 		break;
    case '/':
 		echo "div=".$j/$k;
 		break;
 	default:
 		echo "error";
 		break;
 } 
echo "<br><hr>";

#week day using switch case
$m=5;
 switch ($m) {
 	case '1':
 		echo "sun";
 		break;
 	case '2':
 		echo "mon";
 		break;
 	case '3':
 		echo "tues";
 		break;
    case '4':
 		echo "wed";
 		break;
 	case '5':
 		echo "thur";
 		break;
 	case '6':
 		echo "fri";
 			break;
 	case '7':
 		echo "sat";
 				break;		
 	default:
 		echo "error";
 		break;
 } 
echo "<br><hr>";

# break , goto , continue 
for ($i=1; $i<=10; $i++) { 
	if ($i==5) {
		break;
	}
	echo $i."&nbsp &nbsp";
}
echo "<hr>";
for ($i=1; $i<=10 ; $i++) { 
	if($i==5){
		continue;
	}
	echo $i."&nbsp &nbsp";
}

echo "<hr>";
for ($i=1; $i<=10 ; $i++) { 
	if($i==5){
		goto hell;
	}
	echo $i."&nbsp &nbsp";
}
hell:
echo "loop exit";

?>