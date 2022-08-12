<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="grid md:grid-cols-8">
        <div class="col-span-5">
            @foreach($family->babies as $baby)
                <div class="card sm:flex-1 bg-base-100 shadow-xl m-8 lg:max-h-72">
                    <div class="card-body">
                        <h2 class="card-title font-extrabold">{{ $baby->name }}</h2>
                        <div class="btn-group my-2">
                            <label for="milk-modal" class="btn btn-outline modal-button btn-success grow">Milk</label>
                            <label for="diaper-modal" class="btn btn-outline modal-button btn-primary grow">Diaper</label>
                            <label for="sleep-modal" class="btn btn-outline modal-button btn-info grow">Sleep</label>
                        </div>

                        <div class="stats stats-vertical lg:stats-horizontal shadow">

                            <div class="stat">
                                <div class="stat-title">Total Milk</div>
                                <div class="stat-value">620 mL</div>
                                <div class="stat-desc">Last Feeding 1 Hour Ago</div>
                            </div>

                            <div class="stat">
                                <div class="stat-title">Total Diapers</div>
                                <div class="stat-value">8</div>
                                <div class="stat-desc">Last Changed 1 Hour Ago</div>
                            </div>

                            <div class="stat">
                                <div class="stat-title">Total Sleep</div>
                                <div class="stat-value">18 hours</div>
                                <div class="stat-desc">Last Logged 2 Hours Ago</div>
                            </div>

                        </div>



                    </div>


                </div>
            @endforeach
        </div>

        <div class="col-span-3 m-8">
            <ul class="steps steps-vertical">
                <li data-content="" class="step text-primary">Yasmin was fed 60 mL of Milk at 3:36 pm by Dre</li>
                <li data-content=""class="step text-primary">Yasmin was fed 90 mL of Milk at 1:20 pm by Dre</li>
                <li data-content=""class="step text-primary">Yasmin had a Diaper Change at 12:12 pm by Alan</li>
                <li data-content=""class="step text-primary">Yasmin was fed 60 mL of Milk at 10:36 am by Dre</li>
                <li data-content="" class="step text-primary">Yasmin was fed 60 mL of Milk at 3:36 pm by Dre</li>
                <li data-content=""class="step text-primary">Yasmin was fed 90 mL of Milk at 1:20 pm by Dre</li>
                <li data-content=""class="step text-primary">Yasmin had a Diaper Change at 12:12 pm by Alan</li>
                <li data-content=""class="step text-primary">Yasmin was fed 60 mL of Milk at 10:36 am by Dre</li>
              </ul>
        </div>
    </div>

    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="milk-modal" class="modal-toggle" />
    <div class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <label for="milk-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <h3 class="font-bold text-lg">MILK</h3>
        <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
        <div class="modal-action">
        <label for="milk-modals" class="btn">Yay!</label>
        </div>
    </div>
    </div>

    <input type="checkbox" id="diaper-modal" class="modal-toggle" />
    <div class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <label for="diaper-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <h3 class="font-bold text-lg">DIAPER</h3>
        <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
        <div class="modal-action">
        <label for="diaper-modal" class="btn">Yay!</label>
        </div>
    </div>
    </div>
    <input type="checkbox" id="sleep-modal" class="modal-toggle" />
    <div class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <label for="sleep-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <h3 class="font-bold text-lg">SLEEP</h3>
        <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
        <div class="modal-action">
        <label for="milk-modals" class="btn">Yay!</label>
        </div>
    </div>
    </div>
</x-app-layout>
