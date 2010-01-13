//  Developed by Roshan Bhattarai 
//  Visit http://roshanbh.com.np for this script and more.
//  This notice MUST stay intact for legal use

$(document).ready(function(){

//called when key is pressed in textbox
$("#callmeTextBox").keypress(function (e)  
{ 
// if the key pressed is the enter key
if (e.which == 13)
{
		callmeForm.form.submit();
        return false;
}
//if the letter is not digit then display error and don't type anything
if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
{
//display error message
$("#errmsg").html("Please enter a 10 digit number only!").show().fadeIn("slow"); 
setTimeout('$("#errmsg").show().fadeOut("slow")', 2000)
return false;
}	
});

}); 