<script>
    function clear_filter() {
        window.location.href = @json(route(Route::currentRouteName(), request()->route()->parameters()));
    }
</script>


<section class="px-4">
    <form action="{{ route(Route::currentRouteName(), request()->route()->parameters()) }}" method="GET">

        <h1 class="text-2xl uppercase">Filtros</h1>

        <section class="flex flex-col gap-y-4 mt-4" x-data="{ active: true }">

            <input type="search" class="focus:outline-none border-b border-gray-400 px-4 py-2" placeholder="Pesquise aqui"
                name="search" value="{{ request()->search ?? '' }}">

            <x-dropdown class="w-full" :active="'true'" :icon="'true'">
                <x-slot name="trigger">
                    <div class="uppercase py-2">Categoria</div>
                </x-slot>

                <x-slot name="content">

                    <section class="flex flex-col gap-y-2">
                        @foreach ($categories as $category)
                            <a href="{{ route('collection', ['id' => $category->id]) }}"
                                class="hover:text-[#024873] px-2 text-gray-600">{{ $category->name }}</a>
                        @endforeach
                    </section>

                </x-slot>
            </x-dropdown>

            <hr class="border-gray-400">

            <x-dropdown class="w-full" :active="'true'" :icon="'true'">
                <x-slot name="trigger">
                    <div class="uppercase py-2">Coleções</div>
                </x-slot>

                <x-slot name="content">

                    <section class="flex flex-col gap-y-2">
                        @foreach ($collections as $collection)
                            <a href="{{ route('collection', ['id' => $collection->id]) }}"
                                class="hover:text-[#024873] px-2 text-gray-600">{{ $collection->name }}</a>
                        @endforeach
                    </section>

                </x-slot>
            </x-dropdown>

            <hr class="border-gray-400">

            <x-dropdown class="w-full" :active="'true'" :icon="'true'">
                <x-slot name="trigger">
                    <div class="uppercase py-2">Por Preço</div>
                </x-slot>

                <x-slot name="content" class="px-2 text-gray-600">

                    @foreach (['min_price=1&max_price=99' => 'R$ 1,00 - R$ 99,99', 'min_price=100&max_price=199' => 'R$ 100,00 - R$ 199,99', 'min_price=200&max_price=299' => 'R$ 200,00 - R$ 299,99', 'min_price=300&max_price=399' => 'R$ 300,00 - R$ 399,99'] as $value => $name)
                        <div class="flex mt-1 gap-x-2">
                            <input type="radio" name="price" value="{{ $value }}"
                                @checked(request('price') == $value)>
                            <label class="block w-full px-2 content-center ">{{ $name }}</label>
                        </div>
                    @endforeach

                </x-slot>
            </x-dropdown>

            <hr class="border-gray-400">

            <x-dropdown class="w-full" :active="'true'" :icon="'true'" :hover="'false'">
                <x-slot name="trigger">
                    <div class="uppercase py-2">Order por</div>
                </x-slot>

                <x-slot name="content" class="px-2 text-gray-600">

                    @foreach (['latest' => 'Mais recente', 'oldest' => 'Mais antigo', 'lowest' => 'Menor preço', 'highest' => 'Maior preço'] as $order => $name)
                        <div class="flex mt-1 gap-x-2">
                            <input type="radio" name="order" value="{{ $order }}"
                                @checked($order == request('order'))>
                            <label class="block w-full px-2 content-center ">{{ $name }}</label>
                        </div>
                    @endforeach


                </x-slot>
            </x-dropdown>

        </section>

        <section class="flex flex-row gap-x-2 mt-10 ">
            <x-filter-button class="w-1/2" type="submit">Aplicar</x-filter-button>
            <x-filter-button class="w-1/2" type="button" onclick="clear_filter()">Limpar</x-filter-button>
        </section>
    </form>
</section>
