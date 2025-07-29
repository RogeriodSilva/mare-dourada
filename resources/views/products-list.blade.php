<x-app-layout>

    <x-slot name="footer">
        @include('layouts.footer')
    </x-slot>

    <x-slot name="header">
        <x-header-image>

            <x-slot name="image" class=" -mt-30" src="{{ asset('img/website/about/header.jpg') }}"></x-slot>
            <x-slot name="card_content">
                <h1 class="text-6xl uppercase text-white f-ivy">Nossos Produtos</h1>
            </x-slot>
        </x-header-image>
    </x-slot>


    <section class="min-h-screen mt-12">
        <section class="grid grid-cols-5">

            <section class="hidden md:block col-span-1">
                <x-filter-items></x-filter-items>

            </section>

            <section class="col-span-5 md:col-span-4 px-5 justify-between" x-data="{ view: 8 }">

                @if (count($products) > 0)
                    <section class="flex flex-col">
                        <section class=" grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-5">
                            @foreach ($products as $index => $product)
                                <x-product-list-view x-show="view > {{ $index }}" :product="$product">

                                </x-product-list-view>
                            @endforeach
                        </section>

                        <section class="w-full flex justify-center mt-12">
                            @if ($products->count() > 8)
                                <div x-data>
                                    <button x-on:click="view += 8" x-show="view < {{ $products->count() }}"
                                        class="
                                cursor-pointer px-4
                                transition duration-300 ease-in-out
                                hover:text-white hover:border-black hover:bg-[#011526]/80 hover:border-none
                                transform hover:scale-105
                                uppercase
                                text-black border rounded-full px-8 py-2
                        ">
                                        ver mais+

                                    </button>
                                </div>
                            @endif

                        </section>
                    </section>
                @else
                    <h1 class="text-2xl text-center">
                        Nenhum produto encontrado
                    </h1>
                @endif

            </section>

        </section>


    </section>

</x-app-layout>
