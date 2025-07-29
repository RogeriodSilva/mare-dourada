<x-app-layout>

    <section class="min-h-screen p-5 mt-12">

        <section class="md:w-[80%] mx-auto mb-4 flex items-center flex-row justify-between ">
            <h1 class="text-2xl font-bold">Carrinho</h1>

            <section class="flex flex-row gap-x-4 text-lg font-sans ">
                <span>
                    Total: R$ {{ number_format(Cart::total(), 2, ',', '.') }}
                </span>

                <section class="flex items-center">
                    <a href="{{ route('cart.clear') }}">
                        <x-ionicon-trash-outline class="w-5 h-5 text-red-500" />
                    </a>

                </section>

            </section>
        </section>

        <section class="flex flex-col gap-y-4">

            {{-- @dd(Cart::content()) --}}

            @forelse (Cart::content() as $id => $item)
                <section
                    class="flex md:w-[80%] mx-auto flex-row shadow-md border border-gray-200 rounded-lg overflow-hidden">
                    <section>
                        <img class="w-32" src="{{ asset($item->getMeta()['image']) }}" alt="">
                    </section>

                    <section class="flex  flex-row justify-between w-full ">
                        <section class="m-5 flex flex-col gap-y-2 font-sans">

                            <a class="text-lg"
                                href="{{ route('product.view', ['id' => $item->getId()]) }}">{{ $item->getName() }}
                            </a>

                            <section>
                                <h1 class="text-lg">R$ {{ number_format($item->getPrice() * $item->getQuantity(), 2, ',', '.') }}</h1>  
                                <h1 class="">R$ {{ number_format($item->getPrice(), 2, ',', '.') }} - x{{ $item->getQuantity() }}</h1>
                            </section>

                        </section>

                        <section class="flex items-center mx-5">
                            <a href="{{ route('cart.remove', ['id' => $id]) }}">
                                <x-ionicon-trash-outline class="w-5 h-5 text-red-500" />
                            </a>
                        </section>
                    </section>
                </section>

            @empty
                <section class="h-full flex flex-col justify-center items-center ">
                    <h1 class="text-2xl text-center justify-self-center">Nenhum produto no carrinho</h1>
                    <p>
                        <a href="{{ route('home') }}" class="text-[#024873]"> Ir as compras!</a>
                    </p>
                </section>
            @endforelse

        </section>


    </section>

</x-app-layout>
