<?php
class FormValidation {
/*
this class will hold a variety of general purpose methods that are used to validate form fields.
the methods will accept inputs as needed and will return true if the value(s) pass the validation and false otherwise.
*/

//properties
//constructor

public function _ _construct ()
//empty constructor with no defined process
}

//methods

public function validateRequiredsField(inputValue){
// This field must have somthing in it to pass


  if( trim($inputValue)=="" ||
  $inputValue=="undefined"  ||
  !strcasecmp ($inputValue,"null") ) {
    return "false";
  }
else {
  return true;
}
  } 
}

}
?>
