<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Produk Komputer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-sky-100 via-blue-100 to-blue-200 min-h-screen font-sans text-gray-800">

    <div class="max-w-7xl mx-auto p-8">
        <!-- Header -->
        <div class="mb-10 text-center">
            <h1 class="text-5xl font-bold text-blue-700 mb-2"> Produk Komputer Premium</h1>
            <p class="text-lg text-gray-600">Daftar produk dengan harga di atas 1 juta</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-xl p-6 mb-10 border-l-4 border-blue-600">
            <h2 class="text-2xl font-semibold text-blue-700 mb-6"> Tambah Produk Baru</h2>
            <form method="POST" action="{{ route('produk.simpan') }}" class="grid md:grid-cols-2 gap-6">
                @csrf
                <div>
                    <label class="block text-sm font-bold mb-2"> Nama Produk</label>
                    <input type="text" name="nama" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" />
                </div>
                <div>
                    <label class="block text-sm font-bold mb-2"> Harga (Rp)</label>
                    <input type="number" name="harga" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" />
                </div>
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg shadow-md transition duration-200">
                         Simpan Produk
                    </button>
                </div>
            </form>
        </div>

        <!-- Table Card -->
        <div class="bg-white rounded-2xl shadow-xl p-6 border-t-4 border-blue-500">
            <h2 class="text-2xl font-semibold text-blue-700 mb-6"> Daftar Produk</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto text-sm border border-gray-300">
                    <thead class="bg-blue-600 text-white">
    <tr>
        <th class="py-3 px-4 text-left">No</th>
        <th class="py-3 px-4 text-left">Nama Produk</th>
        <th class="py-3 px-4 text-left">Deskripsi</th>
        <th class="py-3 px-4 text-left">Harga</th>
        <th class="py-3 px-4 text-left">Tanggal Dibuat</th>
        <th class="py-3 px-4 text-left">Action</th> <!-- Tambahan -->
    </tr>
</thead>
<tbody class="divide-y divide-gray-200">
    @foreach ($nama as $index => $item)
    <tr class="hover:bg-blue-50 transition-all duration-150">
        <td class="py-3 px-4">{{ $index + 1 }}</td>
        <td class="py-3 px-4 font-medium text-blue-800">{{ $item }}</td>
        <td class="py-3 px-4">{{ $desc[$index] }}</td>
        <td class="py-3 px-4 text-blue-600 font-bold">Rp {{ number_format($harga[$index], 0, ',', '.') }}</td>
        <td class="py-3 px-4 text-gray-500">{{ $created[$index] }}</td>
        <td class="py-3 px-4 flex gap-2">
            <!-- Tombol Edit -->
            <a href="{{ route('produk.edit', $id[$index]) }}" 
               class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold px-3 py-1 rounded">
                Edit
            </a>

            <!-- Tombol Delete -->
            <form action="{{ route('produk.delete', $id[$index]) }}" method="POST"
                  onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="bg-red-500 hover:bg-red-600 text-white font-semibold px-3 py-1 rounded">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
