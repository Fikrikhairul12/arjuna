
    <header class="navbar-transparent w-full top-0 left-0">
    <div class="container">
    <div class="max-w-7xl mx-auto px-7 py-3 flex items-center justify-between gap-4">
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <img src="{{ asset('storage/image/main-logo.png') }}" alt="brand" class="w-20 h-13">
            {{-- <div class="w-9 h-9 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold">
                MB
            </div> --}}
            <span class="font-semibold text-lg text-gray-800">
                Keripik Tempe Arjuna
            </span>
            <!-- Location -->
            <div class="hidden md:flex items-center text-sm text-gray-600 mx-7">
                Lokasi:&nbsp;
                <span class="font-medium text-gray-800">Downtown, NYC</span>
            </div>
        </div>
        <div class="flex items-center justify-between">
            <nav id="nav-menu"
                class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-62.5 w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                <ul class="block lg:flex">
                    <li class="group">
                        <a href="/"
                            class="text-base text-dark py-2 mx-8 flex group-hover:text-blue-500">Beranda</a>
                    </li>
                    {{-- <li class="group">
                        <a href="#menu"
                            class="text-base text-dark py-2 mx-8 flex group-hover:text-blue-500">Produk</a>
                    </li> --}}
                    <li class="group">
                        <a href="/tentang"
                            class="text-base text-dark py-2 mx-8 flex group-hover:text-blue-500">Tentang Kami</a>
                    </li>
                    <li class="group">
                        <a href="/kontak"
                            class="text-base text-dark py-2 mx-8 flex group-hover:text-blue-500">Kontak</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Actions -->
        <div class="flex items-center gap-4">
            <a href="#" class="flex items-center gap-1 text-gray-700 hover:text-blue-500 text-sm px-1">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7h13L17 13M7 13h10" />
                </svg> --}}
                <i class="fas fa-shopping-cart fill-current" style="font-size: 25px"></i>
            </a>
            <!-- HAMBURGER -->
            <button id="hamburger" class="relative w-8 h-8 flex flex-col justify-center items-center gap-1">
                <span class="hamburger-line transition-all duration-300"></span>
                <span class="hamburger-line transition-all duration-300"></span>
                <span class="hamburger-line transition-all duration-300"></span>
            </button>

            <!-- DROPDOWN -->
            <div id="dropdownMenu"
                class="hidden absolute right-6 top-16 w-48 bg-white rounded-lg shadow-lg py-3 transition-all duration-300">

                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Riwayat Pesanan</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Setting</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-red-500">Logout</a>
            </div>
        </div>
    </div>
    </div>
    </header>


