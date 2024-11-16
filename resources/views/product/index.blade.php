<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                      <center> {{ __(' produk website') }}</center> 
                    </h1>

                  
                </div>
            </div>
        </div>
    </div>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            
            <!-- Container untuk produk dengan flex dan spacing yang tepat -->
            <div class="flex justify-center space-x-8">
                
                <!-- Produk 1 -->
                <div class="w-1/3 bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative group">
                        <img src="{{ asset('build/assets/images/toko_online.png') }}" alt="Engagement" class="w-full h-60 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-lg font-bold text-white">Engagement</h3>
                            <a href="#" class="px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-100 mt-2">Lihat fotonya</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-700">Toko Online Pilihan untuk Semua Kebutuhan Anda....</p>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="w-1/3 bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative group">
                        <img src="{{ asset('build/assets/images/desain_web.png') }}" alt="Prewedding" class="w-full h-60 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-lg font-bold text-white">Prewedding</h3>
                            <a href="#" class="px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-100 mt-2">Lihat fotonya</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-700">Kumpulan Contoh Desain Website Untuk Inspirasi ....</p>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="w-1/3 bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative group">
                        <img src="{{ asset('build/assets/images/copi.png') }}" alt="Wedding" class="w-full h-60 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-lg font-bold text-white">Wedding</h3>
                            <a href="#" class="px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-100 mt-2">Lihat fotonya</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-700">Nikmati Keajaiban Kopi di Setiap Cangkir....</p>
                    </div>
                </div>

            </div>
            <br>
            <br>
            <br>
            <div class="flex justify-center space-x-8">
                
                <!-- Produk 1 -->
                <div class="w-1/3 bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative group">
                        <img src="{{ asset('build/assets/images/dasbord.png') }}" alt="Engagement" class="w-full h-60 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-lg font-bold text-white">Engagement</h3>
                            <a href="#" class="px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-100 mt-2">Lihat fotonya</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-700">Halaman ini berisi tentang beberapa contoh hasil foto engagement....</p>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="w-1/3 bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative group">
                        <img src="{{ asset('build/assets/images/restoran.png') }}" alt="Prewedding" class="w-full h-60 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-lg font-bold text-white">Prewedding</h3>
                            <a href="#" class="px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-100 mt-2">Lihat fotonya</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-700">Halaman ini berisi tentang beberapa contoh hasil foto prewedding....</p>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="w-1/3 bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative group">
                        <img src="{{ asset('build/assets/images/toko_online.png') }}" alt="Wedding" class="w-full h-60 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-lg font-bold text-white">Wedding</h3>
                            <a href="#" class="px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-100 mt-2">Lihat fotonya</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-700">Halaman ini berisi tentang beberapa contoh hasil foto wedding....</p>
                    </div>
                </div>

            </div>
            <br>
            <br>
            <br>
            <div class="flex justify-center space-x-8">
                
                <!-- Produk 1 -->
                <div class="w-1/3 bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative group">
                        <img src="{{ asset('build/assets/images/toko_online.png') }}" alt="Engagement" class="w-full h-60 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-lg font-bold text-white">Engagement</h3>
                            <a href="#" class="px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-100 mt-2">Lihat fotonya</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-700">Halaman ini berisi tentang beberapa contoh hasil foto engagement....</p>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="w-1/3 bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative group">
                        <img src="{{ asset('build/assets/images/toko_online.png') }}" alt="Prewedding" class="w-full h-60 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-lg font-bold text-white">Prewedding</h3>
                            <a href="#" class="px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-100 mt-2">Lihat fotonya</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-700">Halaman ini berisi tentang beberapa contoh hasil foto prewedding....</p>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="w-1/3 bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative group">
                        <img src="{{ asset('build/assets/images/toko_online.png') }}" alt="Wedding" class="w-full h-60 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-lg font-bold text-white">Wedding</h3>
                            <a href="#" class="px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-100 mt-2">Lihat fotonya</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-700">Halaman ini berisi tentang beberapa contoh hasil foto wedding....</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>