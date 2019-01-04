// DROPDOWN FOR NAV
function dropdownHandler() {
  document.querySelector("#dropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches("#h-menu")) {
    var dropdowns = document.getElementsByClassName("mini-list");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

// DROPDOWN FOR PORTFOLIOS
function portDropdownHandler() {
  document
    .querySelector(".port-dropdown-content")
    .classList.toggle("show-port");
}

window.onclick = function(event) {
  if (!event.target.matches(".port-dropdown-btn")) {
    var portDropdowns = document.getElementsByClassName(
      "port-dropdown-content"
    );
    var i;
    for (i = 0; i < portDropdowns.length; i++) {
      var openPortDropdown = portDropdowns[i];
      if (openPortDropdown.classList.contains("show-port")) {
        openPortDropdown.classList.remove("show-port");
      }
    }
  }
};
