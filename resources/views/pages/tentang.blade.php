@extends('layouts.app')

@section('content')
    <section class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-6">

            <!-- HEADER -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">
                    Tentang Kami
                </h1>

                <div class="w-16 h-1 bg-blue-500 mx-auto rounded"></div>

                <p class="text-gray-500 max-w-2xl mx-auto mt-6">
                    Keripik Tempe Arjuna merupakan UMKM yang menghadirkan camilan khas Indonesia
                    dengan cita rasa autentik dan kualitas terbaik.
                </p>
            </div>

            <!-- CONTENT -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <!-- IMAGE -->
                <div>
                    <img src="{{ asset('storage/image/stiker-logo.png') }}" class="rounded-2xl shadow-md">
                </div>

                <!-- TEXT -->
                <div class="space-y-8">

                    <!-- VISI -->
                    <div class="p-6 bg-slate-50 rounded-xl shadow-sm">
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">
                            Visi
                        </h2>
                        <p class="text-gray-500">
                            Menjadi produk keripik tempe unggulan yang dikenal luas
                            dengan kualitas terbaik dan rasa yang konsisten.
                        </p>
                    </div>

                    <!-- MISI -->
                    <div class="p-6 bg-slate-50 rounded-xl shadow-sm">
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">
                            Misi
                        </h2>
                        <ul class="text-gray-500 space-y-1">
                            <li>• Menggunakan bahan berkualitas</li>
                            <li>• Menjaga cita rasa khas</li>
                            <li>• Memberikan pelayanan terbaik</li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
