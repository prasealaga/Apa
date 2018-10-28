function test()
{
	alert("Test Call Function");
}


function wilayah()


{
//	alert("adi");
	
var x = new XMLHttpRequest();
x.onreadystatechange = function ()
{
document.getElementById("wil").innerHTML = this.responseText;
};
x.open("GET", "data_all.php?nov=1", true);
x.send();
}


function getCity()
{

var wl = document.getElementById("wil").value;
var x = new XMLHttpRequest();
x.onreadystatechange = function()
{
document.getElementById("city").innerHTML = this.responseText;
};
x.open("GET","data_all.php?nov=2&x=" + wl , true);
x.send();
}