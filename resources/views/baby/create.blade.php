<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Welcome! Tell us about your baby...
                    </h2>
                    <form method="POST" action="{{ route('babies.store') }}">
                        @csrf
                        <div class="flex flex-wrap pt-9 -mx-3 mb-4">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    What is Your Baby's Name?
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-city" type="text" name="name" placeholder="Yasmin">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    What is Your Baby's Birthday?
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-city" type="text" name="dob" placeholder="mm/dd/yyyy">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    What is Your Baby Eating?
                                </label>
                                <select class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-teal-300" id="grid-city" name="milk" placeholder="">
                                    <option value="1">Exclusively Breastfed</option>
                                    <option value="2">Exclusively Formula</option>
                                    <option value="3">Both Breastmilk and Formula</option>
                                </select>
                            </div>
                        </div>

                        <button class="px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-purple-500 hover:bg-purple-600 active:bg-purple-700 focus:ring-purple-300" type="submit">Button</button>

                    </form>
            </div>

        </div>
    </div>
</x-app-layout>
