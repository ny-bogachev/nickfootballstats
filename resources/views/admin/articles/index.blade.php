<x-site-layout>
    <ul class="list-disc pl-4">
        @foreach($articles as $article)
            <li>
                {{$article->title}} <a href="{{route('admin.articles.edit', $article)}}">edit</a>
            </li>
        @endforeach
    </ul>
</x-site-layout>
