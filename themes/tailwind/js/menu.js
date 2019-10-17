(function() {
  initNavigation();
})();

function initNavigation() {
  var menuToggle = document.getElementById("menu-toggle");
  var navigation = document.getElementById("navigation");

  menuToggle.addEventListener("click", function(e) {
    if (!navigation.classList.contains("hidden")) {
      navigation.classList.add("hidden");
    } else {
      navigation.classList.remove("hidden");
    }
  });
}
