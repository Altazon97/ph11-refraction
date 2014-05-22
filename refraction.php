<!-- Next thing to write: jQuary to execute existing PHP scripts in seperate files !-->

<html>
<body>
<title>Pyroh Refraction</title>
<font face = "Verdana" size = "10">Refraction</font>
<br><br><br><font size = "5">What formula do you need?</font>

<br><br>

<button type="button" onclick="showTextBox('n');showTextBox('vMedium');displayFormula('Light Speed');showCalc('lightB')">Light Speed</button>
<button type="button" onclick="hideTextBox('n');hideTextBox('vMedium');hideFormula();hideCalc('lightB')">Hide</button><br>
<button type="button" onclick="showTextBox('nI');showTextBox('nR');showTextBox('sinI');showTextBox('sinR');displayFormula('Snell\'s Law');showCalc('snellB')">Snell's Law</button>
<button type="button" onclick="hideTextBox('nI');hideTextBox('nR');hideTextBox('sinI');hideTextBox('sinR');hideFormula();hideCalc('snellB')">Hide</button><br>
<button type="button" onclick="showTextBox('critical');showTextBox('nInc');displayFormula('Critical Angle');showCalc('critB')">Critical Angle</button>
<button type="button" onclick="hideTextBox('critical');hideTextBox('nInc');hideFormula();hideCalc('critB')">Hide</button><br><br>

<p id = "formulaArea" />

<form>
<input type="text" id="n" name="idxref" value="Index of Refraction" style="display:none">
<input type="text" id="vMedium" name="lightVelMed" value="Velocity of Light in Medium" style="display:none">

<input type="text" id="nI" name="idxrefI" value="Initial Index of Refraction" style="display:none">
<input type="text" id="nR" name="idxrefF" value="Final Index of Refraction" style="display:none">
<input type="text" id="sinI" name="angI" value="Angle of Incidence" style="display:none">
<input type="text" id="sinR" name="angR" value="Angle of Refraction" style="display:none">

<input type="text" id="critical" name="critAng" value="Critical Angle" style="display:none">
<input type="text" id="nInc" name="idxRef0" value="Index of Refraction" style="display:none">

<button type="button" id="lightB" onclick = "calcLight()" style="display:none">Calculate Light Speed</button>
<button type="button" id="snellB" onclick = "calcSnell()" style="display:none">Calculate Snell's Law</button>
<button type="button" id="critB" onclick = "calcCrit()" style="display:none">Calculate Critical Angle</button>
</form>

<script>
function showTextBox(id) {
document.getElementById(id).style.display = "block";
}
function hideTextBox(id) {
document.getElementById(id).style.display = "none";
}
function displayFormula(formula) {
document.getElementById("formulaArea").innerHTML=("Now using " + formula);
}
function hideFormula() {
document.getElementById("formulaArea").innerHTML=("");
}
function showCalc(type) {
document.getElementById(type).style.display = "block";
}
function hideCalc(type) {
document.getElementById(type).style.display = "none";
}

function calcLight() {
<?php
$idxref = $_POST["idxref"];  //index of refraction
$lightVelMed = $POST["lightVelMed"];  //velocity of light in medium
if ($idxref == null) {
	$ans = 300000000 / $lightVelMed;
	echo $ans;
}
if ($lightVelMed == null) {
	$ans = 300000000 / $idxref;
	echo $ans;
}
?>
}
function calcSnell() {
<?php
$idxrefI = $_POST["idxrefI"];  //initial index of refraction
$idxrefF = $_POST["idxrefF"];  //final index of refraction
$angI = $_POST["angI"];  //angle of incidence
$angR = $_POST["angR"];  //angle of refraction
if ($idxrefI == null) {
	$templeft = sin($angI);
	$tempright = (sin($angR)) * $idxrefF;
	$ans = $templeft / $tempright;
	echo $ans;
}
if ($angI == null) {
	$tempright = $idxrefF * (sin($angR));
	$ans = $templeft / $idxrefI;
	echo $ans;
}
if ($idxrefF == null) {
	$templeft = $idxrefI * (sin($angR));
	$ans = $tempright / (sin($angI));
	echo $ans;
}
if ($angF == null) {
	$templeft = $idxrefI * (sin($angI));
	$ans = $templeft / $idxrefF;
	echo $ans;
}
?>
}
function calcCrit() {
<?php
$critAng = $_POST["critAng"];  //critical angle
$idxRef0 = $_POST["idxref0"];  //index of refraction, with 0 to differ from light speed formula
if ($critAng == null) {
	$ans = 1 / $idxref0;
	echo $ans;
}
if ($idxref0 == null) {
	$ans = 1 / (sin($critAng));
	echo $ans;
}
?>
}
</script>

</body>
</html>
