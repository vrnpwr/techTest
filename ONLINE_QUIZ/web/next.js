function ap(vals)
{
alert (vals);	
var obj;
var url="ajax.php?x="+vals;

if(window.XMLHttpRequest)
	{
	obj=new XMLHttpRequest();
	}
	else
	{
		obj= new ActiveXObject("Microsoft.XMLHTTP");
	}
	obj.open("GET",url,true);
	obj.send();
	obj.onreadystatechange=function()
	{
		if(obj.readyState == 4 && obj.status==200)
		{
			var res=obj.responseText;
			alert(res);
			document.getElementById("app").value=res[0];
			
		}
	}
}


function di(vals)
{
//alert (vals);	
var obj;
var url="ajax2.php?y="+vals;
//alert (url);
if(window.XMLHttpRequest)
	{
	obj=new XMLHttpRequest();
	}
	else
	{
		obj= new ActiveXObject("Microsoft.XMLHTTP");
	}
	obj.open("GET",url,true);
	obj.send();
	obj.onreadystatechange=function()
	{
		if(obj.readyState == 4 && obj.status==200)
		{
			var res=obj.responseText;
			//alert(res);
			document.getElementById("dpp").value=res[0];
			
		}
	}
}