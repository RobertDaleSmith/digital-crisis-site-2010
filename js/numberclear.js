// Pulled from w3schools source.
// Checks value and blanks out the form if 
function searchfield_focus(obj)
{
obj.style.color=""
obj.style.fontStyle=""
if (obj.value=="Name")
	{
	obj.value=""
	}
if (obj.value=="Number")
	{
	obj.value=""
	}
}