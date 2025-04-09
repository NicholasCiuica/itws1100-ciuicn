$(document).ready(function() {  
  $(".deleteLab").click(function() {

    // get the id of the clicked element's list item
    const curId = $(this).closest("li").attr("id");
    const labName = $(this).closest("li").find("a").text();

    if(confirm("Remove " + labName + "? (This action cannot be undone.)")) {
      
      // Extract the db id of the lab from the dom id of the clicked element
      const labId = curId.substr(curId.indexOf("-") + 1);
      
      $.ajax({
        type: "post",
        url: "delete-lab.php",
        dataType: "json",
        data: { "id" : labId },

        success: function() {
          $("#lab-" + curId).closest("li").remove();
          alert(labName + " deleted");
        },

        error: function(msg) {
          alert(msg.status + " " + msg.statusText);
        }
      });
    }

  });  
});
