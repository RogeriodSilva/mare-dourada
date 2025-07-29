
<div class="w-full lg:w-1/2 h-full p-10 justify-center items-center bg-[#024873]/60 text-white transition ease-in-out duration-300"
    x-show=" window.innerWidth > 830 || {{ $model == 'login' ? '!mode' : 'mode' }}">

    <form class="h-full" action="{{ route('auth.' . $model) }}" method="POST">
        @csrf

        <section class="h-full flex justify-center flex-col gap-y-8 ">

            <section class="flex flex-col md:flex-row gap-x-8 gap-y-4 justify-center w-full ">
                <section class="flex justify-center">
                    <x-application-logo class="w-48 invert" />
                </section>
                <div class="hidden md:block border-r border-l border-white"></div>

                <h1 class="hidden md:flex items-center text-center f-corm font-bold text-3xl">{{ $title }}</h1>

            </section>

            <section class="flex flex-col gap-y-4 w-full">
                {{ $form }}
            </section>

            <section class="flex justify-between w-full">
                <section class="text-sm relative w-full">

                    <span class="absolute left-0 bottom-0 cursor-pointer hover:text-[#87CBF5]"
                        x-on:click="mode = !mode">
                        {{ $model == 'login' ? 'Novo por aqui? Cadastre-se!' : 'Já é cadastrado? Entre!' }}
                    </span>

                </section>

                <x-primary-button>
                    {{ $model == 'login' ? 'Entrar' : 'Cadastrar' }}
                </x-primary-button>
            </section>

        </section>

    </form>

</div>
