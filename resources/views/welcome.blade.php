<x-site-layout title="Matches">

    @foreach($articles as $article)
        <div class="mt-4">
            <h2 class="font-bold text-lg">{{$article->title}}</h2>
            <div>
                {{ \Carbon\Carbon::parse($article->match_date)->toDateString()}}
                |
                {{$article->stadium->name}}
            </div>
            <p class="text-sm">{{$article->score}}</p>
        </div>
    @endforeach

</x-site-layout>
