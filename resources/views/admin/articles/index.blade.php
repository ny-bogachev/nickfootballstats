<x-site-layout title="All Match Articles">
    <div class="flex justify-center mb-4">
        <a class="text-m text-green-700 bg-green-300 px-1 py-.5 rounded uppercase" href="{{route('admin.articles.create')}}">Create match article</a>
    </div>

    @if(session()->has('success'))
        <div class="bg-green-100 text-green-500 p-2">
            {{session()->get('success')}}
        </div>
    @endif

    <table class="table-auto w-full border border-gray-300">
        <thead>
        <tr class="bg-gray-300">
            <th>Title</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr class="hover:bg-gray-200 border-b border-gray-200">
                <td><a href="{{route('admin.articles.show', $article)}}">{{$article->title}}</a></td>
                <td class="flex gap-x-4 justify-center items-center">
                    <a href="{{route('admin.articles.edit', $article)}}" class="text-xs text-blue-700 bg-blue-300 px-1 py-.5 rounded uppercase">Edit</a>
                    <form action="{{route('admin.articles.destroy', $article)}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="text-xs text-red-700 bg-red-300 px-1 py-.5 rounded uppercase">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</x-site-layout>
