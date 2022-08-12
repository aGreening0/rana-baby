<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="">
        <div class="card bg-base-100 text-neutral-content m-8">
            <div class="card-body items-center text-center">
                <form action="{{ route('invite.send') }}">

                    <div class="w-full">
                        <label for="email">Invite Someone to Your Family</label>
                        <input type="text" placeholder="email" class="input input-bordered input-primary w-full max-w-xs" name="email"/>
                    </div>
                    <div class="float-right mt-10">
                        <button class="btn btn-primary btn-large btn-responsive" type="submit">Submit</button>
                    </div>

                </form>

             </div>
        </div>
    </div>
</x-app-layout>
