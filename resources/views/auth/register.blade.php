@extends('layouts.app')

@section('title','Register')

@section('content')

    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
        <h1 class="text-3xl text-center font-bold">Register</h1>
        <form class="mt-4" method="POST" action="">
            @csrf
            <label for="email">Email</label>
            <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" name="email">

            <label for="first_name">Nombres</label>
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombres" name="first_name">

            <label for="last_name">Apellidos</label>
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Apellidos" name="last_name">
            <label for="teenager">Eres menor de edad?<input type="checkbox" class="border border-gray-200 rounded-md bg-gray-200 ml-10 text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="teenager" name="teenager">
            </label>

            <label for="personal_id">Cedula</label>
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Cedula" name="personal_id">

            <label for="address">Direccion</label>
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Direccion" name="address">

            <label for="state">Estado</label>
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Estado" name="state">

            <label for="password">Contraseña</label>
            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" name="password">

            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Confirmar Contraseña" name="password_confirmation">


            <button type="submit" class="rounded-mg bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600"> Registrarse </button>
        </form>

        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <p class="border border-red-500 rounded-mg bg-red-100 w-full text-red-600 p-2 my-2"> {{ $error }}</p>
                @endforeach
            </div>
        @endif

    </div>

@endsection