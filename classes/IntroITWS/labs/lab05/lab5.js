/* Lab 5 JavaScript File 
   Place variables and functions in this file */

//focusing in on first form element on first load of page
document.querySelector(".formData > .value:first-of-type > *").focus();

const defaultComment = "Please enter your comments";

function validate(formObj) {
   // put your validation code here
   // it will be a series of if statements
   let validationAlert = "";
   //form is validated backwards so that first empty field is focused
   if (formObj.comments.value == "" || formObj.comments.value == defaultComment) {
      validationAlert = "You must enter a comment\n" + validationAlert;
      formObj.comments.focus();
   }
   if (formObj.pseudonym.value == "") {
      validationAlert = "You must enter a nickname\n" + validationAlert;
      formObj.pseudonym.focus();
   }   
   if (formObj.org.value == "") {
      validationAlert = "You must enter an organization\n" + validationAlert;
      formObj.org.focus();
   }   
   if (formObj.title.value == "") {
      validationAlert = "You must enter a title\n" + validationAlert;
      formObj.title.focus();
   }   
   if (formObj.lastName.value == "") {
      validationAlert = "You must enter a last name\n" + validationAlert;
      formObj.lastName.focus();
   }   
   if (formObj.firstName.value == "") {
      validationAlert = "You must enter a first name\n" + validationAlert;      
      formObj.firstName.focus();
   }
   if(validationAlert != "") {
      alert(validationAlert);
      return false;
   }
   alert("Successfully submitted" + formObj.comments.value);
   return true;
}

//onfocusin and onfocusout functions for comment textarea
function clearDefault(commentObj) {
   if(commentObj.value == defaultComment) {
      commentObj.value = "";
   }
}
function addDefault(commentObj) {
   if(commentObj.value == "") {
      commentObj.value = defaultComment;
   }
}

//displays the full name and the current nickname based on info currently within the form
function displayName(formObj) {
   let validationAlert = "";
   if (formObj.pseudonym.value == "") {
      validationAlert = "You must enter a nickname\n" + validationAlert;
      formObj.pseudonym.focus();
   }   
   if (formObj.lastName.value == "") {
      validationAlert = "You must enter a last name\n" + validationAlert;
      formObj.lastName.focus();
   }   
   if (formObj.firstName.value == "") {
      validationAlert = "You must enter a first name\n" + validationAlert;      
      formObj.firstName.focus();
   }
   if(validationAlert != "") {
      alert(validationAlert);
      return false;
   }
   alert(formObj.firstName.value + " " + formObj.lastName.value + " is " + formObj.pseudonym.value);
   return true;
}