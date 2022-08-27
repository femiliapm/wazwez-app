// class, id: snake-case
// namaVariable, namaFungsi: camelCase
const btnCreate = document.getElementById("create-task");
// console.log(btnCreate);

// menambahkan event untuk menampilkan input create tugas
btnCreate.addEventListener("click", function () {
  const inputItem = document.getElementsByClassName("input-item")[0];
  // console.log(inputItem);
  inputItem.classList.remove("hidden");
});

// const itemEl = document.getElementsByClassName("item");
// console.log(itemEl[0]);

function validateInput() {
  // mengambil value dari input nama tugas
  const valInput = document.getElementById("input-task").value;
  // proses validasi
  if (valInput == "") {
    alert("Nama tugas belum diisi");
  }
}
