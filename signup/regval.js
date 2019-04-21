function check()                                    
{ 
    var name = document.forms["Reg"]["your_name"];               
    var email = document.forms["Reg"]["email"];      
    var password = document.forms["Reg"]["password"];  
    var address = document.forms["Reg"]["Address"];  
   
	// All blank checking
	for(i=0;i<Reg.length;i++)
	{
		if(Reg[i].type=="text")
		{
			if(Reg[i].value=="")
			{	window.alert("Please enter the missing field"); 
				Reg[i].focus();
				return false;
			}
			
		}
	}
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (phone.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        phone.focus(); 
        return false; 
    } 
   
    if (password.value == "")                        
    { 
        window.alert("Please enter your password"); 
        password.focus(); 
        return flase; 
    } 
   
    if (what.selectedIndex < 1)                  
    { 
        alert("Please enter your course."); 
        what.focus(); 
        return false; 
    } 
   
    return true; 
}</script>