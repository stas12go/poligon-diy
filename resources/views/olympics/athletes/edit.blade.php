<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of athletes') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('olympics.athletes.update', $athlete->id) }}">
        @method('patch')
        @csrf
        <div class="mb-3">
            <label for="athleteName" class="form-label">Name</label>
            <input type="text" class="form-control" id="athleteName" name="name" value="{{ $athlete->name }}">
        </div>
        <div class="mb-3">
            <label for="athleteDob" class="form-label">Date of birthday</label>
            <input type="text" class="form-control" id="athleteDob" name="date_of_birthday"
                value="{{ $athlete->date_of_birthday }}">
        </div>
        <div class="mb-3">
            <label for="athleteCountry" class="form-check-label">Country</label>
            <select class="form-select" id="athleteCountry" name="country_id">
                @foreach ($countriesList as $countryOption)
                    <option value="{{ $countryOption->id }}" @if ($athlete->country_id === $countryOption->id) selected @endif>
                        {{ $countryOption->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="athleteSport" class="form-check-label">Sport</label>
            <select class="form-select" id="athleteSport" name="sport_id">
                @foreach ($sportsList as $sportOption)
                    <option value="{{ $sportOption->id }}" @if ($athlete->country_id === $sportOption->id) selected @endif>
                        {{ $sportOption->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</x-app-layout>
