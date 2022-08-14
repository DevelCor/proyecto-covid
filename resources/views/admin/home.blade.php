@extends('layouts.app')

@section('title','Home Admin')

@section('content')

    <div>
        <h1 class="text-5xl text-center">Admin Panel</h1>
        <p class=" text-1 text-center mt-10">Puede buscar por email especifco o usuario ya existente</p>
        <div class="flex">
            <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg form-container">
                <form class="mt-4" method="POST" action="{{route('get_users') }}">
                    @csrf
                    <label for="email">Email</label>
                    <input type="email"
                           class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
                           placeholder="Email" name="email">
                    <button type="submit"
                            class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">
                        Buscar
                    </button>
                </form>
            </div>
            <div class="block mx-auto my-12 p-8 bg-white w-1/4 border border-gray-200 rounded-lg shadow-lg">
                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                            <p class="border border-red-500 rounded-mg bg-red-100 w-full text-red-600 p-2 my-2"> {{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                @if(isset($users))
                    @foreach($users as $user)
                        <p>Nombre: {{$user->first_name}} {{$user->last_name}}</p>
                        <p>Email: {{$user->email}}</p>
                        <p>cedula: {{$user->persoanl_id}}</p>
                        <p>adolecente: {{$user->persoanl_id === 1 ? 'si' : 'no'}}</p>
                        <p>Municipio: {{$user->municipality}}</p>
                        <p>Localidad: {{$user->address}}</p>
                        <p>Direccion exacta: {{$user->exact_address}}</p>
                            <br>
                        <h5>Reportes del usuario: </h5>
                        @if(isset($illness))
                            @foreach($illness as $item)
                                <div class="my-3 p-2 bg-blue-100 border-gray-200 rounded-lg ">
                                    <p>Enfermedad: {{($item->name)}}</p>
                                    <p>Diagnosticada: {{ $item->diagnostic === 1 ? 'si' : 'no' }}</p>
                                    <p>Previamente atendido: {{$item->attented === 1 ? 'si' : 'no' }}</p>
                                    <p>Fiebre: {{$item->fever === 1 ? 'si' : 'no'}}</p>
                                    <p>Erupciones de piel: {{$item->skin_rashes === 1 ? 'si' : 'no'}}</p>
                                    <p>Dolores musculares: {{$item->muscleaches === 1 ? 'si' : 'no'}}</p>
                                    <p>Tos: {{$item->cough === 1 ? 'si' : 'no'}}</p>
                                    <p>Dolores de cabeza: {{$item->headaches === 1 ? 'si' : 'no'}}</p>
                                    <p>Vomitos: {{$item->vomit === 1 ? 'si' : 'no'}}</p>
                                    <p>Sintomas extras del paciente: {{$item->extra_symptoms}}</p>
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                @endif
            </div>
            <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg form-container">
                <form class="mt-4" method="POST" action="{{route('get_users') }}">
                    @csrf
                    <label for="email">Usuarios</label>
                    @if(isset($users_form))
                        <select name="email" id=""
                                class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
                            @foreach($users_form as $user)
                                <option value="{{$user->email}}">{{$user->email}}</option>
                            @endforeach
                        </select>
                    @endif
                    <button type="submit"
                            class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">
                        Buscar
                    </button>
                </form>
            </div>
        </div>
    </div>

    <style>
        .form-container {
            max-height: 236px;
        }
    </style>
@endsection