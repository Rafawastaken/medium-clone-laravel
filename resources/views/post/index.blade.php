<x-app-layout>
    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <x-category-tabs>
                        No Categories Found
                    </x-category-tabs>
                </div>
            </div>

            <div class="mt-8 text-gray-800">

                @forelse($posts as $p)
                    <x-post-item :post="$p"/>
                @empty
                    <p class="text-center text-gray-800 py-16">No Posts Found...</p>
                @endforelse
            </div>

            {{$posts->onEachSide(3)->links()}}
        </div>
    </div>
</x-app-layout>
