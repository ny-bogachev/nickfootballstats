<x-site-layout title="Teams">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        @foreach($teams as $team)
            <a href="{{ route('teams.show', $team->id) }}" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 transition duration-200">
                <h2 class="font-bold text-lg text-gray-800">{{ $team->name }}</h2>
                <p class="text-gray-600 mt-2">Click to view team details</p>
            </a>
        @endforeach
    </div>

</x-site-layout>
