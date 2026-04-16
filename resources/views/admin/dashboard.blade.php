<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 font-sans p-6">

    <h1 class="text-3xl font-bold mb-6">Input Produk</h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md space-y-4">
        @csrf

        <input type="text" name="name" placeholder="Nama Produk" class="w-full border p-2 rounded">

        <input type="file" name="image">

        <textarea name="description" placeholder="Deskripsi" class="w-full border p-2 rounded"></textarea>

        <input type="number" name="price" placeholder="Harga" class="w-full border p-2 rounded">

        <select name="status" class="w-full border p-2 rounded">
            <option value="tersedia">Stok Tersedia</option>
            <option value="tidak tersedia">Stok Tidak Tersedia</option>
        </select>

        <label class="flex items-center gap-2">
            <input type="checkbox" name="popularity" value="1">
            Produk Popular
        </label>

        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Simpan Produk
        </button>
    </form>

</body>
</html>
