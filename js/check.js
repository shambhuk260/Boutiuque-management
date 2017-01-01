	/* scripts for various validations */
	  
	function validate()
	{
	if(document.getElementById('email').value === "" || document.getElementById('password').value === "" )
	{
		document.getElementById('msg').innerHTML="User Name / Password can't be blank!";
		return false;
	}
	else
	{
		return true;
	}
	}


	function checkdate()
	{
		
		if(document.getElementById('start') === "" || document.getElementById('end') === "")
		{		
			document.getElementById('msg1').innerHTML="Check in & Check out dates are mandatory!";	
			return false;
		}
		else
		{
			return true;
		}
	}
	
	
	function Dc()
	{
		var d1 = new Date();
		var d2 = new Date();
		datefirst = d1.split('-');
		datesecond = d2.split('-');
		var value = new Date(datefirst[2],datefirst[1],datefirst[0]);
		var current = new Date(datesecond[2],datesecond[1],datesecond[0]);
		
		if(d2<=d1)
		{
			alert("wrong!");
		}
		else
		{
			alert("okk");
		}
	}