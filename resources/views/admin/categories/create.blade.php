<x-admin-layout>
    <h1 class="py-5 text-center">Add Cate</h1>
    <a href="{{route('admin.categories.index')}}" class="bg-transparent hover:bg-blue-500 
    text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 
    hover:border-transparent rounded">Cate</a>
    <form action="{{route('admin.categories.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white my-3">Name: </label>
            <input type="text" name="name" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 
            rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
            dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white my-3">File: </label>
            <input type="file" name="image">
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white my-3">Decription:</label>
            <textarea name="description" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 
            rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
            dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
        </div>
        
        <input type="submit" class="my-3 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
    </form>
</x-admin-layout>
