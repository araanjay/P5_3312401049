<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Monitoring Computer</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

  <!-- Sidebar -->
  <div class="flex min-h-screen">
    <aside class="w-20 md:w-24 bg-[#8F2D2D] flex flex-col items-center py-6">
      <img src="logo.png" class="w-10 mb-10" alt="Logo" />
      <nav class="flex flex-col space-y-6">
        <button class="text-white hover:text-lime-400">
          <svg class="w-6 h-6"><!-- icon 1 --></svg>
        </button>
        <button class="text-white hover:text-lime-400">
          <svg class="w-6 h-6"><!-- icon 2 --></svg>
        </button>
        <button class="bg-lime-400 p-2 rounded text-black">
          <svg class="w-6 h-6"><!-- icon aktif --></svg>
        </button>
      </nav>
      <div class="mt-auto mb-4">
        <img src="profile.png" class="w-10 h-10 rounded-full" alt="User" />
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <h1 class="text-3xl font-bold">
        <span class="text-lime-600">Monitoring</span> <span class="text-[#8F2D2D]">Computer</span>
      </h1>

      <div class="bg-white mt-6 p-6 rounded-xl shadow-md border-[5px] border-[#8F2D2D]">
        <div class="flex justify-between mb-6">
          <input type="text" placeholder="Search User" class="w-1/2 border rounded px-4 py-2 focus:outline-none bg-purple-50" />
          <button class="bg-purple-50 border rounded px-4 py-2 text-sm flex items-center">
            <span class="mr-2">+</span> Add User
          </button>
        </div>

        <table class="w-full text-left border-separate border-spacing-y-3">
          <thead>
            <tr class="text-gray-700 bg-gray-200">
              <th class="p-3">Nama</th>
              <th class="p-3">Ruangan</th>
              <th class="p-3">Status</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr class="bg-gray-100 rounded">
              <td class="p-3 flex items-center space-x-3">
                <img src="pc1.png" class="w-10 h-10 rounded" alt="Lenovo A" />
                <span>Lenovo A</span>
              </td>
              <td class="p-3">Private Room</td>
              <td class="p-3">
                <span class="bg-red-200 text-red-700 px-3 py-1 text-xs rounded-full">In Use</span>
              </td>
            </tr>

            <!-- Row 2 -->
            <tr class="bg-gray-100 rounded">
              <td class="p-3 flex items-center space-x-3">
                <img src="pc2.png" class="w-10 h-10 rounded" alt="Asus A" />
                <span>Asus A</span>
              </td>
              <td class="p-3">Public Room</td>
              <td class="p-3">
                <span class="bg-orange-200 text-orange-700 px-3 py-1 text-xs rounded-full">Maintenance</span>
              </td>
            </tr>

            <!-- Row 3 -->
            <tr class="bg-gray-100 rounded">
              <td class="p-3 flex items-center space-x-3">
                <img src="pc3.png" class="w-10 h-10 rounded" alt="Acer A" />
                <span>Acer A</span>
              </td>
              <td class="p-3">Private Room</td>
              <td class="p-3">
                <span class="bg-green-200 text-green-800 px-3 py-1 text-xs rounded-full">Available</span>
              </td>
            </tr>

            <!-- Row 4 -->
            <tr class="bg-gray-100 rounded">
              <td class="p-3 flex items-center space-x-3">
                <img src="pc4.png" class="w-10 h-10 rounded" alt="Lenovo B" />
                <span>Lenovo B</span>
              </td>
              <td class="p-3">Private Room</td>
              <td class="p-3">
                <span class="bg-gray-300 text-gray-700 px-3 py-1 text-xs rounded-full">Unavailable</span>
              </td>
            </tr>

            <!-- Row 5 -->
            <tr class="bg-gray-100 rounded">
              <td class="p-3 flex items-center space-x-3">
                <img src="pc5.png" class="w-10 h-10 rounded" alt="Asus A" />
                <span>Asus A</span>
              </td>
              <td class="p-3">Public Room</td>
              <td class="p-3">
                <span class="bg-green-200 text-green-800 px-3 py-1 text-xs rounded-full">Available</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>

</body>
</html>
