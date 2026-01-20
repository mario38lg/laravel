<x-layout>
    <x-slot:title>Bulos</x-slot:title>

    <div class="max-w-3xl mx-auto mt-8 space-y-6">

        {{-- BOTÓN DE CERRAR SESIÓN PARA USUARIOS LOGUEADOS --}}
        @auth
            <div class="flex justify-end mb-4 px-4">
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-ghost btn-sm hover:bg-red-100 text-red-600">
                        Cerrar sesión
                    </button>
                </form>
            </div>
        @endauth

        {{-- MENSAJE Y BOTONES PARA INVITADOS --}}
        @guest
            <div class="bg-purple-50 border border-purple-200 p-6 rounded text-center shadow mb-4">
                <p class="text-gray-700 mb-4">
                    Para publicar un bulo debes iniciar sesión o registrarte.
                </p>
                <div class="flex justify-center gap-4">
                    <a href="/login" class="btn btn-primary btn-sm">Iniciar sesión</a>
                    <a href="/register" class="btn btn-secondary btn-sm">Registrarse</a>
                </div>
            </div>
        @endguest

        {{-- FORMULARIO DE CREACIÓN DE BULOS SOLO PARA USUARIOS LOGUEADOS --}}
        @auth
            <div class="card bg-white shadow-md rounded-lg">
                <div class="card-body px-6 py-4">
                    <form method="POST" action="/bulos" class="space-y-4">
                        @csrf

                        {{-- TEXTO DEL BULO --}}
                        <textarea
                            name="textobulo"
                            placeholder="Escribe un bulo..."
                            class="textarea textarea-bordered w-full resize-none @error('textobulo') textarea-error @enderror"
                            rows="3"
                            maxlength="255"
                        >{{ old('textobulo') }}</textarea>
                        @error('textobulo')<span class="text-error text-sm">{{ $message }}</span>@enderror

                        {{-- IMAGEN --}}
                        <input
                            type="url"
                            name="imagen"
                            placeholder="URL de la imagen (opcional)"
                            class="input input-bordered w-full @error('imagen') input-error @enderror"
                            value="{{ old('imagen') }}"
                        >
                        @error('imagen')<span class="text-error text-sm">{{ $message }}</span>@enderror

                        {{-- DESMENTIDO --}}
                        <textarea
                            name="texto_desmentido"
                            placeholder="Escribe el desmentido..."
                            class="textarea textarea-bordered w-full resize-none @error('texto_desmentido') textarea-error @enderror"
                            rows="3"
                            maxlength="255"
                        >{{ old('texto_desmentido') }}</textarea>
                        @error('texto_desmentido')<span class="text-error text-sm">{{ $message }}</span>@enderror

                        {{-- BOTÓN PUBLICAR --}}
                        <div class="flex justify-end">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Publicar bulo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @endauth

        {{-- LISTA DE BULOS --}}
        @forelse ($bulos as $bulo)
            <x-bulo :bulo="$bulo" />
        @empty
            <p class="text-gray-500 text-center">
                No hay bulos todavía.
            </p>
        @endforelse
    </div>
</x-layout>
