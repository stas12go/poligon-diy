<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of athletes') }}
        </h2>
    </x-slot>

    <div class="card mb-3" style="">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ $country->flag_url }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">{{ $athlete->name }}</h5>
                    <p class="card-text">Date of birthday: {{ $athlete->date_of_birthday }}</p>
                    <p class="card-text">
                        Country:
                        <a href="{{ route('olympics.countries.show', $country->id) }}" class="card-link">
                            {{ $country->name }}
                        </a>
                    </p>
                    <p class="card-text">
                        Sport:
                        <a href="{{ route('olympics.sports.show', $sport->id) }}" class="card-link">
                            {{ $sport->name }}
                        </a>
                    </p>
                    @php
                        // dd($athlete, $country->name);
                    @endphp
                    <!-- TODO - Здесь будет подпись, когда атлет последний раз выступал -->
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
