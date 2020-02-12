const role = document.querySelectorAll(".role");
const roleIcons = ["file-alt", "inbox", "calendar"];
const table = document.querySelectorAll(".table");
const roleGroup = document.querySelector(".roleGroup");
const container = document.querySelector(".container");

role.forEach((val, i) => {
  const icon = val.querySelector("i");
  icon.classList = `fa fa-${roleIcons[i]}`;
});

//? functions
function removeActive() {
  role.forEach(element => {
    element.querySelector(".nav-link").classList.remove("active");
  });
}

function getActive(e) {
  if (!e.classList.contains("active")) {
    e.classList.add("active");
    const roleId = e.getAttribute("value");
    if (roleId) {
      getAccess(roleId);
    }
  }
}

function getAccess(role) {
  $.ajax({
    type: "post",
    url: `${base_url}home/get_akses`,
    data: {
      role: role
    },
    dataType: "json",
    success: function(response) {
      updateUI(response);
    }
  });
}

function deleteChecked() {
  const input = document.querySelectorAll("input");
  input.forEach(i => {
    if (i.type == "checkbox") {
      i.checked = false;
    }
  });
}

function updateUI(data) {
  if (data) {
    const getCrud = ["create", "read", "update", "delete"];
    data.forEach(d => {
      getCrud.forEach(col => {
        let crud = document.getElementById(col + d.module_id);

        if (col == "create") {
          if (d.a_create == 1) {
            crud.checked = true;
          }
        } else if (col == "read") {
          if (d.a_read == 1) {
            crud.checked = true;
          }
        } else if (col == "update") {
          if (d.a_update == 1) {
            crud.checked = true;
          }
        } else {
          if (d.a_delete == 1) {
            crud.checked = true;
          }
        }
      });

      if (
        d.a_create == 1 &&
        d.a_update == 1 &&
        d.a_read == 1 &&
        d.a_delete == 1
      ) {
        const checkAll = document.getElementById(`checkAll${d.module_id}`);
        checkAll.checked = true;
      }
    });
  }
}

// ! update to database
function updatePerModule(module, value) {
  const activeRole = roleGroup.querySelector(".active").getAttribute("value");
  if (activeRole) {
    $.ajax({
      type: "post",
      url: `${base_url}home/updatePerModule`,
      data: {
        role: activeRole,
        module: module,
        value: value
      },
      dataType: "json",
      success: function(response) {
        console.log(response);
      }
    });
  }
}

//? event listener
roleGroup.addEventListener("click", e => {
  if (e.target.classList.contains("nav-link")) {
    removeActive();
    deleteChecked();
    getActive(e.target);
  }
});

container.addEventListener("click", e => {
  if (e.target.classList.contains("checkAll")) {
    const module_id = e.target.getAttribute("data-check");
    if (e.target.checked) {
      updatePerModule(module_id, 1);
    } else {
      updatePerModule(module_id, 0);
    }
  }
});
//? end
