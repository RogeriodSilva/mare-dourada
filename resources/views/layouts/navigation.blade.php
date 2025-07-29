<section class=" bg-white py-4">
    {{-- Desktop --}}

    <section class="hidden md:block mx-auto container">
        <section class=" md:grid grid-cols-4 items-center">

            <section class="flex flex-row gap-x-8 items-center" x-data="{ hover: true }">
                <x-application-logo class="w-40 z-20" />


                <x-dropdown>
                    <x-slot name="trigger">
                        <section>
                            <h1 class="text-gray-600 hover:text-[#024873] px-4">
                                Coleções
                            </h1>
                        </section>
                    </x-slot>

                    <x-slot name="content">
                        <section
                            class="bg-white absolute top-full rounded-sm w-[200px] flex flex-col gap-y-2 border border-gray-200 shadow-md px-4 py-2">
                            @foreach ($collections as $collection)
                                <a href="{{ route('collection', ['id' => $collection->id]) }}"
                                    class="hover:text-[#024873]">{{ $collection->name }}</a>
                            @endforeach
                        </section>
                    </x-slot>

                </x-dropdown>
            </section>

            <section class="col-span-2">
                <form action="{{ route('products.list') }}" class="w-full relative" action="#" method="GET">
                    <div>
                        <input type="search" name="search" class="w-full rounded-full px-4 py-2 border outline-none"
                            placeholder="O que está procurando?"
                            value="{{ request()->search ?? ($product->name ?? '') }}">
                        <span>
                            <x-ionicon-search-outline class="w-6 h-6 absolute top-2 right-2" />
                        </span>
                    </div>
                </form>
            </section>

            <section class="flex flex-row gap-x-4 justify-end items-center" x-data="{ focusclose: true }">



                <x-nav-link href="{{ route('about') }}">
                    <x-ionicon-help-circle-outline class="w-6 h-6" /> <span>Sobre</span>
                </x-nav-link>

                <x-nav-link href="{{ route('cart') }}" class="relative ">
                    <x-ionicon-bag-outline class="w-6 h-6" />
                    <span
                        class="absolute -bottom-1 -right-1 bg-[#024873] w-5 font-sans h-4 text-xs flex items-center text-white rounded-full text-center">
                        <div class="w-full">{{ Cart::count() > 9 ? '9+' : Cart::count() }}</div>
                    </span>
                </x-nav-link>

                @if (Auth::check())
                    <x-dropdown>
                        <x-slot name="trigger">
                            <span>Olá, {{ Auth::user()->name }}</span>
                        </x-slot>

                        <x-slot name="content">

                            <section
                                class="absolute bg-white rounded-sm w-[150px] shadow-md border border-gray-400 top-full p-2">

                                <section class="flex flex-col gap-y-2">

                                    <div class="flex flex-row items-center gap-x-2">
                                        <x-ionicon-person-outline class="w-6 h-6" />
                                        <a href="{{ route('profile') }}">Perfil</a>
                                    </div>

                                    <div class="flex flex-row items-center gap-x-2 text-red-500">
                                        <x-ionicon-exit-outline class="w-6 h-6" />
                                        <a href="{{ route('auth.logout') }}">Sair</a>
                                    </div>

                                </section>

                            </section>

                        </x-slot>
                    </x-dropdown>
                @else
                    <x-nav-link href="{{ route('auth.index') }}">
                        <x-ionicon-person-outline class="w-6 h-6" />
                        <span>Entrar</span>
                    </x-nav-link>
                @endif

            </section>

        </section>
    </section>



    {{-- Mobile --}}
    <section class="md:hidden flex bg-white mx-4 ">

        <section class="grid grid-cols-3 items-center">
            <section>
                <button>
                    <x-ionicon-menu-outline class="w-8 h-8" />
                </button>
            </section>
            <section class="flex items-center justify-center">
                <x-application-logo class="w-64" />
            </section>

            <section class="flex items-center justify-end">
                <button>
                    <x-ionicon-search-outline class="w-8 h-8" />
                </button>
            </section>
        </section>


    </section>
</section>

{{-- Pesquisar --}}
{{-- <section class="absolute p-4 v inset-0 text-white top-0 left-0 right-0 bottom-0 bg-black/75">

    <form class="mt-20" action="#" method="GET">
        <div class="relative">
            <input type="search" name="search" class="w-full rounded-full px-4 py-2 border outline-none"
                placeholder="O que está procurando?">
            <span>
                <x-ionicon-search-outline class="w-6 h-6 absolute top-2 right-2" />
            </span>
        </div>
    </form>
</section> --}}
