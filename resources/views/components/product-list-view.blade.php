@props(['product', 'limitname' => $limitename ?? 3000])

<a href="{{ route('product.view', ['id' => $product->id]) }}"
    {{ $attributes->merge(['class' => 'flex flex-col gap-y-4 transform hover:scale-[1.025]  transition duration-300 ease-in-out']) }}
    @include('components.transition')>

    <section>
        <img src="{{ asset('img/products/' . Str::slug($product->collection->name) . '/' . $product->slug . '.png') }}"
            alt="">
    </section>

    <section class="flex flex-col gap-y-5">
        <section class="flex flex-col gap-y-2">
            <h1 class="f-ivy text-xl uppercase text-[#024873] text-center">{{ Str::limit($product->name, $limitname) }}</h1>
            <h1 class="f-filosofia uppercase text-md text-gray-600 text-center">{{ $product->collection->name }}</h1>
        </section>
        <section class="font-sans">
            <h1 class="uppercase text-xl text-center">R$ {{ number_format($product->price, 2, ',', '.') }}</h1>
            </h1>
        </section>
    </section>

    <section class="mt-5">

        <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="quantity" value="1">

            <button
                class="cursor-pointer f-ivy uppercase w-full text-gray-400 border-b border-gray-400 transform hover:scale-[1.025] transition duration-300 ease-in-out text-black p-2 hover:text-black  hover:border-black">Adicionar
                ao carrinho</button>

        </form>

    </section>

</a>
