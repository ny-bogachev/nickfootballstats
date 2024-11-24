<x-site-layout>

    <a href="{{route('admin.articles.create')}}">Create new match article</a>

    @if(session()->has('success'))
        <div class="bg-green-100 text-green-500 p-2">
            {{session()->get('success')}}
        </div>
    @endif

    <ul class="list-disc pl-4">
        @foreach($articles as $article)
            <li>
                {{$article->title}}
                <a href="{{route('admin.articles.edit', $article)}}">edit</a>
                <form action="{{route('admin.articles.destroy', $article)}}" method="post">@method('delete')@csrf<button type="submit">delete</button></form>
            </li>
        @endforeach
    </ul>

</x-site-layout>
