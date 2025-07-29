<x-guest-layout>
    <section class="h-screen bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('img/website/background-auth.jpg') }}')">

        <div class="absolute inset-0 bg-blue-500 mix-blend-multiply opacity-60"></div>

        <div class="w-full h-full backdrop-blur-md flex items-center justify-center">

            @php
                $mode = 'false';

                if (session('mode')) {
                    $mode = session('mode') === 'login' ? 'false' : 'true';
                }
            @endphp

            <div class="w-[90%] md:w-[50%] md:h-[70%] rounded-lg overflow-hidden relative" x-data="{ mode: {{ $mode }} }">

                {{-- Image Card --}}
                <section
                    class="hidden lg:block w-1/2 absolute top-0 bottom-0 bg-white transition-all duration-500 ease-in-out z-20"
                    :class="{
                        'translate-x-0': mode,
                        'translate-x-full': !mode
                    }">
                    <img class="h-full w-full" src="{{ asset('img/website/image-auth.jpg') }}" alt="">
                </section>

                {{-- Forms --}}
                <section class="flex flex-col lg:flex-row h-full">

                    {{-- Login --}}
                    <x-auth-form :model="'login'" :title="'Login'">
                        <x-slot name="form">
                            <section>
                                <x-auth-input type="email" placeholder="E-mail" name="email"
                                    value="{{ old('email') }}" />
                            </section>

                            <section>
                                <x-auth-input type="password" placeholder="Senha" name="password" />
                            </section>

                            @if (session('login_error'))
                                <div class="text-xs pt-2 px-2">
                                    {{ session('login_error') }}
                                </div>
                            @endif
                        </x-slot>
                    </x-auth-form>

                    {{-- Register --}}
                    <x-auth-form :model="'register'" :title="'Cadastro'">
                        <x-slot name="form">

                            <section>
                                <x-auth-input type="text" placeholder="Nome" name="name"
                                    value="{{ old('name') }}" />

                                @if ($errors->has('name'))
                                    <div class="text-xs pt-2 px-2">*{{ $errors->first('name') }}</div>
                                @endif

                            </section>

                            <section>
                                <x-auth-input type="text" placeholder="Sobrenome" name="lastname"
                                    value="{{ old('lastname') }}" />

                                @if ($errors->has('lastname'))
                                    <div class="text-xs pt-2 px-2">*{{ $errors->first('lastname') }}</div>
                                @endif

                            </section>

                            <section>
                                <x-auth-input type="email" placeholder="E-mail" name="email"
                                    value="{{ old('email') }}" />

                                @if ($errors->has('email'))
                                    <div class="text-xs pt-2 px-2">*{{ $errors->first('email') }}</div>
                                @endif

                            </section>

                            <section>
                                <x-auth-input type="password" placeholder="Senha" name="password" />

                                @if ($errors->has('password'))
                                    <div class="text-xs pt-2 px-2">*{{ $errors->first('password') }}</div>
                                @endif
                            </section>

                            <section>

                                <x-auth-input type="password" placeholder="Confirme a senha" name="password_confirm" />

                                @if ($errors->has('password_confirm'))
                                    <div class="text-xs pt-5 px-2">*{{ $errors->first('password_confirm') }}</div>
                                @endif

                            </section>

                        </x-slot>

                    </x-auth-form>
                </section>


            </div>

        </div>

    </section>
</x-guest-layout>
