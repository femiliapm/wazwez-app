<!-- Connect to DB -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wazwez";
$port = 3300;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo ("Connection successfully");

// Get data tasks
// untuk mengambil data
$sqlGetTasks = "SELECT * FROM `tasks` WHERE user_id = 1;";
$resultTask = $conn->query($sqlGetTasks);

// result = [
//   {
//     id: 1,
//     name: "Belajar SQL",
//     description: "",
//     due_date: "2022-09-07 21:31:03",
//     user_id: 1,
//     status: "ONGOING"
//   },
//   {
//     id: 2,
//     name: "Belajar SQL",
//     description: "",
//     due_date: "2022-09-07 21:31:03",
//     user_id: 1,
//     status: "ONGOING"
//   },
// ]

// Insert Task
// buat object data yg isinya data yg mau diinputkan sebagai parameter fungsi
// data = {
//     id: 2,
//     name: "Belajar SQL",
//     desc: "",
//     date: "2022-09-07 21:31:03",
// }
function insertTask($data)
{
  $sqlInsertTask = "INSERT INTO tasks (id, name, description, due_date, user_id)
  VALUES ({$data['id']}, {$data['name']}, {$data['desc']}, {$data['date']}, 1)";

  if ($GLOBALS('conn')->query($sqlInsertTask) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sqlInsertTask . "<br>" . $GLOBALS('conn')->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/global.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title>Wazwez App</title>
</head>

<body>
  <!-- Header -->
  <header class="header">
    <div class="logo">lo<span class="color-orange">go</span></div>
    <nav class="navbar">navbar</nav>
  </header>

  <!-- Main -->
  <main class="main">
    <div class="card-main" style="background-color: lightblue;">
      <div class="title">
        <div>To Do List</div>
        <button id="create-task">Tambah tugas</button>
      </div>
      <div class="sort">
        ini untuk sort by
      </div>
      <div class="list">
        <div class="input-item hidden">
          <input type="text" placeholder="Masukkan nama tugas" id="input-task">
          <input type="text" placeholder="Deskripsi tugas (opsional)" id="input-desc">
          <input type="datetime-local" placeholder="Tanggal & Waktu" id="input-date">
          <button onclick="validateInput()">submit</button>
        </div>
        <div class="item">
          <ul>
            <?php
            foreach ($resultTask as $elementTask) {
              // foreach (array as elementTask)
              // "string " + variable + " tutup".
              // `string ${variable} tutup`
              echo ("<li>" . $elementTask["name"] . "</li>");
            }
            ?>
          </ul>
        </div>
        <!-- <div class="item">list item 2</div>
        <div class="item">list item 3</div>
        <div class="item">list item 4</div> -->
      </div>
    </div>
  </main>

  <!-- Custom Script -->
  <script src="./js/script.js"></script>
  <script type="text/javascript">
    function validateInput() {
      // mengambil value dari input nama tugas, desc, date
      const data = {
        id: 6,
        name: document.getElementById("input-task").value,
        desc: document.getElementById("input-desc").value,
        date: document.getElementById("input-date").value
      }

      const valInput = document.getElementById("input-task").value;
      // proses validasi
      // console.log("test")
      if (valInput == "") {
        // console.log("test 2")
        alert("Nama tugas belum diisi");
      } else {
        console.log(data)
        <?php insertTask($data) ?>
      }
    }
  </script>
  <!-- <script type="text/javascript" src="./php/connection.php"></script> -->
</body>

</html>