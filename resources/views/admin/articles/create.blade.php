<x-site-layout title="Create New Match Article">

    <form action="{{route('admin.articles.store')}}" method="post">
        @csrf

        <label for="title" class="block text-xs font-semibold uppercase">Competitors:</label><br/>
        <input name="title" value="{{old('title')}}" class="w-2/3 p-1 rounded-lg border border-gray-200 @error('title') border-red-500 @enderror">
        @error('title')<div class="text-red-500 text-xs">{{$message}}</div> @enderror

        <br/><br/>

        <label for="score" class="block text-xs font-semibold uppercase">Score:</label><br/>
        <input name="score" value="{{old('score')}}" class="w-2/3 p-1 rounded-lg border border-gray-200 @error('score') border-red-500 @enderror">
        @error('score')<div class="text-red-500 text-xs">{{$message}}</div> @enderror

        <br/><br/>

        <label for="stadia_id" class="block text-xs font-semibold uppercase">Stadium:</label><br/>
        <x-form-select name="stadia_id" value="{{old('stadia_id')}}" :options="\App\Models\Stadium::pluck('name', 'id')->toArray()" />

        <br/><br/>

        <div class="w-full flex justify-end gap-x-8">
            <a href="{{route('admin.articles.index')}}" class="text-xs text-gray-700 bg-gray-300 hover:bg-gray-200 px-4 py-2 rounded uppercase">Undo</a>
            <button type="submit" class="text-xs text-green-700 bg-green-300 hover:bg-green-200 px-4 py-2 rounded uppercase">Create match article</button>
        </div>

    </form>

</x-site-layout>
