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
<input type="text" id="n" name="idxref" placeholder="Index of Refraction" style="display:none">
<input type="text" id="vMedium" name="lightVelMed" placeholder="Velocity of Light in Medium" style="display:none">

<input type="text" id="nI" name="idxrefI" placeholder="Initial Index of Refraction" style="display:none">
<input type="text" id="nR" name="idxrefF" placeholder="Final Index of Refraction" style="display:none">
<input type="text" id="sinI" name="angI" placeholder="Angle of Incidence" style="display:none">
<input type="text" id="sinR" name="angR" placeholder="Angle of Refraction" style="display:none">

<input type="text" id="critical" name="critAng" placeholder="Critical Angle" style="display:none">
<input type="text" id="nInc" name="idxRef0" placeholder="Index of Refraction" style="display:none">

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

//quick constants to multiply to convert radians and degrees
//Javascript LOVES to use radians in trigonometric functions
var DtoR = Math.PI/180;
var RtoD = 180/Math.PI;

function calcLight()
{
var n = document.getElementById('n').value;
var vMedium = document.getElementById('vMedium').value;
if (n == "") {
	var ans = 300000000 / vMedium;
	alert("Index of refraction is " + ans);
}
else if (vMedium == "") {
	var ans = 300000000 / n;
	alert("Velocity of light in medium is " + ans);
}
}

function calcSnell() {
var nI = document.getElementById('nI').value;
var nR = document.getElementById('nR').value;
var sinI = document.getElementById('sinI').value;
var sinR = document.getElementById('sinR').value;

if (nI == "") {
	var templeft = Math.sin(Math.PI * (sinI / 180));
	var tempright = (Math.sin(Math.PI * (sinR / 180))) * nR;
	var ans = templeft / tempright;
	alert("Initial index of refraction is " + ans);
}
else if (sinI == "") {
	var templeft = nR * (Math.sin(sinR * DtoR));
	var ans = templeft / nI;
	alert("Initial angle of refraction is " + (Math.asin(ans) * RtoD));
}
else if (nR == "") {
	var templeft = nI * (Math.sin(Math.PI * (sinI/180)));
	var ans = templeft / (Math.sin(Math.PI * (sinR/180)));
	alert(ans);
}
else if (sinR == "") {
	var templeft = nI * (Math.sin(sinI * DtoR));
	var ans = templeft / nR;
	alert("Final angle of refraction is" + (Math.asin(ans) * RtoD));
}
}

function calcCrit() {
var critical = document.getElementById('critical').value;
var nInc = document.getElementById("nInc").value;  //nInc is still the index of refraction, just written
if (critical == "") {                              //differently to avoid duplicates in light speed formula
	var ans = 1 / nInc;
	alert("Critical angle is " + Math.asin(ans) * RtoD);
}
else if (nInc == "") {
	var ans = 1 / (Math.sin(Math.PI * (critical/180)));
	alert("Index of refraction is " + ans);
}
}
</script>

</body>
</html>
