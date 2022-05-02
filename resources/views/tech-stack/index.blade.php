<x-layout>
    <div class="w-full justify-center">
        @foreach ($stacks as $stack)
            <div>
                {{ $stack }}
            </div>
        @endforeach

        <!-- TAILWIND COMPONENT -->
        <div>

            <div class="bg-white">
                <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900"> My Tech Stacks and Skills </h2>

                    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        <div class="group relative">
                            <div
                                class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            javascript
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">
                                        5/5
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- More products... -->
                    </div>
                </div>
            </div>

        </div>

    </div>
</x-layout>
