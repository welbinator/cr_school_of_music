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

const widgetButtons = document.querySelectorAll(".fons-book");

function openWidget() {
  const width = 800;
  const height = 600;
  const left = screen.width / 2 - width / 2;
  const top = screen.height / 2 - height / 2;

  window.open(
    `https://fons.app/@cedarrhapsody/book`,
    "",
    `toolbar=no, width=${width}, height=${height}, top=${top}, left=${left}`
  );
}
widgetButtons.forEach((button) => {
  button.addEventListener("click", openWidget);
});
