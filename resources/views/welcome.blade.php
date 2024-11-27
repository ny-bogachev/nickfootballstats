<x-site-layout title="Recent Matches">

    <div class="grid grid-cols-2 gap-x-8">
        @foreach($articles as $article)
            <div class="mt-4">
                <a href="{{route('articles.show',$article->id)}}">
                    <h2 class="font-bold text-lg">{{$article->teams[0]->name}} vs {{$article->teams[1]->name}}</h2>
                    <div>
                        {{ \Carbon\Carbon::parse($article->match_date)->toDateString()}}
                        |
                        {{$article->stadium->name}} ({{$article->stadium->address}})
                    </div>
                </a>
                <div class="mt-2 flex space-x-2">
                    @foreach($article->teams as $team)
                        <a href="{{route('teams.show',$team->id)}}" class="inline-block">
                            <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded-full text-xs">
                                {{$team->name}}
                            </span>
                        </a>
                    @endforeach
                </div>
                <p class="text-sm mt-2">{{$article->score}}</p>
            </div>
        @endforeach
    </div>

</x-site-layout>
