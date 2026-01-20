<x-layout>
    <x-slot:title>Editar bulo</x-slot:title>

    <div class="max-w-2xl mx-auto mt-8">
        <div class="card bg-base-100 shadow">
            <div class="card-body">
                <form method="POST" action="/bulos/{{ $bulo->id }}">
                    @csrf
                    @method('PUT')

                    {{-- TEXTO BUL0 --}}
                    <div class="form-control mb-4">
                        <label class="label">
                            <span class="label-text">Bulo</span>
                        </label>
                        <textarea
                            name="textobulo"
                            class="textarea textarea-bordered w-full"
                            rows="3"
                        >{{ old('textobulo', $bulo->textobulo) }}</textarea>
                    </div>

                    {{-- DESMENTIDO --}}
                    <div class="form-control mb-4">
                        <label class="label">
                            <span class="label-text">Desmentido</span>
                        </label>
                        <textarea
                            name="texto_desmentido"
                            class="textarea textarea-bordered w-full"
                            rows="3"
                        >{{ old('texto_desmentido', $bulo->texto_desmentido) }}</textarea>
                    </div>

                    {{-- IMAGEN --}}
                    <div class="form-control mb-4">
                        <label class="label">
                            <span class="label-text">URL de la imagen</span>
                        </label>
                        <input
                            type="url"
                            name="imagen"
                            class="input input-bordered w-full"
                            value="{{ old('imagen', $bulo->imagen) }}"
                        >
                    </div>

                    {{-- BOTONES --}}
                    <div class="flex justify-between">
                        <a href="/" class="btn btn-ghost">
                            Cancelar
                        </a>

                        <button type="submit" class="btn btn-primary">
                            Guardar cambios
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
