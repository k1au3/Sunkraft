

const dropdownButton = document.querySelector(".dropdown-button");
const dropdownContent = document.querySelector(".dropdown-content");

dropdownButton.addEventListener("click", function() {
  dropdownContent.classList.toggle("show");
});

window.onclick = function(event) {
  if (!event.target.matches('.dropdown-button')) {
    if (dropdownContent.classList.contains('show')) {
      dropdownContent.classList.remove('show');
    }
  }
}


