<x-site-layout title="Edit match article">

    <form action="{{route('admin.articles.update', $article)}}" method="post" class="w-2/3 border border-gray-300 p-4">
        @method('PUT')
        @csrf

        <label for="title" class="block text-xs font-semibold uppercase">Competitors:</label><br/>
        <input name="title" value="{{old('title', $article->title)}}" class="w-2/3 p-1 rounded-lg border border-gray-200 @error('title') border-red-500 @enderror">
        @error('title')<div class="text-red-500 text-xs">{{$message}}</div> @enderror

        <br/><br/>

        <label for="score" class="block text-xs font-semibold uppercase">Score:</label><br/>
        <input name="score" value="{{old('score', $article->score)}}" class="w-2/3 p-1 rounded-lg border border-gray-200 @error('score') border-red-500 @enderror">
        @error('score')<div class="text-red-500 text-sx">{{$message}}</div> @enderror

        <br/><br/>

        <label for="stadia_id" class="block text-xs font-semibold uppercase">Stadium ID:</label><br/>
        <input name="stadia_id" value="{{old('stadia_id', $article->stadia_id)}}" class="w-2/3 p-1 rounded-lg border border-gray-200 @error('stadia_id') border-red-500 @enderror">
        @error('stadia_id')<div class="text-red-500 text-xs">{{$message}}</div> @enderror

        <br/><br/>

        <div class="w-full flex justify-end gap-x-8">
            <a href="{{route('admin.articles.index')}}" class="text-xs text-gray-700 bg-gray-300 hover:bg-gray-200 px-4 py-2 rounded uppercase">Undo</a>
            <button type="submit" class="text-xs text-green-700 bg-green-300 hover:bg-green-200 px-4 py-2 rounded uppercase">Submit match article</button>
        </div>
    </form>

</x-site-layout>
