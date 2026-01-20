<x-layout>
    <x-slot:title>Bulos</x-slot:title>

    <div class="max-w-2xl mx-auto mt-8 space-y-6">
       {{-- Formulario de creación de bulo --}}
<div class="card bg-base-100 shadow mt-8">
    <div class="card-body">
        <form method="POST" action="/bulos">
            @csrf

            {{-- TEXTO DEL BULO --}}
            <div class="form-control w-full">
                <textarea
                    name="textobulo"
                    placeholder="Escribe un bulo..."
                    class="textarea textarea-bordered w-full resize-none @error('textobulo') textarea-error @enderror"
                    rows="3"
                    maxlength="255"
                >{{ old('textobulo') }}</textarea>
                <div class="form-control w-full mt-3">
    <input
        type="url"
        name="imagen"
        placeholder="URL de la imagen (opcional)"
        class="input input-bordered w-full @error('imagen') input-error @enderror"
        value="{{ old('imagen') }}"
    >

    @error('imagen')
        <div class="label">
            <span class="label-text-alt text-error">{{ $message }}</span>
        </div>
    @enderror
</div>


                @error('textobulo')
                    <span class="text-error text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- DESMENTIDO --}}
            <div class="form-control w-full mt-4">
                <textarea
                    name="texto_desmentido"
                    placeholder="Escribe el desmentido..."
                    class="textarea textarea-bordered w-full resize-none @error('texto_desmentido') textarea-error @enderror"
                    rows="3"
                    maxlength="255"
                >{{ old('texto_desmentido') }}</textarea>

                @error('texto_desmentido')
                    <span class="text-error text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4 flex justify-end">
                <button type="submit" class="btn btn-primary btn-sm">
                    Publicar bulo
                </button>
            </div>
        </form>
    </div>
</div>

        @forelse ($bulos as $bulo)
            <x-bulo :bulo="$bulo" />
        @empty
            <p class="text-gray-500 text-center">
                No hay bulos todavía.
            </p>
        @endforelse
    </div>
</x-layout>
