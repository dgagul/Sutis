$(document).ready(function() {

  var $errorVarMail = $("#errorVarMail").val();
  var $errorVarText = $("#errorVarText").val();
  var $successVar = $("#successVar").val();
  var $width = $(window).width();


  if($errorVarMail != "") {
    $("#mailAlert").addClass("show");
    $("#br1").css('display', 'inline')
    $("#br2").css('display', 'inline')
  };

  if($errorVarText != "") {
    $("#textAlert").addClass("show");
    $("#br3").css('display', 'inline')
    $("#br4").css('display', 'inline')
  };

  if($successVar != "") {
    $(".success").addClass("show");
  };

});
