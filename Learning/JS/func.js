function test()
{
 alert("Test Call Function");
}

function getData(fname,id,opt,param)
{
 var x = new XMLHttpRequest();
 var file_name ;
  x.onreadystatechange = function() 
  {
    document.getElementById(id).innerHTML = this.responseText;
  };
  
  file_name = fname + "?pil=" + opt + "&x=" + param ;
  x.open("GET", file_name , true);
  x.send();

}

function wilayah() 
{
  var x = new XMLHttpRequest();
  x.onreadystatechange = function() 
  {
    document.getElementById("wil").innerHTML = this.responseText;
  };
  x.open("GET", "data_all.php?pil=1" , true);
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
  x.open("GET", "data_all.php?pil=2&x=" + wl , true);
  x.send();
}