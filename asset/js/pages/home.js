const role = document.querySelectorAll(".role");
const roleIcons = ["file-alt", "inbox", "calendar"];
const table = document.querySelectorAll(".table");
const roleGroup = document.querySelector(".roleGroup");

function removeActive() {
  role.forEach(element => {
    element.querySelector(".nav-link").classList.remove("active");
  });
}

function populateUI(e) {
  if (!e.classList.contains("active")) {
    e.classList.add("active");

    
  }
}

role.forEach((val, i) => {
  const icon = val.querySelector("i");
  icon.classList = `fa fa-${roleIcons[i]}`;
});

roleGroup.addEventListener("click", e => {
  if (e.target.classList.contains("nav-link")) {
    removeActive();
    populateUI(e.target);
  }
});
