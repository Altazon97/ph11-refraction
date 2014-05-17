<html>
<body>
<title>Pyroh Refraction</title>
<font face = "Verdana" size = "10">Refraction</font>
<br><br><br><font size = "5">What formula do you need?</font>

<br><br>

<button type="button" onclick="showTextBox('n');showTextBox('vMedium');displayFormula('Light Speed')">Light Speed</button>
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
</script>

<form>
<input type="text" id="n" value="Index of Refraction" style="display:none">
<input type="text" id="vMedium" value="Velocity of Light in Medium" style="display:none">

<input type="text" id="nI" value="Initial Index of Refraction" style="display:none">
<input type="text" id="nR" value="Final Index of Refraction" style="display:none">
<input type="text" id="sinI" value="Angle of Incidence" style="display:none">
<input type="text" id="sinR" value="Angle of Refraction" style="display:none">

<input type="text" id="critical" value="Critical Angle" style="display:none">
<input type="text" id="nInc" value="Index of Refraction" style="display:none">
</form>




</body>
</html>
