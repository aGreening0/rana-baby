<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">

        <div class="max-w-md mx-auto sm:px-6 lg:px-8">


            <div class="card bg-primary text-primary-content">
                <div class="card-body">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Welcome! Tell us about your baby...
                    </h2>
                    <form method="POST" action="{{ route('babies.store') }}">
                        @csrf
                        <div class="flex flex-wrap pt-6 -mx-3 mb-4">
                            <div class="w-full">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    What is Your Baby's Name?
                                </label>
                                <input class="input w-full max-w-xs" id="grid-city" type="text" name="name" placeholder="Yasmin">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    What is Your Baby's Birthday?
                                </label>
                                <input class="input w-full max-w-xs" id="grid-city" type="text" name="dob" placeholder="mm/dd/yyyy">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    What is Your Baby Eating?
                                </label>
                                <select class="input w-full max-w-xs" id="grid-city" name="milk" placeholder="">
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
