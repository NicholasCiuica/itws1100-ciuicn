Question 5:
  The newly added li element does not have the click functionality that we had defined for li elements within the labList ul because the action that selected these li elements and added this click functionality was run before these new li elements were made using the add list item click action.

  I would fix this by using the .on() action to bind the li element's click functionality to the document. Whenever the document is clicked, if it's been clicked on one of the li elements within the labList li, it with trigger the li element's click functionality.

Notes from class:
  jQuery is a general library that simplifies interacting with the DOM

  It can be downloaded locally and then linked using a script tag just like any other js file, or it can be linked to using a CDN, a website that hosts these resources for free (using a url to the CDN)

  $ is shorthand for jQuery
  $(selector).action()

  If another js library also uses "$":

  var jq = jQuery.noConflict(); 
  
  define your own jQuery/$