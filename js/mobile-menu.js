//  open nav bar in mobile menue on click
$(document).ready(function () {
  $(".fa-bars").on("click", function () {
    $("header nav ul").toggleClass("open");
    $(".fa-bars").toggleClass("open");
    $(".fa-times").toggleClass("open");
  });
});

//  close nav bar in mobile menue on click
$(document).ready(function () {
  $(".fa-times").on("click", function () {
    $("header nav ul").toggleClass("open");
    $(".fa-bars").toggleClass("open");
    $(".fa-times").toggleClass("open");
  });
});

//  close nav bar in mobile menue when clicking an anchor
$(document).ready(function () {
  $("header nav ul").on("click", function () {
    $("header nav ul").toggleClass("open");
    $(".fa-bars").toggleClass("open");
    $(".fa-times").toggleClass("open");
  });
});

// ________________________________________________________________________________

// smooth controll to an anchor
$(document).ready(function () {
  $(document).on("click", 'a[href^="#"]', function (event) {
    event.preventDefault();

    $("html, body").animate(
      {
        scrollTop: $($.attr(this, "href")).offset().top,
      },
      1200
    );
  });
});

//  close success message on click
$(document).ready(function () {
  $(".fa-times-circle").on("click", function () {
    $(".success").fadeOut(600);
  });
});
