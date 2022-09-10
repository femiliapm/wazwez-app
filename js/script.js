// class, id: snake-case
// namaVariable, namaFungsi: camelCase
const btnCreate = document.getElementById("create-task");
// console.log(btnCreate);

// menambahkan event untuk menampilkan input create tugas
btnCreate.addEventListener("click", function () {
  const inputItem = document.getElementsByClassName("input-item")[0];
  // console.log(inputItem);

  // validate if input is open, when click again input is hidden
  if (inputItem.className.includes("hidden")) {
    inputItem.classList.remove("hidden");
  } else {
    inputItem.classList.add("hidden");
  }
});

// const itemEl = document.getElementsByClassName("item");
// console.log(itemEl[0]);
