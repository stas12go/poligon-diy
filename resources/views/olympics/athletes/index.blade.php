<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of athletes') }}
        </h2>
    </x-slot>

    <table class="table table-striped table-hover text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($athletesList as $athlete)
                <tr>
                    <td>{{ $athlete->id }}</td>
                    <td>
                        <a href="{{ route('olympics.athletes.edit', $athlete->id) }}">{{ $athlete->name }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $athletesList->links() }}

</x-app-layout>
