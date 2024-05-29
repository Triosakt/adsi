<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: logins.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventGear Alat Pesta</title>
    <link rel="stylesheet" href="output.css">
    <style>
        .content {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            background-color: #FFF3CD;
            padding: 20px;
        }
        .row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
        }
        .card {
            background-color: #730000;
            margin: 10px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.1);
            text-align: center;
            width: 200px;
        }
        .card img {
            width: 100%;
            border-radius: 8px;
        }
        .card h2 {
            color: white;
            background-color: #730000; 
            padding: 10px;
            border-radius: 8px;
            font-size: 20px;
        }

    </style>
</head>
<body class="bg-nav">
    <?php include "layout/header.php" ?>
    <div class="sidebar" id="sidebar">
      <a href="#">Profile</a>
      <a href="Setting.php">Setting</a>
      <a href="pemilik.php">Start Selling</a>
      <a href="logout.php">Log Out</a>
    </div>
    <div class="overlay" id="overlay"></div>

    <section class="bg-beige-200 container mx-auto my-20 py-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-white p-4 rounded-lg text-center">
                <img src="./asset/catering.png" alt="Paket Catering" class="rounded-lg w-full h-48 object-cover mb-2">
                <h2 class="text-custom-red font-semibold">Paket Catering</h2>
            </div>
            <div class="bg-white p-4 rounded-lg text-center">
                <img src="./asset/wedding.png" alt="Paket Wedding" class="rounded-lg w-full h-48 object-cover mb-2">
                <h2 class="text-custom-red font-semibold">Paket Wedding</h2>
            </div>
            <div class="bg-white p-4 rounded-lg text-center">
                <img src="./asset/engagement.png" alt="Paket Engagement" class="rounded-lg w-full h-48 object-cover mb-2">
                <h2 class="text-custom-red font-semibold">Paket Engagement</h2>
            </div>
            <div class="bg-white p-4 rounded-lg text-center">
                <img src="./asset/birthday.png" alt="Paket Birthday" class="rounded-lg w-full h-48 object-cover mb-2">
                <h2 class="text-custom-red font-semibold">Paket Birthday</h2>
            </div>
            <div class="bg-white p-4 rounded-lg text-center">
                <img src="./asset/aqiqah.png" alt="Paket Aqiqah" class="rounded-lg w-full h-48 object-cover mb-2">
                <h2 class="text-custom-red font-semibold">Paket Aqiqah</h2>
            </div>
            <div class="bg-white p-4 rounded-lg text-center">
                <img src="./asset/khitanan.png" alt="Paket Khitanan" class="rounded-lg w-full h-48 object-cover mb-2">
                <h2 class="text-custom-red font-semibold">Paket Khitanan</h2>
            </div>
        </div>
    </section>
    <?php include "layout/footer.php"; ?>
    <style>
      .sidebar {
      position: fixed;
      top: 30px;
      right: -250px; /* Awalnya tersembunyi di sebelah kanan */
      width: 200px;
      background-color: #6F0B0B;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      transition: right 0.3s ease;
      z-index: 1000; /* Pastikan sidebar berada di atas elemen lainnya */
      border-top-left-radius: 50px; /* Radius sudut kanan bagian atas */
      border-bottom-left-radius: 50px; /* Radius sudut kanan bagian bawah */
    }
    .sidebar a:last-child {
      margin-top: 100px; /* Dorong item terakhir ke bawah */
      margin-bottom: 10px; /* Hilangkan margin bawah untuk item terakhir */
    }


    .sidebar.active {
      right: 0; /* Tampilkan sidebar */
    }

    .sidebar a {
      display: block;
      width: 150px;
      height: 50px;
      padding: 15px;
      margin-top: 10px;
      margin-bottom: 0;
      background-color: #F5DEB3;
      color: #6f0b0b;
      text-align: center;
      text-decoration: none;
      border-radius: 20px;
      font-weight: bold;
    }
    .toggle-btn {
      top: 20px;
      right: 20px;
      cursor: pointer;
    }
    .overlay {
      display: none; /* Initially hidden */
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
      z-index: 999; /* Ensure overlay is above other elements but below sidebar */
    }
    .overlay.active {
      display: block; /* Show overlay when active */
    }
    body.body-lock-scroll {
      overflow: hidden; /* Lock scroll when sidebar is active */
    }
      .text-justify {
      text-align: justify;
    }

      .bg-beige-100 {
          background-color:#6F0B0B ;
      }
  </style>

    <script src="./../node_modules/preline/dist/preline.js"></script>
    <script>
      const toggleBtn = document.getElementById('toggle-btn');
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('overlay');
  
      toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('active');
        overlay.classList.toggle('active');
        document.body.classList.toggle('body-lock-scroll');
      });
  
      overlay.addEventListener('click', () => {
        sidebar.classList.remove('active');
        overlay.classList.remove('active');
        document.body.classList.remove('body-lock-scroll');
      });
    </script>

</body>
</html>
