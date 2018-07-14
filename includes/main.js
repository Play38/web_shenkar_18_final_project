function openNav() {
    document.getElementById("mySidenav").style.width = "33%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

$(function() {
  $("#gets").submit(function() {
    var pickup = $("#pickup").val();
    var dest = $("#dest").val();
    var weight = $("#weight").val();
    var breakable = $("#breakable").val();
    var amount = $("#amount").val();
    var time = $("#time").val();
    var dataString = 'pickup=' + pickup + 'dest=' + dest + 'weight=' + weight + 'breakable=' + breakable + 'amount=' + amount + 'time=' + time;
    /*
    //console.log(dataString);
    $("#loader").show();
    $("#loader").fadeIn(300).html('<span class="loading">Loading..</span>');
*/
    $.ajax({
      type: "GET",
      url: "server/action.php",
      data: dataString,
      cache: true,
      success: function(html){
        $("#loader").after(html);
        $("#loader").hide();
        console.log(html)
      }  
    });
    return false;
  });
});