@extends('layouts.app')

@section('content')
    <section id="home" class="w-full bg-linear-to-r from-blue-400 via-blue-500 to-blue-700 py-20">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-5">
                Keripik Tempe Arjuna
            </h1>
            <p class="text-base md:text-lg max-w-2xl mx-auto mb-8 text-blue-50">
                Nikmati keripik tempe renyah dengan rasa terbaik, cocok untuk camilan keluarga
                dan oleh-oleh khas yang lezat.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#menu"
                    class="bg-white text-blue-700 font-semibold px-6 py-3 rounded-xl shadow-md hover:bg-blue-50 transition">
                    Lihat Produk
                </a>
                <a href="#contact"
                    class="bg-blue-900/30 border border-white/30 text-white font-semibold px-6 py-3 rounded-xl hover:bg-blue-900/50 transition">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    <section id="menu" class="bg-slate-50 py-16">
        <div class="max-w-7xl mx-auto px-6">

            <div class="mb-10">
                <h2 class="text-3xl font-bold text-slate-800">Menu Produk</h2>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

                @forelse ($products as $item)
                    <div
                        class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition">

                        <!-- IMAGE -->
                        <div class="relative">
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-52 object-cover">
                            @else
                                <div class="w-full h-52 flex items-center justify-center bg-gray-200">
                                    No Image
                                </div>
                            @endif

                            @if ($item->popularity)
                                <span class="absolute top-3 left-3 bg-orange-500 text-white text-xs px-2 py-1 rounded">
                                    Popular
                                </span>
                            @endif
                        </div>

                        <!-- CONTENT -->
                        <div class="p-4">

                            <h3 class="text-lg font-bold text-slate-800 mb-1">
                                {{ $item->name }}
                            </h3>

                            <p class="text-sm text-slate-500 mb-3">
                                {{ \Illuminate\Support\Str::limit($item->description, 50) }}
                            </p>

                            <div class="flex justify-between items-center mb-3">
                                <span class="text-slate-600 text-sm">
                                    {{ $item->status }}
                                </span>

                                <span class="text-orange-500 font-bold">
                                    Rp{{ number_format($item->price) }}
                                </span>
                            </div>

                            <button onclick="openModal({{ $item->id_product }})"
                                class="w-full bg-blue-500 text-white py-2 rounded">
                                Detail
                            </button>

                        </div>

                    </div>

                @empty
                    <p>Tidak ada produk</p>
                @endforelse

            </div>
        </div>
    </section>

    <!-- MODAL -->
    <div id="productModal" class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden items-center justify-center z-[9999]">

        <div class="bg-white rounded-2xl w-[90%] max-w-lg p-6 relative shadow-xl animate-fadeIn">

            <!-- CLOSE -->
            <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 text-xl">
                ✕
            </button>

            <!-- IMAGE -->
            <img id="modalImage" class="w-full h-56 object-cover rounded-xl mb-5">

            <!-- TITLE -->
            <h2 id="modalName" class="text-2xl font-bold text-gray-800 mb-2"></h2>

            <!-- DESC -->
            <p id="modalDesc" class="text-gray-500 mb-4 text-sm"></p>

            <!-- PRICE + STATUS -->
            <div class="flex justify-between items-center mb-6">
                <span id="modalPrice" class="text-blue-500 text-lg font-semibold"></span>
                <span id="modalStatus" class="text-xs text-gray-500"></span>
            </div>

            <!-- QTY -->
            <div class="flex items-center justify-between mb-6">

                <span class="text-gray-600 text-sm">Jumlah</span>

                <div class="flex items-center gap-3">

                    <button onclick="decreaseQty()" class="w-8 h-8 rounded bg-gray-200 hover:bg-gray-300">
                        -
                    </button>

                    <span id="qty" class="w-6 text-center">1</span>

                    <button onclick="increaseQty()" class="w-8 h-8 rounded bg-gray-200 hover:bg-gray-300">
                        +
                    </button>

                </div>
            </div>

            <!-- BUTTON -->
            <button class="w-full bg-blue-500 text-white py-3 rounded-xl hover:bg-blue-600 transition">
                Tambahkan ke Keranjang
            </button>

        </div>
    </div>
    <script>
        const products = @json($products);
    </script>
@endsection
