<ul class="flex flex-wrap justify-evenly text-sm font-medium text-center text-gray-500">
    <li class="me-2">
        <a href="#" class="inline-block px-4 py-2 text-white bg-blue-600 rounded-lg active"
           aria-current="page">
            All
        </a>
    </li>


    @forelse($categories as $category)
        <li class="me-2">
            <a href="#"
               class="inline-block px-4 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100 ">
                {{$category->name}}
            </a>
        </li>
    @empty
        <p class="text-center text-gray-800 py-16">No Posts Found...</p>
    @endforelse
</ul>
