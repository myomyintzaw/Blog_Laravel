<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Category List</h1>
                    @session('success')
                        <div class="p-4 text-green-500 text-center border-2 shadow-emerald-200 shadow-md">
                            {{ session('success') }}
                        </div>
                    @endsession
                    <ul>
                        @foreach ($categories as $category)
                            <li>{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
