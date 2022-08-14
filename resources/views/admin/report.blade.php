@extends('layouts.app')

@section('title','Home Admin')

@section('content')


    <div>
        <h1 class="text-5xl text-center">Reportes </h1>
        <div class="flex">
            <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg form-container">
                <form class="mt-4" method="POST" action="{{route('get_report.index') }}">
                    @csrf
                    <label for="email">Enfermedad</label>
                    <select name="illness" id=""
                            class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
                        <option value="covid">covid</option>
                        <option value="viruela">Viruela del mono</option>
                        <option value="covid_variant">Variante de Covid</option>
                    </select>
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
                @if(isset($report['illness']))
                    <p>Personas que padecen {{ $report['illness'] }} : {{ $report['persons'] }}
                        de {{ $report['total'] }} </p>
                    <p>Esto equivale al {{$report['stats']}} % de los usuarios registrados</p>
                @elseif(isset($report['symp']))
                    <p>Personas {{ $report['symp'] }} : {{ $report['persons'] }} de {{ $report['total'] }}</p>
                    <p>Esto equivale al {{$report['stats']}} % de los enfermos registrados</p>
                @endif
            </div>
            <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg form-container">
                <form class="mt-4" method="POST" action="{{route('get_report.index') }}">
                    @csrf
                    <label for="symp">Sintomas</label>
                    <select name="symp" id=""
                            class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
                        <option value="diagnostic">Diagnosticado</option>
                        <option value="attented">Previamente atendido</option>
                        <option value="fever">Fiebre</option>
                        <option value="skin_rashes">Erupciones de piel</option>
                        <option value="muscleaches">Dolores musculares</option>
                        <option value="cough">Tos</option>
                        <option value="headaches">Dolores de cabeza</option>
                        <option value="vomit">Vomitos</option>
                        <option value="extra_symptoms">Sintomas extra</option>
                    </select>
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