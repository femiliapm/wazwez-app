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
            <li>Product Design</li>
            <li>Development</li>
            <li>Launching Wazwez Website</li>
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
</body>

</html>