function validateForm() 
{
	var list = document.forms["mySearch"]["list-types"];               
    var offer = document.forms["mySearch"]["offer-types"];    
    var city = document.forms["mySearch"]["select-city"];  
    if (list.value == "")                                  
    { 
       // window.alert("Please select options."); 
        //list.focus(); 
        return false; 
    } 
   
  if (offer.value == "")                               
    { 
       // window.alert("Please select options."); 
        offer.focus(); 
        return false; 
    } 
       
 if (city.value == "")                                   
    { 
       // window.alert("Please select options."); 
        city.focus(); 
        return false; 
    } 
	 return true; 
    }