<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Edit Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-100 min-h-screen p-10 font-sans">

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
        <h1 class="text-3xl font-bold text-blue-600 mb-6">Edit Produk</h1>

        <form action="{{ route('produk.update', $produk->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-2 font-semibold">Nama Produk</label>
                <input type="text" name="nama" value="{{ $produk->nama }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" />
            </div>

            <div>
                <label class="block mb-2 font-semibold">Harga</label>
                <input type="number" name="harga" value="{{ $produk->harga }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" />
            </div>

            <div>
                <label class="block mb-2 font-semibold">Deskripsi</label>
                <textarea name="deskripsi" rows="4"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">{{ $produk->deskripsi }}</textarea>
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('produk.index') }}"
                   class="bg-gray-400 hover:bg-gray-500 text-white px-5 py-2 rounded-lg">Kembali</a>

                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg font-semibold">
                    Update
                </button>
            </div>
        </form>
    </div>

</body>
</html>
