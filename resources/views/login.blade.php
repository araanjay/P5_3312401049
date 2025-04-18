<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Matrix</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <!-- Navbar -->
  <header class="bg-[#B9EC74] py-4 px-8 flex items-center justify-between shadow-md">
    <div class="flex items-center gap-3">
      <img src="logo.png" alt="Logo Matrix" class="w-10 h-10 object-contain" />
      <span class="text-lg font-bold">MATRIX</span>
    </div>
    <nav class="hidden md:flex gap-6 text-sm font-medium">
      <a href="#" class="hover:text-black">Home</a>
      <a href="#" class="hover:text-black">Spesifikasi</a>
      <a href="#" class="hover:text-black">Rekomendasi</a>
      <a href="#" class="hover:text-black">Tentang</a>
    </nav>
    <div class="flex items-center gap-4 text-xl">
      <button><i class="fas fa-user"></i></button>
      <button><i class="fas fa-cog"></i></button>
    </div>
  </header>

  <!-- Login Card -->
  <main class="flex justify-center items-center min-h-screen px-4">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl flex overflow-hidden">
      
      <!-- Form Login -->
      <div class="w-1/2 p-8">
        <h2 class="text-2xl font-semibold mb-6">MASUK</h2>
        <input type="text" placeholder="Masukkan username" class="w-full mb-4 px-4 py-2 border rounded-full text-sm" />
        <input type="password" placeholder="Masukkan password" class="w-full mb-4 px-4 py-2 border rounded-full text-sm" />
        <div class="flex items-center mb-4">
          <input type="checkbox" id="ingat" class="mr-2" />
          <label for="ingat" class="text-sm">Ingat saya</label>
        </div>
        <button class="w-full bg-[#B9EC74] hover:shadow-[0_4px_0_0_#000] text-black font-semibold py-2 rounded-full transition-all">
          MASUK
        </button>
        <p class="text-sm mt-4">Belum punya akun? <a href="#" class="font-semibold text-black">Daftar</a></p>
      </div>

      <!-- Welcome Panel -->
      <div class="w-1/2 bg-gradient-to-br from-[#B9EC74] to-[#8ECD4D] text-white flex flex-col justify-center items-center p-8">
        <img src="ilustrasi.png" alt="Welcome" class="w-16 h-16 mb-4 object-contain" />
        <h3 class="text-lg font-bold mb-2">Selamat Datang di Matrix</h3>
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

