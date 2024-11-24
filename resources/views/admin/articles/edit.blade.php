<x-site-layout>

    <form action="{{route('admin.articles.update', $article)}}" method="post">
        @method('PUT')
        @csrf

        <label for="title">Competitors:</label><br/>
        <input name="title" value="{{old('title', $article->title)}}">
        @error('title')<div class="text-red-500">{{$message}}</div> @enderror

        <br/><br/>

        <label for="score">Score:</label><br/>
        <input name="score" value="{{old('score', $article->score)}}">
        @error('score')<div class="text-red-500">{{$message}}</div> @enderror

        <br/><br/>

        <label for="stadia_id">Stadium ID:</label><br/>
        <input name="stadia_id" value="{{old('stadia_id', $article->stadia_id)}}">
        @error('stadia_id')<div class="text-red-500">{{$message}}</div> @enderror

        <br/><br/>

        <div>
            <a href="{{route('admin.articles.index')}}">Undo</a>
            <br/>
            <button type="submit">Submit</button>
        </div>
    </form>

</x-site-layout>
