<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar - Matrix</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f5f5f5] font-sans">
  <!-- Navbar -->
  <nav class="bg-[#b4e176] text-black px-6 py-4 flex justify-between items-center">
    <div class="flex items-center space-x-3">
      <img src="/path-to-logo.png" alt="Logo" class="w-10 h-10">
      <span class="text-lg font-bold">MATRIX</span>
    </div>
    <ul class="flex space-x-6 font-medium">
      <li><a href="#" class="hover:text-gray-800">Home</a></li>
      <li><a href="#" class="hover:text-gray-800">Spesifikasi</a></li>
      <li><a href="#" class="hover:text-gray-800">Rekomendasi</a></li>
      <li><a href="#" class="hover:text-gray-800">Tentang</a></li>
    </ul>
    <div class="flex items-center space-x-4">
      <button><img src="/path-to-user-icon.png" alt="User" class="w-6 h-6"></button>
      <button><img src="/path-to-add-icon.png" alt="Add" class="w-6 h-6"></button>
    </div>
  </nav>

  <!-- Main Section -->
  <main class="flex justify-center items-center py-12 px-4">
    <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden">
      <!-- Form Section -->
      <div class="p-8 md:w-[500px]">
        <h2 class="text-center text-2xl font-bold mb-6">DAFTAR</h2>
        <form class="space-y-4">
          <input type="text" placeholder="Nama Lengkap" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#333]">
          <input type="text" placeholder="Username" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#333]">
          <input type="email" placeholder="Email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#333]">
          <div class="flex space-x-2">
            <input type="password" placeholder="Kata Sandi" class="w-1/2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#333]">
            <input type="password" placeholder="Konfirmasi Kata Sandi" class="w-1/2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#333]">
          </div>
          <input type="text" placeholder="No Telepon" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#333]">
          <button type="submit" class="w-full py-2 bg-[#b4e176] hover:bg-[#9fce5f] active:ring-2 active:ring-black text-black font-semibold rounded-lg shadow-md transition-all">DAFTAR</button>
        </form>
        <p class="text-center mt-4">Sudah punya akun? <a href="#" class="text-black font-semibold">Masuk</a></p>
      </div>

      <!-- Welcome Section -->
      <div class="bg-gradient-to-br from-[#b4e176] to-[#5a9224] md:w-[320px] flex flex-col justify-center items-center p-6 text-white">
        <img src="/path-to-logo.png" alt="Matrix Logo" class="w-16 mb-4">
        <h3 class="text-lg font-semibold mb-2">Selamat Datang di Matrix</h3>
        <p class="text-sm text-center">Warnet lebih praktis, internetan jadi asik</p>
      </div>
    </div>
  </main>

 <!-- Footer -->
 <footer class="bg-gray-200 mt-12">
    <div class="grid md:grid-cols-5 gap-8 p-8 text-sm">
      <div class="col-span-1">
        <img src="your-logo.png" alt="Logo" class="h-8 mb-2">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p class="mt-2">Matrix, 2025</p>
      </div>
      <div>
        <h4 class="font-bold mb-2">Jelajahi Kami</h4>
        <ul>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Kontak</a></li>
          <li><a href="#">Bantuan</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold mb-2">Pembayaran</h4>
        <img src="bri-logo.png" alt="BRI" class="h-5 mb-1">
        <img src="mastercard-logo.png" alt="Mastercard" class="h-5">
      </div>
      <div>
        <h4 class="font-bold mb-2">Ikuti Kami</h4>
        <ul>
          <li>Facebook</li>
          <li>Twitter</li>
          <li>Instagram</li>
          <li>Youtube</li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold mb-2">Mitra Kami</h4>
        <ul>
          <li>ASUS</li>
          <li>ACER</li>
          <li>LENOVO</li>
          <li>NVIDIA</li>
          <li>AMD</li>
          <li>INTEL</li>
          <li>POLIBATAM</li>
        </ul>
      </div>
    </div>
    <div class="text-center py-4 text-sm" style="background-color: #B9EC74; color: white;">&copy;2025 Matrix, All Rights Reserved</div>
  </footer>
</body>
</html>

<!-- Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>

