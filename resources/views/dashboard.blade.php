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
                            <label for="milk-modal-{{ $baby->id }}" class="btn btn-outline modal-button btn-success grow">Milk</label>
                            <label for="diaper-modal-{{ $baby->id }}" class="btn btn-outline modal-button btn-primary grow">Diaper</label>
                            <label for="sleep-modal" class="btn btn-outline modal-button btn-info grow">Sleep</label>
                        </div>

                        <div class="stats stats-vertical lg:stats-horizontal shadow">

                            <div class="stat">
                                <div class="stat-title">Total Milk</div>
                                @if ($baby->milks)
                                    <div class="stat-value">{{ $baby->milks->sum('amount') }}</div>
                                @endif
                                <div class="stat-desc">Last Feeding 1 Hour Ago</div>
                            </div>

                            <div class="stat">
                                <div class="stat-title">Total Diapers</div>
                                @if ($baby->diapers)
                                <div class="stat-value">{{ $baby->diapers->count() }}</div>
                                @else
                                <div class="stat-value">0</div>
                                @endif
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

                <input type="checkbox" id="milk-modal-{{ $baby->id }}" class="modal-toggle" />
                    <div class="modal modal-bottom sm:modal-middle">
                        <div class="modal-box">
                            <label for="milk-modal-{{ $baby->id }}" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                            <h3 class="font-bold text-lg">MILK for {{ $baby->name }}</h3>
                            <form method="POST" action="{{ route('milks.store') }}">
                                @csrf
                                <div>
                                    <input type="hidden" name="baby_id" value="{{ $baby->id }}">
                                </div>
                                <div class="form-control">
                                    <label class="label">
                                    <span class="label-text">Enter amount</span>
                                    </label>
                                    <label class="input-group">
                                    <input type="text" name="amount" placeholder="90" class="input input-bordered" />
                                    <span>mL</span>
                                    </label>
                                </div>
                                <div class="w-64">
                                    <div class="form-control">
                                        <label class="label cursor-pointer">
                                        <span class="label-text">Breastmilk</span>
                                        <input type="radio" name="type" class="" value="1" checked />
                                        </label>
                                    </div>
                                    <div class="form-control">
                                        <label class="label cursor-pointer">
                                        <span class="label-text">Formula</span>
                                        <input type="radio" name="type" class="" value="0" checked />
                                        </label>
                                    </div>
                                </div>

                                <div class="modal-action">
                                    <button for="milk-modals" class="btn" type="submit">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>

                <input type="checkbox" id="diaper-modal-{{ $baby->id }}" class="modal-toggle" />
                <div class="modal modal-bottom sm:modal-middle">
                    <div class="modal-box">
                        <label for="diaper-modal-{{ $baby->id }}" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                        <h3 class="font-bold text-lg">DIAPER for {{ $baby->name }}</h3>
                        <form method="POST" action="{{ route('diapers.store') }}">
                            @csrf
                            <div>
                                <input type="hidden" name="baby_id" value="{{ $baby->id }}">
                            </div>
                            <div class="w-64">
                                <div class="form-control">
                                    <label class="label cursor-pointer">
                                    <span class="label-text">Pee</span>
                                    <input type="radio" name="type" class="" value="1" checked />
                                    </label>
                                </div>
                                <div class="form-control">
                                    <label class="label cursor-pointer">
                                    <span class="label-text">Poo</span>
                                    <input type="radio" name="type" class="" value="0" checked />
                                    </label>
                                </div>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Enter Notes</span>
                                </label>
                                <label class="input">
                                    <input type="text" name="notes" placeholder="Add Some Notes" class="input input-bordered" />
                                </label>
                            </div>
                            <div class="modal-action">
                                <button for="milk-modal-{{ $baby->id }}" class="btn" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-span-3 m-8">
            @if($timelineEvents)
                <ul class="steps steps-vertical">
                    @foreach($timelineEvents as $event)

                            <li data-content="" class="step step-primary text-base-100">{{ $event['text'] }}</li>

                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    <!-- Put this part before </body> tag -->



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
