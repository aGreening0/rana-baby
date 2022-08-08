<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="">

        <div class="max-w-lg sm:px-6 lg:px-8 m-8">


            <div class="card bg-base-100 shadow-xl">
                <div class="card-body float-center">
                    <h2 class="font-semibold card-title text-xl leading-tight">
                        Welcome! Tell us about your baby...
                    </h2>
                    <form method="POST" action="{{ route('babies.store') }}">
                        @csrf
                        <div class="flex flex-wrap pt-6 mb-4">
                            <div class="w-full">
                                <label class="block uppercase tracking-wide base-content text-xs font-bold mb-2" for="grid-city">
                                    What is Your Baby's Name?
                                </label>
                                <input class="input input-primary w-full max-w-lg" id="grid-city" type="text" name="name" placeholder="Yasmin">
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-4">
                            <div class="w-full">
                                <label class="block uppercase tracking-wide base-content text-xs font-bold mb-2" for="grid-city">
                                    What is Your Baby's Birthday?
                                </label>
                                <input class="input input-primary w-full max-w-lg" id="grid-city" type="text" name="dob" placeholder="mm/dd/yyyy">
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-4">
                            <div class="w-full">
                                <label class="block uppercase tracking-wide base-content text-xs font-bold mb-2" for="grid-city">
                                    What is Your Baby Eating?
                                </label>
                                <select class="input input-primary w-full max-w-lg" id="grid-city" name="milk" placeholder="">
                                    <option value="1">Exclusively Breastfed</option>
                                    <option value="2">Exclusively Formula</option>
                                    <option value="3">Both Breastmilk and Formula</option>
                                </select>
                            </div>
                        </div>
                        <div class="float-right mt-10">
                            <button class="btn btn-primary btn-large btn-responsive" type="submit">Submit</button>
                        </div>

                    </form>
            </div>

        </div>
    </div>
</x-app-layout>
