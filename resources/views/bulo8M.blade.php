<x-layout>
    <x-slot:title>Inicio - CazaBulos</x-slot:title>

    <div class="bg-white p-4 rounded-xl shadow-sm mb-6 border border-gray-100">
        <div class="flex gap-4">
            <div class="h-12 w-12 rounded-full bg-purple-100 flex items-center justify-center">👤</div>
            <div class="flex-1">
                <textarea class="w-full border-none resize-none p-2 focus:outline-none" rows="2" placeholder="Describe el bulo..."></textarea>
                <div class="flex justify-end border-t border-gray-100 pt-2">
                    <button class="bg-purple-600 text-white font-bold py-2 px-6 rounded-full opacity-50">Publicar</button>
                </div>
            </div>
        </div>
    </div>

    <article class="bg-white p-4 rounded-xl shadow-sm border border-gray-100">
        <div class="flex gap-3 mb-3">
            <div class="h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center">👩‍💻</div>
            <div>
                <h3 class="font-bold text-gray-900">Ana Verificadora ✅</h3>
                <p class="text-gray-800">🚨 Cuidado, esta imagen es un montaje digital.</p>
            </div>
        </div>
        <div class="border border-gray-200 rounded-xl overflow-hidden flex flex-col md:flex-row bg-gray-100">
            <div class="md:w-2/5 relative h-48 md:h-auto">
                <div class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full">❌ FALSO</div>
                <img src="https://via.placeholder.com/500x600?text=FOTO+BULO" class="object-cover w-full h-full">
            </div>
            <div class="p-4 md:w-3/5 flex flex-col justify-center">
                <h4 class="font-bold">Manipulación Detectada</h4>
                <p class="text-sm text-gray-600 mt-2">La fuente original de 2019 confirma que el cartel decía "Igualdad".</p>
            </div>
        </div>
    </article>
</x-layout>