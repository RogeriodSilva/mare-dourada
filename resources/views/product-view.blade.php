<x-app-layout>

    <section class="my-12 flex justify-center items-center">

        <section class=" grid grid-cols-1 gap-y-8 md:grid-cols-2 md:max-w-5xl mx-auto">
            <section class="overflow-hidden">
                <img
                    src="{{ asset('img/products/' . Str::slug($product->collection->name) . '/' . $product->slug . '.png') }}">
            </section>

            <section class="px-4 flex flex-col gap-y-6 relative">
                <section>
                    <h1 class="text-3xl f-ivy font-bold uppercase mb-4">{{ $product->name }}</h1>

                    <p class="flex flex-row gap-x-1 text-sm uppercase">
                        <a href="#">{{ $product->category->name }}</a>
                        <span class="font-bold">/</span>
                        <a href="#">{{ $product->collection->name }}</a>
                    </p>

                </section>

                <section>
                    <h1 class="text-3xl font-sans font-italic">R$ {{ number_format($product->price, 2, ',', '.') }}</h1>
                </section>

                <section class="flex flex-col gap-y-4">
                    <p class="text-justify">
                        {{ $product->description }}
                    </p>

                    <p class="text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id inventore vel sed, odio omnis
                        expedita, at saepe veritatis commodi natus odit reiciendis ea amet error rem repellat ullam
                        nostrum exercitationem!
                    </p>

                    <p class="text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id inventore vel sed, odio omnis
                        expedita, at saepe veritatis commodi natus odit reiciendis ea amet error rem repellat ullam
                        nostrum exercitationem!
                    </p>

                </section>

                <section class="md:absolute bottom-25">
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf

                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <section x-data="{ quantity: 1 }"
                            class="flex flex-col gap-y-4 md:flex-row gap-x-4 items-stretch justify-between">

                            <section
                                class="flex font-sans justify-between bg-gray-200 text-xl border-b border-[#024873] h-full w-full">
                                <button type="button" class="w-1/3 text-3xl" x-on:click="quantity++">+</button>

                                <input type="number" name="quantity" x-model="quantity" value="1" min="1"
                                    class="text-center w-4/3 focus:outline-none">

                                <button type="button" class="w-1/3 text-3xl"
                                    x-on:click="if(quantity > 1) quantity--">-</button>
                            </section>

                            <button
                                class="bg-[#024873] text-white py-2 h-full w-full text-center text-xl md:text-[16px] px-2 uppercase">Adicionar
                                ao carrinho</button>
                        </section>
                    </form>
                </section>

            </section>

        </section>
    </section>


    <x-slot name="footer">
        @include('layouts.footer')
    </x-slot>
</x-app-layout>
