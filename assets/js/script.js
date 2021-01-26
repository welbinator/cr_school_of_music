jQuery(function () {
  jQuery(document).scroll(function () {
    var jQuerynav = jQuery(".navbar");
    jQuerynav.toggleClass(
      "scrolled",
      jQuery(this).scrollTop() > jQuerynav.height()
    );
  });
});

jQuery(function () {
  jQuery("#navcol-1").on("show.bs.collapse", function () {
    jQuery(".navbar").addClass("open");
  });
  jQuery("#navcol-1").on("hide.bs.collapse", function () {
    jQuery(".navbar").removeClass("open");
  });
});
