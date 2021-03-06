<x-layout>
    <div class="w-full justify-center">
        <div class="bg-white">
            <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900"> My Tech Stacks and Skills: </h2>
                <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @foreach ($stacks as $stack)
                        <div class="group relative">
                            <div
                                class="w-full min-h-72 bg-gray-200 aspect-w-1 aspect-h-1 rounded-lg overflow-hidden group-hover:opacity-75 lg:h-72 lg:aspect-none">
                                <img src="{{ asset('storage/' . $stack->file_path) }}" alt="{{ $stack->name }}"
                                    class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="/tech-stack/{{ $stack->id }}">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            {{ $stack->name }}
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">
                                        {{ $stack->expertise }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
</x-layout>
