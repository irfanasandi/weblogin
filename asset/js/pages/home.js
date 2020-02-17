const role = document.querySelectorAll(".role");
const roleIcons = ["file-alt", "inbox", "calendar"];
const table = document.querySelectorAll(".table");
const roleGroup = document.querySelector(".roleGroup");
const container = document.querySelector(".container");
const appBox = document.querySelectorAll(".app-box");

firstRole();

role.forEach((val, i) => {
  const icon = val.querySelector("i");
  icon.classList = `fa fa-${roleIcons[i]}`;
});

// * hidden check per app
appBox.forEach(app => (app.style.visibility = "hidden"));

function firstRole() {
  const firstRole = role[0].firstElementChild;
  getActive(firstRole);
}

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

function updateCheckAll(e) {
  const td = e.parentElement.parentElement;
  const crud = td.querySelectorAll(".crud");
  const all = td.parentElement.querySelector(".checkAll");

  const unCheckArr = [...crud].filter(cek => !cek.checked);
  if (unCheckArr.length > 0) {
    all.checked = false;
  } else {
    all.checked = true;
  }
}

// ! update to database
function updatePerModule(module, value, app_id) {
  const activeRole = roleGroup.querySelector(".active");
  if (activeRole) {
    $.ajax({
      type: "post",
      url: `${base_url}home/updatePerModule`,
      data: {
        role: activeRole.getAttribute("value"),
        module: module,
        value: value,
        app_id: app_id
      },
      dataType: "json"
    });
  }
}

function singleUpdate(module_id, app_id, crud, checked) {
  const activeRole = roleGroup.querySelector(".active");

  if (activeRole) {
    $.ajax({
      type: "post",
      url: `${base_url}home/singleUpdate`,
      data: {
        module_id: module_id,
        app_id: app_id,
        crud: crud,
        role_id: activeRole.getAttribute("value"),
        checked: +checked
      },
      dataType: "dataType",
      success: function(response) {
        console.log(response);
      }
    });
  }
}

function allAccess(row, checked) {
  const tr = row.target.parentElement.parentElement.parentElement;

  const check = tr.querySelectorAll("input");
  check.forEach(e => (e.checked = checked));
}

//? event listener
roleGroup.addEventListener("click", e => {
  e.preventDefault();
  if (e.target.classList.contains("nav-link")) {
    removeActive();
    deleteChecked();
    getActive(e.target);
  }
});

container.addEventListener("click", function(e) {
  if (e.target.classList.contains("checkAll")) {
    const module_id = e.target.getAttribute("data-module");
    const app_id = e.target.getAttribute("data-app");
    if (e.target.checked) {
      updatePerModule(module_id, 1, app_id);
      allAccess(e, true);
    } else {
      updatePerModule(module_id, 0, app_id);
      allAccess(e, false);
    }
  }

  if (e.target.classList.contains("crud")) {
    const row = e.target.parentElement.parentElement;
    const module_id = row.getAttribute("data-module");
    const app_id = row.getAttribute("data-app");
    const crud = e.target.getAttribute("data-crud");

    singleUpdate(module_id, app_id, crud, e.target.checked);
    updateCheckAll(e.target);
  }
});

//? end event listener
