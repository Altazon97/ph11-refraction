<html>
<body>
<title>Pyroh Refraction</title>
<font face = "Verdana" size = "10">Refraction</font>
<br><br><br><font size = "5">What formula do you need?</font>

<br><br>

<button type="button" onclick="showTextBox('n');showTextBox('vMedium');displayFormula('Light Speed');showCalc('light')">Light Speed</button>
<button type="button" onclick="hideTextBox('n');hideTextBox('vMedium');hideFormula()">Hide</button><br>
<button type="button" onclick="showTextBox('nI');showTextBox('nR');showTextBox('sinI');showTextBox('sinR');displayFormula('Snell\'s Law')">Snell's Law</button>
<button type="button" onclick="hideTextBox('nI');hideTextBox('nR');hideTextBox('sinI');hideTextBox('sinR');hideFormula()">Hide</button><br>
<button type="button" onclick="showTextBox('critical');showTextBox('nInc');displayFormula('Critical Angle')">Critical Angle</button>
<button type="button" onclick="hideTextBox('critical');hideTextBox('nInc');hideFormula()">Hide</button><br><br>

<p id = "formulaArea" />

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
function hideFormula(formula) {
document.getElementById("formulaArea").innerHTML=("");
}

function showCalc(type) {
document.getElementById(type).style.display = "block";
}
function calcLight() {
<?php
$idxref = $_POST["idxref"];  //index of refraction
$lightVelMed = $POST["lightVelMed"];  //velocity of light in medium

$idxrefI = $_POST["idxrefI"];  //initial index of refraction
$idxrefF = $_POST["idxrefF"];  //final index of refraction
$angI = $_POST["angI"];  //angle of incidence
$angR = $_POST["angR"];  //angle of refraction

$critAng = $_POST["critAng"];  //critical angle
$idxRef0 = $_POST["critang"];  //index of refraction, with 0 to differ from light speed formula

//now do calculations!
?>


</script>

<form>
<input type="text" id="n" name="idxref" value="Index of Refraction" style="display:none">
<input type="text" id="vMedium" name="lightVelMed" value="Velocity of Light in Medium" style="display:none">

<input type="text" id="nI" name="idxrefI" value="Initial Index of Refraction" style="display:none">
<input type="text" id="nR" name="idxrefF" value="Final Index of Refraction" style="display:none">
<input type="text" id="sinI" name="angI" value="Angle of Incidence" style="display:none">
<input type="text" id="sinR" name="angR" value="Angle of Refraction" style="display:none">

<input type="text" id="critical" name="critAng" value="Critical Angle" style="display:none">
<input type="text" id="nInc" name="idxRef0" value="Index of Refraction" style="display:none">

<button type="button" id="light" onclick = calcLight()></button>
<button type="button" id="snell" onclick = calcSnell()></button>
<button type="button" id="crit" onclick = calcCrit()></button>
</form>




</body>
</html>
