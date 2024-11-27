<x-site-layout title="All Matches">

    @foreach($articles as $article)
        <a href="{{route('articles.show',$article->id)}}" class="mt-4">
            <h2 class="font-bold text-lg">{{$article->teams[0]->name}} vs {{$article->teams[1]->name}}</h2>
            <div>
                {{ \Carbon\Carbon::parse($article->match_date)->toDateString()}}
                |
                {{$article->stadium->name}} ({{$article->stadium->address}})
            </div>
            <div>
                @foreach($article->teams as $team)
                    <a href="{{route('teams.show',$team->id)}}" class="mt-4">
                        <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded-full text-xs">{{$team->name}}</span>
                @endforeach
            </div>
            <p class="text-sm">{{$article->score}}</p>
    @endforeach

</x-site-layout>
