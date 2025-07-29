<x-app-layout>


    <x-slot name="header">

        <x-header-image>
            <x-slot name="image" src="{{ asset('img/collections/' . $collection->slug . '.png') }}"></x-slot>

            <x-slot name="content">

                <section class="text-white bg-black/30 rounded-lg p-4 justify-self-end f-ivy flex flex-col w-1/3">
                    <span class="text-3xl text-right">Coleção</span>
                    <h1 class="text-4xl font-bold uppercase text-right f-ivy text-white">
                        {{ $collection->name }}
                    </h1>
                </section>

            </x-slot>
        </x-header-image>

    </x-slot>

    <section class="min-h-screen mt-12">
        <section class="grid grid-cols-5">

            <section class="hidden md:block col-span-1">
                <x-filter-items></x-filter-items>

            </section>

            <section class="col-span-5 md:col-span-4 px-5" x-data="{ view: 8 }">

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

        <x-slot name="footer">
            @include('layouts.footer')
        </x-slot>

</x-app-layout>
