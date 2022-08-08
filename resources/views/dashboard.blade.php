<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="grid md:grid-cols-8">
        <div class="col-span-5">
            <div class="card sm:flex-1 bg-base-100 shadow-xl m-8 lg:max-h-72">
                <div class="card-body">
                    <h2 class="card-title font-extrabold">Yasmin</h2>
                    <div class="btn-group my-2">
                        <button class="btn btn-outline btn-success grow">Milk</button>
                        <button class="btn btn-outline btn-primary grow">Diaper</button>
                        <button class="btn btn-outline btn-info grow">Sleep</button>
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
</x-app-layout>
