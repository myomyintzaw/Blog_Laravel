<x-app-layout>

    <div class="py-12">
        <div class="lg:w-1/2 w-4/5 mx-auto px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-center text-xl">Create Form</h1>
                    {{-- @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            {{$err}}
                        @endforeach
                    @endif --}}
                    <form action="{{ route('categories.store') }}" method="post" class="p-3">
                        @csrf
                        <input type="text" value="{{ old('name') }}"
                            class="block w-full p-2 rounded-md border-spacing-1 mb-2" placeholder="Type Category Name"
                            name="name">
                        @error('name')
                            <p class="text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                        <input type="submit" class="px-2 py-1 bg-blue-400 text-blue-50 rounded-lg bottom-2">
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
