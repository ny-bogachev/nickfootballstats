<x-site-layout title="Create new match article">

    <form action="{{route('admin.articles.store')}}" method="post">
        @csrf

        <label for="title">Competitors:</label><br/>
        <input name="title" value="{{old('title')}}">
        @error('title')<div class="text-red-500">{{$message}}</div> @enderror

        <br/><br/>

        <label for="score">Score:</label><br/>
        <textarea name="score">{{old('score')}}</textarea>
        @error('score')<div class="text-red-500">{{$message}}</div> @enderror

        <br/><br/>

        <label for="stadia_id">Stadium ID:</label><br/>
        <textarea name="stadia_id">{{old('stadia_id')}}</textarea>
        @error('stadia_id')<div class="text-red-500">{{$message}}</div> @enderror

        <br/><br/>

        <div>
            <a href="{{route('admin.articles.index')}}">Undo</a>
            <br/>
            <button type="submit">Create match article</button>
        </div>
    </form>

</x-site-layout>
