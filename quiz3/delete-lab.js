$(document).ready(function() {  
  $(".deleteLab").click(function() {

    // get the id of the clicked element's list item
    const labName = $(this).closest("li").find("a").text();
    
    if(confirm("Remove " + labName + "? (This action cannot be undone.)")) {
      
      // Extract the db id of the lab from the dom id of the clicked element
      const curId = $(this).closest("li").attr("id");
      const labId = curId.substr(curId.indexOf("-") + 1);
      
      $.ajax({
        type: "post",
        url: "/iit/quiz3/delete-lab.php",
        data: { "id" : labId },

        success: function() {
          $(curId).closest("li").remove();
          alert(labName + " deleted");
        },

        error: function(message) {
          alert(message);
        }
      });
    }

  });  
});
