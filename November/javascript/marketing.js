function getData(fname, id, opt, param)
{
var x = new XMLHttpRequest();
var file_name;
x.onreadystatechange = function()
{
document.getElementById(id).innerHTML = this.responseText;
};
file_name = fname +"?nov=" + opt + "&x=" + param ;
x.open("GET", file_name , true);
x.send();
}


