$(document).ready(function() {
  $.ajax({
    type: "GET",
    url: "lab08/labscontent.json",
    dataType: "json",
    success: function(responseData, status) {
      var pageDOM = '<p>' + responseData.text + '</p><ul>';
      $.each(responseData.labs, function(i, lab) {
        pageDOM += '<li><a href="' + lab.link + '">';
        pageDOM += lab.title + ' (' + lab.desc + ')';
        pageDOM += '</a></li>';
      });
      pageDOM += '</ul>';
      $("#page-content").html(pageDOM);
      
    }, error: function(msg) {
      alert("There was a problem: " + msg.status + " " + msg.statusText);
    }
  });
});