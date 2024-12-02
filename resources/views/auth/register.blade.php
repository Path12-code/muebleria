<x-guest-layout>
    <h2 class="text-3xl font-bold text-center text-blue-700 mb-6">Crear cuenta</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nombre completo -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Nombre completo</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Correo electrónico -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Correo electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Contraseña -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium">Contraseña</label>
                <input id="password" type="password" name="password" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirmación de contraseña -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 font-medium">Confirmar contraseña</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('password_confirmation')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Registro Button -->
            <div class="flex justify-center mb-4">
                <button type="submit" class="w-full bg-red-600 text-white p-3 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                    Crear cuenta
                </button>
            </div>

            <!-- Login Link -->
            <div class="text-center">
                <p class="text-gray-700">¿Ya tienes una cuenta?</p>
                <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-700">Inicia sesión</a>
            </div>
        </form>
</x-guest-layout>
