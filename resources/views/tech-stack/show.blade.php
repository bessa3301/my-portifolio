<x-layout>
    <div class="mx-auto max-w-md px-4 pt-8 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        <div class="grid grid-cols-4 grid-rows-1">
            <div class="col-span-1">
                <img src="{{ asset('storage/' . $stack->file_path) }}" alt="{{ $stack->name }}"
                    class="object-center object-cover aspect-1 h-20">
            </div>
            <div class="w-full col-span-3">
                <div class="flex pt-4 items-center">
                    <h1 class="text-3xl"> {{ ucfirst($stack->name) }} </h1>
                </div>
                <div>
                    <small class="text-gray-400"> {{ $stack->id }} </small>
                </div>
            </div>
        </div>
        <div class="mt-12 flex justify-start">
            <style scoped>
                p {
                    color: blue;
                    /* I can create a class later to contain all specifics and then apply the class from the app.css file */
                }

            </style>
            {!! html_entity_decode($stack->description) !!}
        </div>

    </div>
</x-layout>
