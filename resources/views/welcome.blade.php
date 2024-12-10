<x-app-layout>
    <div class="bg-secondary text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center mb-4">Mueblería Nova</h1>
            <p class="text-xl text-center">Transformamos espacios, creamos hogares</p>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold mb-6">Productos Nuevos</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach(range(1, 3) as $index)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="https://via.placeholder.com/300x200?text=Mueble+{{ $index }}" alt="Mueble {{ $index }}" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold mb-2">Mueble Elegante {{ $index }}</h3>
                                    <p class="text-gray-600 mb-4">Una pieza única que combina estilo y funcionalidad para tu hogar.</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-primary font-bold">${{ rand(100, 999) }}.99</span>
                                        <button class="bg-secondary text-white px-4 py-2 rounded hover:bg-blue-700 transition">Ver Detalles</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <h2 class="text-2xl font-semibold mb-6 mt-12">Ofertas Especiales</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach(range(1, 3) as $index)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="https://via.placeholder.com/300x200?text=Oferta+{{ $index }}" alt="Oferta {{ $index }}" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold mb-2">Oferta Especial {{ $index }}</h3>
                                    <p class="text-gray-600 mb-4">Aprovecha esta increíble oferta por tiempo limitado.</p>
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span class="text-gray-500 line-through">${{ rand(150, 300) }}.99</span>
                                            <span class="text-primary font-bold ml-2">${{ rand(100, 149) }}.99</span>
                                        </div>
                                        <button class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition">Comprar Ahora</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
