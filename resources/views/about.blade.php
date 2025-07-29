<x-app-layout>
    <x-slot name="header">

        <x-header-image>

            <x-slot name="image" class="" src="{{ asset('img/website/about/header.png') }}">

            </x-slot>

            <x-slot name="content">

                <section class="bg-white p-8 max-w-96 min-h-64 shadow-lg justify-self-start">
                    <h1 class="text-2xl font-bold uppercase f-ivy mb-5">Sobre a Maré Dourada</h1>
                    <p class="text-sm text-justify">
                        Nosso propósito é ampliar acesso à arte da perfumaria oferecendo produtos diferenciados e de
                        qualidade para despertar seus sentidos com uma experiência sensorial incrível, espalhando
                        realizações, sonhos e desejos. Explore seus sentidos com a In The Box e espalhe o melhor de
                        você.
                    </p>
                </section>

            </x-slot>
        </x-header-image>

    </x-slot>


    <section class="max-w-6xl mx-auto">
        <section class="grid gap-y-8">

            <section class="grid grid-cols-2 gap-x-12">

                <section>
                    <h1 class=" font-bold text-3xl mb-8 f-ivy">
                        Perfumes de alta qualidade para perfumar a sua vida
                    </h1>
                    <p class="text-justify">
                        A Maré Dourada é uma marca de perfumes e cosméticos produzidos com matérias-primas
                        de alta qualidade.
                        Surgimos para trazer aos consumidores produtos de excelente qualidade com preço justo. Mais
                        importante
                        que isso, a Maré Dourada tem como objetivo trazer acesso à perfumaria, com novos cheiros, novos
                        conceitos
                        e ideias criativas, rompendo as barreiras limitadoras do mercado para sempre oferecer produtos
                        diferenciados aos seus clientes. Prezando pelo compromisso com nossos clientes e em respeito as
                        normas
                        de Agência Nacional de Vigilância Sanitária, todos os nossos produtos possuem registro na ANVISA
                        e
                        estão
                        em conformidade em suas formulações, ingredientes e alergênicos permitidos.

                    </p>
                </section>

                <section class="flex flex-col py-8 justify-between ">
                    <section>
                        <label class="text-xl font-semibold uppercase f-ivy ">Nossa Missão</label>
                        <p>Perfumar a vida das pessoas com produtos de alta qualidade.</p>
                    </section>

                    <section>
                        <label class="text-xl  uppercase font-semibold  f-ivy ">Visão</label>
                        <p>Gerar acesso à perfumaria oferecendo para o mercado uma nova opção em perfumes.</p>
                    </section>

                    <section>
                        <label class="text-xl  uppercase font-semibold  f-ivy ">Valores</label>
                        <p>Foco relacionamento e atendimento ao cliente, atuando com ética e carinho para entregar
                            qualidade
                            em
                            nossos produtos.</p>
                    </section>
                </section>

            </section>

            <section>
                <h1 class="text-2xl f-ivy mb-4">Estamos Localizados</h1>

                <iframe class="w-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.03769386502!2d-44.19645632477206!3d-19.964916981431372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6eaa73c6d609f%3A0xd61a7f12deb82d4a!2sSESI%20SENAI%20Betim%20Maria%20Madalena%20Nogueira!5e0!3m2!1spt-BR!2sbr!4v1753116552434!5m2!1spt-BR!2sbr"
                    height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </section>

            <section class="grid grid-cols-2 gap-x-12 my-8">

                <section class="flex justify-center">
                    <x-application-logo class="w-64" />
                </section>

                <section class="flex flex-col justify-center text-2xl f-ivy">
                    <p class="text-right">"Sinta o frescor das ondas, viva a elegância do aroma"</p>
                    <p class="text-right">~ Maré Dourada</p>
                </section>
            </section>

        </section>

    </section>

    {{-- <section class="flex flex-col gap-y-4 text-md my-12">
        <section class="flex flex-col gap-y-8">
            <h1 class="text-center font-bold text-3xl mt-6">Perfumes de alta qualidade para perfumar a sua
                vida</h1>

            <p class="text-justify">A Maré Dourada é uma marca de perfumes e cosméticos produzidos com matérias-primas
                de alta qualidade.
                Surgimos para trazer aos consumidores produtos de excelente qualidade com preço justo. Mais importante
                que isso, a Maré Dourada tem como objetivo trazer acesso à perfumaria, com novos cheiros, novos
                conceitos
                e ideias criativas, rompendo as barreiras limitadoras do mercado para sempre oferecer produtos
                diferenciados aos seus clientes. Prezando pelo compromisso com nossos clientes e em respeito as normas
                de Agência Nacional de Vigilância Sanitária, todos os nossos produtos possuem registro na ANVISA e estão
                em conformidade em suas formulações, ingredientes e alergênicos permitidos.

            </p>
        </section>
        <hr class="border-gray-400">

        <section class="grid grid-cols-2 gap-y-5">
            <section class="flex justify-center items-center">
                <x-application-logo class="w-[285px]" />
            </section>
            <section class="flex flex-col gap-y-8">
                <section>
                    <label class="text-lg uppercase border-b">Nossa Missão</label>
                    <p>Perfumar a vida das pessoas com produtos de alta qualidade.</p>
                </section>

                <section>
                    <label class="text-lg  uppercase border-b">Visão</label>
                    <p>Gerar acesso à perfumaria oferecendo para o mercado uma nova opção em perfumes.</p>
                </section>

                <section>
                    <label class="text-lg  uppercase border-b">Valores</label>
                    <p>Foco relacionamento e atendimento ao cliente, atuando com ética e carinho para entregar qualidade
                        em
                        nossos produtos.</p>
                </section>
            </section>


        </section>

        <hr class="border-gray-400">

        <section class="flex grid grid-cols-2 gap-y-1" id="mapa">

            <section>
                <h1 class="text-lg uppercase font-bold">Fale conosco</h1>
                <p class="text-left">sac@maredourada.com.br</p>
                <p> SAC - (31) 99999-9999</p>
            </section>

            <section>
                <h1 class="text-lg uppercase font-bold ">Estamos localizados em</h1>
                <p>Av. Amazonas, 55 - Centro, Betim - MG, 32600-075</p>
                <p>SENAI Betim Maria Madalena Nogueira</p>
            </section>

            <section class="col-span-2 mt-4">
                <iframe class="w-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.03769386502!2d-44.19645632477206!3d-19.964916981431372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6eaa73c6d609f%3A0xd61a7f12deb82d4a!2sSESI%20SENAI%20Betim%20Maria%20Madalena%20Nogueira!5e0!3m2!1spt-BR!2sbr!4v1753116552434!5m2!1spt-BR!2sbr"
                    height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </section>

        </section>
    </section> --}}

    <x-slot name="footer">
        @include('layouts.footer')
    </x-slot>

</x-app-layout>
