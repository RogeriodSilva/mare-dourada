{{--
<section>
    <section {{ $attributes->merge(['class' => 'relative overflow-hidden']) }}>

        <section class="absolute top-0 left-0 right-0 bottom-0 bg-black/25">

            <section class="flex h-full mx-[10%] items-center justify-{{ $align }}">

                <section
                    {{ $card_content->attributes->merge([
                        'class' => ' p-8 ' . $width . ' text-' . ($align == 'end' ? 'right' : 'left'),
                    ]) }}>

                    {{ $card_content }}

                </section>

            </section>

        </section>

        <section>
            <img {{ $image->attributes->merge([
                'class' => 'w-full h-[400px] object-cover',
            ]) }} alt="">
        </section>

    </section>

</section> --}}


<div class="relative h-[400px] mb-8">

    <section class="w-full h-full">
        <img {{ $image->attributes->merge(['class' => 'w-full h-full object-cover']) }} alt=""
            {{ $attributes }}>
    </section>


    <section class="z-20 absolute top-0 left-0 right-0 bottom-0">

        <section class="w-full h-full grid items-center px-[10%]">
            <section>
                {{ $content }}
            </section>
        </section>

    </section>

</div>
