<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Login Metálicas Fuel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css" media="screen" title="no title" charset="utf-8" />
    </head>
    <body class>
        <div class="lg:flex">
            <div class="lg:w-1/2 xl:max-w-screen-sm">
                <div class="py-12 bg-indigo-100 lg:bg-white flex justify-center lg:justify-start lg:px-12">
                    <div class="cursor-pointer flex items-center">
                        <div>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                    <h2 class="text-center text-4xl text-blue-900 font-display font-semibold lg:text-left xl:text-5xl
                    xl:text-bold">Acceder</h2>
                    <div class="mt-12">

                        <x-jet-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Correo electrónico</div>
                                <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-blue-900" name="email" id="email" type="email" placeholder="usuario@gmail.com">
                            </div>
                            <div class="mt-8">
                                <div class="flex justify-between items-center">
                                    <div class="text-sm font-bold text-gray-700 tracking-wide">
                                        Contraseña
                                    </div>
                                    <div>
                                        @if (Route::has('password.request'))
                                            <a class="text-xs font-display font-semibold text-blue-600 hover:text-blue-800
                                            cursor-pointer" href="{{ route('password.request') }}">
                                                ¿Olvidaste tu contraseña?
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500" name="password" id="password" type="password" placeholder="Ingrese su contraseña">
                            </div>
                            <div class="mt-10">
                                <button class="bg-black text-gray-100 p-4 w-full rounded-full tracking-wide
                                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-blue-600
                                shadow-lg">
                                    iniciar sesión
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="hidden lg:flex items-center justify-center bg-gray-100 flex-1 h-screen">
                <div class="max-w-xl transform duration-200 hover:scale-110 cursor-pointer">
                    <img src="images/imag1.jpg" class="bg-contain">
                </div>
            </div>
        </div>
    </body>
</html>
