$(document).ready(function() {

  var $errorVarMail = $("#errorVarMail").val();
  var $errorVarText = $("#errorVarText").val();
  var $successVar = $("#successVar").val();
  var $width = $(window).width();


  if($errorVarMail != "") {
    $("#mailAlert").addClass("show");
  };

  if($errorVarText != "") {
    $("#textAlert").addClass("show");
  };

  if($successVar != "") {
    $(".success").addClass("show");
  };

  if($width <= 950) {
    if($errorVarMail !== "") {
      $("#br1").css('display', 'inline')
      $("#br2").css('display', 'inline')

    };
    if($errorVarText !== "") {
      $("#br3").css('display', 'inline')
      $("#br4").css('display', 'inline')
    };
  }

  if($width=1024 || $width=970 || $width=720 || $width=660 || $width=585) {
    $(window).resize(function(){location.reload();});
  };


});
