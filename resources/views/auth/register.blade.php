@extends('layouts.signedProfile')

@section('title_page', 'Registro')

@section('form')
    <section class="flex">
        <form action="" class="max-w-[500px] w-[90%] m-auto">
            <h1 class="text-xl text-center font-semibold">Disfruta ahora de esta experiencia gratuita de los
                cursos que
                siempre quisiste
                tomar
            </h1>
            <label class="relative flex flex-col py-8" for="">
                <input class="peer/nombre border-0 outline outline-1 outline-gray-700 rounded-lg" type="text"
                    placeholder=" " />
                <span
                    class="absolute top-[15px] translate-y-[-50%] left-5 text-gray-700 transition-all duration-500 peer-placeholder-shown/nombre:top-[50%] peer-placeholder-shown/nombre:text-gray-400">Nombre
                    de
                    usuario</span>
            </label>
        </form>
        <img width="500" src="{{ asset('svgs/sign.svg') }}" alt="">
    </section>
@endsection
