<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-5">{{ $baby->name }}</h2>
                    <p class="block uppercase pt-6 tracking-wide text-gray-700 text-xs font-bold mb-2">{{ $baby->getAge() }} weeks old</p>
                    <p class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">{{ $baby->milkType() }}</p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
