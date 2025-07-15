<x-app-layout>
    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl text-start mb-4">
                    Add a New Post
                </h1>
                <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- @dump($errors) -->

                    <!-- Image -->
                    <x-input-label for="image" :value="__('Image')"/>
                    <x-text-input
                        id="image"
                        class="block mt-1 w-full p-1"
                        type="text"
                        name="image"
                        placeholder="{{__('Post image')}}"
                        :value="old('image')"
                        type="file"
                        autofocus/>
                    <x-input-error :messages="$errors->get('image')" class="mt-2"/>

                    <!-- Title -->
                    <div class="mt-3">
                        <x-input-label for="title" :value="__('Title')"/>
                        <x-text-input
                            id="title"
                            class="block mt-1 w-full"
                            type="text"
                            name="title"
                            placeholder="{{__('Post title')}}"
                            :value="old('title')"
                        />
                        <x-input-error :messages="$errors->get('title')" class="mt-2"/>
                    </div>

                    <!-- Post content -->
                    <div class="mt-3">
                        <x-input-label for="content" :value="__('Content')"/>
                        <x-input-textarea
                            id="content"
                            class="block mt-1 w-full"
                            type="text"
                            name="content"
                            placeholder="{{__('Content')}}"
                        >{{old('content')}}</x-input-textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2"/>
                    </div>

                    <!-- Category -->
                    <div class="mt-3">
                        <x-input-label for="content" :value="__('Category')"/>
                        <select
                            name="category_id"
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                            <option value="">Select a Category</option>
                            @foreach($categories as $c)
                                <option value="{{ $c->id }}" @selected(old('category') == $c->id)>
                                    {{ $c->name }}
                                </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category')" class="mt-2"/>
                    </div>


                    <!-- Submit -->
                    <x-primary-button class="mt-4">
                        Submit
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
