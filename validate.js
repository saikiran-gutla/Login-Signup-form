function validate(key)
{
//getting key code of pressed key
var keycode = (key.which) ? key.which : key.keyCode;
var phn = document.getElementById('valid');
//comparing pressed keycodes
if (phn.length>10)
{
document.getElementById("validate").innerHTML = "Paragraph changed.";
}
else
{
}

   