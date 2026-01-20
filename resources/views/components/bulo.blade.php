@props(['bulo'])

<div class="w-full max-w-xl mx-auto mt-8 perspective">
    <div
        x-data="{ flipped: false }"
        class="relative w-full min-h-[32rem]"
        :class="flipped ? 'rotate-y-180' : ''"
        style="transform-style: preserve-3d; transition: transform 0.6s;"
    >

        {{-- FRONT --}}
        <div
            class="absolute inset-0 bg-white shadow rounded-lg p-6 flex flex-col backface-hidden overflow-y-auto"
            x-show="!flipped"
            x-transition
        >
            {{-- AUTOR --}}
            <div class="font-semibold mb-3 text-gray-700">
                {{ $bulo->user?->name ?? 'Anónimo' }}
            </div>

            {{-- IMAGEN DEL BUL0 --}}
            @if ($bulo->imagen)
                <img
                    src="{{ $bulo->imagen }}"
                    alt="Imagen del bulo"
                    class="w-full h-64 object-cover rounded-lg mb-4"
                >
            @endif

            {{-- TEXTO DEL BUL0 --}}
            <p class="text-gray-800 flex-1">
                {{ $bulo->textobulo }}
            </p>

            {{-- BOTÓN --}}
            <button
                @click.stop="flipped = true"
                class="btn btn-primary btn-sm mt-6 mx-auto"
            >
                Ver desmentido
            </button>
            <div class="mt-4 flex justify-between">
    {{-- EDITAR --}}
    <a
        href="{{ url('/bulos/' . $bulo->id . '/edit') }}"
        class="btn btn-sm btn-outline btn-primary"
    >
        Editar
    </a>

    {{-- ELIMINAR --}}
    <form
        method="POST"
        action="{{ url('/bulos/' . $bulo->id) }}"
        onsubmit="return confirm('¿Seguro que quieres eliminar este bulo?')"
    >
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-sm btn-outline btn-error">
            Eliminar
        </button>
    </form>
</div>

        </div>

        {{-- BACK --}}
        <div
            class="absolute inset-0 bg-white shadow rounded-lg p-6 flex flex-col backface-hidden rotate-y-180 overflow-y-auto"
            x-show="flipped"
            x-transition
        >
            <p class="text-gray-700 flex-1">
                {{ $bulo->texto_desmentido }}
            </p>

            <button
                @click.stop="flipped = false"
                class="btn btn-outline btn-sm mt-6 mx-auto"
            >
                Volver
            </button>
        </div>

    </div>
</div>

<style>
.perspective {
    perspective: 1000px;
}

.rotate-y-180 {
    transform: rotateY(180deg);
}

.backface-hidden {
    backface-visibility: hidden;
}
</style>
