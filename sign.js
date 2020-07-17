function validateForm() {
        if( document.myForm.uname.value == "" ) {
           document.getElementById('unameError').innerHTML="*Please enter a name";
            return false;
         }
         if( document.myForm.email.value == "" ) {
		 document.getElementById('emailError').innerHTML="*Please enter email";
                        return false;
         }
		  if(!validateEmail(document.myForm.email.value)) {
		 document.getElementById('emailError').innerHTML="*Please enter valid email";
                        return false;
         }
		  if( document.myForm.psw.value == "" ) {
           document.getElementById('pswError').innerHTML="*Please enter password";
            return false;
         }
		  if( document.myForm.psw.value.length<6) {
           document.getElementById('pswError').innerHTML="*Your password less than 6 digits";
            return false;
         }
		  if( document.myForm.cpsw.value == "" ) {
           document.getElementById('cpswError').innerHTML="*Please enter confirm password";
            return false;
         }
		 if(document.myForm.psw.value != document.myForm.cpsw.value) {
           document.getElementById('cpswError').innerHTML="*Confirm password did not matched with above password";
            return false;
         }
		 
		 
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
}
