<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk Komputer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="max-w-6xl mx-auto mt-10 p-6 bg-white rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-center mb-6 text-blue-700">Daftar Produk Komputer (Harga > 1 Juta)</h1>

        <table class="w-full border border-gray-300 text-sm">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">Nama Produk</th>
                    <th class="py-2 px-4 border-b">Deskripsi</th>
                    <th class="py-2 px-4 border-b">Harga</th>
                    <th class="py-2 px-4 border-b">Tanggal Dibuat</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($nama as $index => $item)
                <tr class="hover:bg-blue-50">
                    <td class="py-2 px-4 border-b">{{ $index + 1 }}</td>
                    <td class="py-2 px-4 border-b">{{ $item }}</td>
                    <td class="py-2 px-4 border-b">{{ $desc[$index] }}</td>
                    <td class="py-2 px-4 border-b">Rp {{ number_format($harga[$index], 0, ',', '.') }}</td>
                    <td class="py-2 px-4 border-b">{{ $created[$index] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
