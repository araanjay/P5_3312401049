<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Laravel</title>
    
    <!-- LOCAL CSS -->
    <link rel="stylesheet" href="/styles/style_ara_bella.css">
    
    <!-- TAILWIND CDN -->
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
</head>
<body class="bg-gradient-to-br from-gray-100 to-blue-50 min-h-screen p-6 font-sans">

    <div class="max-w-5xl mx-auto">
        <!-- TITLE -->
        <h1 class="text-4xl font-extrabold text-red-600 mb-8 text-center">
            INI JUDUL MERAH DARI CSS
        </h1>

        <!-- TAILWIND BOX -->
        <div class="bg-blue-200 p-6 rounded-xl shadow-lg mb-8 text-lg text-blue-900">
            Ini pake Tailwind dan tampil lebih kece!
        </div>

        <!-- GAMBAR GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="/images/screenshot.png" alt="Gambar Screenshot" class="w-full h-auto object-cover">
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="/images/gambar1.jpg" alt="gambar1" class="w-full h-auto object-cover">
            </div>
        </div>
    </div>

</body>
</html>
