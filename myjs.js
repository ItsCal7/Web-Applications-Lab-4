function popupOpen(x)
{
	document.getElementById('popup'+x).style.display='block';
	document.getElementById('fade').style.display='block';
}

function popupClose(x)
{
	document.getElementById('popup'+x).style.display='none';
	document.getElementById('fade').style.display='none';
}

function showMyCart()
{
	if (document.getElementById('cart').style.display=='block')
	{
		document.getElementById('cart').style.display='none';
	}
	else
	{
		document.getElementById('cart').style.display='block';
	}
}

function addToCart(x)
{
	document.getElementById("cartContent").innerHTML += x;
	document.getElementById("cartContent").innerHTML += "<br>";
}


