<div
    class="bg-white border border-gray-200 rounded-lg shadow-sm flex mb-4">

    <div class="p-5 flex-1">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                {{$post->title}}
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 ">{{Str::words($post->content, 20)}}</p>
        <a href="#">
            <x-primary-button>
                Read more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </x-primary-button>
        </a>
    </div>

    <a href="#">
        <img class="w-48 h-48 object-cover rounded-r-lg"
             src="{{Storage::url($post->image)}}"
             alt="Image {{$post->title}}"/>
    </a>
</div>
