<footer class="bg-black flex flex-row text-white min-h-20 mt-12 px-5 md:p-8 font-sans">

    <section class="grid grid-cols-1 text-sm md:text-md md:grid-cols-4 gap-4 py-2 w-full max-w-9/10 mx-auto">

        {{-- Logo --}}
        <section class="col-span-1 md:col-span-3 flex justify-center md:justify-start">
            <x-application-logo class="max-w-[200px]  invert" />
        </section>

        {{-- Rede Sociais --}}
        <section class="col-span-1 flex flex-row gap-x-6 justify-center md:justify-end text-2xl md:text-3xl">

            <a href="https://www.instagram.com/maredouradasaintz/" target="_blank">
                <x-ionicon-logo-instagram class="w-6 h-6" />
            </a>

            <a href="https://www.facebook.com/">
                <x-ionicon-logo-facebook class="w-6 h-6" />
            </a>

            <a href="https://www.x.com/">
                <x-ionicon-logo-twitter class="w-6 h-6" />
            </a>

            <a href="https://www.tiktok.com/">
                <x-ionicon-logo-tiktok class="w-6 h-6" />
            </a>

        </section>

        {{-- Anvias/Endereço --}}
        <section
            class=" md:col-span-2 lg:col-span-1 md:row-span-2 md:pe-5 pt-5 md:border-r-1 text-md text-justify flex flex-col gap-y-4 border-[#8C8B87]">
            <section class="flex flex-col gap-y-4 ">
                <p>
                    A MARÉ DOURADA produz perfumes de alta qualidade, com fragrâncias próprias e inspiradas em
                    grandes marcas e em conformidade com a ANVISA.
                </p>

                <p>
                    Av. Amazonas, 55 - Centro, Betim - MG, 32600-075
                </p>
            </section>

            <section class=" text-justify my-5 pe-5 flex flex-col gap-y-2 ">
                <h1 class="text-lg border-b-1 border-[#8C8B87] text-[#8C8B87]">Entre em contato</h1>
                <p>Nossa equipe aguarda seu contato em caso de dúvida ou suporte.</p>
                <section class="mt-2">
                    <p class="text-left">sac@maredourada.com.br</p>
                    <p> SAC - (31) 99999-9999</p>
                </section>
            </section>
        </section>

        {{-- Dropdown --}}
        <section class="flex flex-col md:grid md:px-5 md:grid-cols-3 md:gap-x-8 md:text-lg md:col-span-3 gap-y-4"
            x-data="{ active: window.innerWidth >= 768, canC: window.innerWidth <= 768 }">

            <x-dropdown>
                <x-slot name="trigger">
                    <h1 class="border-b border-gray-400 w-full uppercase text-md">Ajuda</h1>
                </x-slot>

                <x-slot name="content">
                    <section class="flex flex-col px-2 gap-y-2 text-[#727372]">
                        <a href="#">Acompanhe seu pedido</a>
                        <a href="#">Fale Conosco</a>
                        <a href="#">Perguntas Frequentes</a>
                        <a href="#">Prazo de Entrega</a>
                    </section>
                </x-slot>

            </x-dropdown>

            <x-dropdown>
                <x-slot name="trigger">
                    <h1 class="border-b border-gray-400 w-full uppercase text-md">Institucional</h1>
                </x-slot>

                <x-slot name="content">
                    <section class="flex flex-col px-2 gap-y-2 text-[#727372]">
                        <a href="{{ route('about') }}">Quem somos</a>
                        <a href="#">Nossas Lojas</a>
                        <a href="#">Causas Sociais</a>
                        <a href="{{ route('about') . '#mapa' }}">Nosso Endereço</a>
                    </section>
                </x-slot>

            </x-dropdown>

            <x-dropdown>

                <x-slot name="trigger">
                    <h1 class="border-b border-gray-400 w-full uppercase text-md">Nossa Política</h1>
                </x-slot>

                <x-slot name="content">
                    <section class="flex flex-col px-2 gap-y-2 text-[#727372]">
                        <a href="#">Termos de Uso</a>
                        <a href="#">Política de Entrega</a>
                        <a href="#">Política de Cookies</a>
                        <a href="#">Política de Privacidade</a>
                    </section>
                </x-slot>

            </x-dropdown>


        </section>

        {{-- Formas de pagamento --}}
        <section class="col-span-1 md:col-span-4 flex justify-center md:justify-end py-2    ">
            <section class="flex gap-x-4 justify-center">
                <img class="w-12" src="{{ asset('img/website/payment-icons/mastercard.png') }}">
                <img class="w-12" src="{{ asset('img/website/payment-icons/visa.png') }}">
                <img class="w-12" src="{{ asset('img/website/payment-icons/paypal.png') }}">
                <img class="w-12" src="{{ asset('img/website/payment-icons/american-express.png') }}">
                <img class="w-12" src="{{ asset('img/website/payment-icons/pix.png') }}">
            </section>
        </section>

        {{-- Copyright --}}
        <section class="col-span-1 md:col-span-4 text-xs text-justify">
            Copyright © 2025 Maré Dourada é uma marca pertencente ao Maré Dourada Cosmético e Perfumaria
            Ltda, CNPJ 00.000.000/0001-01. 2025 todos os direitos reservados. Nossas plataformas digitais como
            site,
            página de Facebook e perfil de Instagram não possuem nenhum vínculo com marcas, fabricantes ou
            desenvolvedores citados como referências olfativas ou fonte de inspiração.
        </section>
    </section>


</footer>
