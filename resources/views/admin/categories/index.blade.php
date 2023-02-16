<x-admin-layout>
<h1 class="py-5 text-center">Cate</h1>
<a href="{{route('admin.categories.create')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Create</a>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    reservation
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $cate)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td scope="row" class="px-6 py-4">
                    {{$cate->name}}
                </td>
                <td class="px-6 py-4">
                    <img src="{{Storage::url($cate->image)}}" class="w-16 h-16 rounded">
                </td>
                <td class="px-6 py-4">
                    {{$cate->description}}
                </td>
                <td class="px-6 py-4">
                    <div class="flex space-x-2">
                        <a href="{{route('admin.categories.edit', $cate->id)}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Edit</a>
                    <form action="{{route('admin.categories.destroy', $cate->id)}}" method="POST"
                    onsubmit="return comfirm('You sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">delete</button>
                </form>
                    </div>
                    
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


</x-admin-layout>