$(document).ready(function() {
  $.ajax({
    type: "GET",
    url: "lab08/labscontent.json",
    dataType: "json",
    success: function(responseData, status) {
      var pageDOM = '<p>' + responseData.text + '</p><ul>';
      //for each lab, make a link to that lab within the lab list
      $.each(responseData.labs, function(i, lab) {
        pageDOM += '<li><a href="' + lab.link + '">';
        pageDOM += lab.title + ' (' + lab.desc + ')';
        pageDOM += '</a></li>';
      });
      pageDOM += '</ul>';
      //#page-content is an empty div for the lab page's main content
      $("#page-content").html(pageDOM);
      
    }, error: function(msg) {
      alert("There was a problem: " + msg.status + " " + msg.statusText);
    }
  });
});