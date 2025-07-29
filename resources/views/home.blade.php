<x-app-layout>

    <x-slot name="footer">
        @include('layouts.footer')
    </x-slot>

    <x-slot name="header">
        <section x-data="carousel()" x-init="startAutoSlide()" class="relative w-full h-[400px] mx-auto">

            <!-- Imagem com nome da coleção -->
            <div class="w-full h-full relative overflow-hidden shadow-lg">
                <template x-for="(collection, index) in collections" :key="collection.id">
                    <div x-show="index === current" x-transition class="absolute inset-0">
                        <img :src="'/img/collections/' + collection.slug + '.png'" :alt="collection.name"
                            class="w-full h-full object-cover" />

                        <div class="absolute inset-0 bg-black/50"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <span
                                class="text-white f-ivy md:text-4xl text-xl text-center uppercase font-semibold px-4 py-2 rounded">
                                <span x-text="collection.name"></span>
                            </span>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Botão anterior -->
            <button @click="prev"
                class="absolute left-2 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/60 text-white p-2 rounded-full">
                <x-ionicon-chevron-back-outline class="w-6 h-6" />
            </button>

            <!-- Botão próximo -->
            <button @click="next"
                class="absolute right-2 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/60 text-white p-2 rounded-full">
                <x-ionicon-chevron-forward-outline class="w-6 h-6" />
            </button>
        </section>
    </x-slot>

    <section class="min-h-screen mx-auto my-12">

        <section class="max-w-[60%] mx-auto">
            @foreach ($collections as $collection)
                @php
                    $names = ['Garota do Mar', 'Primavera Dourada', 'Sereia da Tarde'];

                    $index = array_search($collection->name, $names);
                @endphp

                @if (in_array($collection->name, $names))
                    <section class="mb-25 flex flex-col gap-y-12">

                        <section class="grid grid-cols-3 gap-x-4 ">

                            @if ($index % 2 == 0)
                                <section class="w-[400px] h-[400px] overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        src="{{ asset('img/collections/' . $collection->slug . '.png') }}"
                                        alt="">
                                </section>
                            @endif

                            <section class="flex flex-col justify-center gap-y-2 items-center col-span-2">
                                <h1>Perfumes</h1>
                                <h1 class="f-ivy text-3xl">Coleção {{ $collection->name }}</h1>
                                <a href="{{ route('collection', ['id' => $collection->id]) }}"
                                    class="border-b px-4 border-gray-600 hover:text-[#024873] hover:scale-105 transition duration-300 ease-in-out">Conheça</a>
                            </section>


                            @if ($index % 2 == 1)
                                <section class="w-[400px] h-[400px] overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        src="{{ asset('img/collections/' . $collection->slug . '.png') }}"
                                        alt="">
                                </section>
                            @endif

                        </section>

                        <h1 class="f-ivy text-2xl text-center uppercase">Destaques da coleção {{ $collection->name }}
                        </h1>

                        <section>
                            <section class="w-[80%] mx-auto grid grid-cols-3 gap-x-4 ">
                                @foreach ($collection->products as $index => $product)
                                    @if ($index < 3)
                                        <x-product-list-view :product="$product" :limitname="15" />
                                    @endif
                                @endforeach
                            </section>
                        </section>

                    </section>
                @endif
            @endforeach
        </section>

       

    </section>

    <!-- Alpine.js script -->
    <script>
        function carousel() {
            return {
                current: 0,
                collections: @json($collections),
                get total() {
                    return this.collections.length;
                },
                next() {
                    this.current = (this.current + 1) % this.total;
                },
                prev() {
                    this.current = (this.current - 1 + this.total) % this.total;
                },
                startAutoSlide() {
                    setInterval(() => {
                        this.next();
                    }, 5000); // troca a cada 5 segundos
                }
            }
        }
    </script>


</x-app-layout>
