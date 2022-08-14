@extends('layouts.app')

@section('title','Home')

@section('content')

    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
        <h1 class="text-3xl text-center font-bold">Registro de enfermos</h1>
        <form class="mt-4" method="POST" action="">
            @csrf
            <label for="email">Enfermedad</label>
            <select name="illness" id="" class="border border-gray-200 rounded-md w-full bg-gray-200 text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
                <option value="covid">Covid</option>
                <option value="covid_variant">Variante del covid</option>
                <option value="viruela">Viruela del mono</option>
            </select>

            <div class="w-100">
                <label for="diagnostic" class="label_user_illness">
                    Ha sido diagnosticado? <input type="checkbox"  class="border border-gray-200 rounded-md bg-gray-200 ml-10 text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="diagnostic">
                </label>
            </div>

            <div class="w-100">
                <label for="attented" class="label_user_illness">
                    Ha sido atendido en un centro de salud? <input type="checkbox" class="border border-gray-200 rounded-md bg-gray-200 ml-10 text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="attented">
                </label>
            </div>

            <div class="w-100">
                <label for="fever" class="label_user_illness">
                    Ha tenido fiebre? <input type="checkbox" class="border border-gray-200 rounded-md bg-gray-200 ml-10 text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="fever">
                </label>
            </div>

            <div class="w-100">
                <label for="skin_rashes" class="label_user_illness">
                    Ha tenido erupciones en la piel? <input type="checkbox" class="border border-gray-200 rounded-md bg-gray-200 ml-10 text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="skin_rashes">
                </label>
            </div>

            <div class="w-100">
                <label for="cough" class="label_user_illness">
                    Ha tenido tos? <input type="checkbox" class="border border-gray-200 rounded-md bg-gray-200 ml-10 text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="cough">
                </label>
            </div>

            <div class="w-100">
                <label for="muscleaches" class="label_user_illness">
                    Ha tenido dolores musculares? <input type="checkbox" class="border border-gray-200 rounded-md bg-gray-200 ml-10 text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="muscleaches">
                </label>
            </div>

            <div class="w-100">
                <label for="headaches" class="label_user_illness">
                    Ha tenido dolores de cabeza? <input type="checkbox" class="border border-gray-200 rounded-md bg-gray-200 ml-10 text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="headaches">
                </label>
            </div>

            <div class="w-100">
                <label for="vomit" class="label_user_illness">
                    Ha tenido vomito? <input type="checkbox" class="border border-gray-200 rounded-md bg-gray-200 ml-10 text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="vomit">
                </label>
            </div>

            <div class="w-100">
                <label for="extra_symptoms">
                    Sintomas extras que quieras agregar <textarea class="border border-gray-200 w-full rounded-md bg-gray-200 text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="extra_symptoms" id=""></textarea>
                </label>
            </div>

            <button type="submit" class="rounded-mg bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600"> Registrarse </button>
        </form>

        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <p class="border border-red-500 rounded-mg bg-red-100 w-full text-red-600 p-2 my-2"> {{ $error }}</p>
                @endforeach
            </div>
        @endif

        @if(session()->has('success'))
            <div class="">
                <p class="border border-green-500 rounded-mg bg-green-100 w-full text-green-900 p-2 my-2">
                    {{ session()->get('success') }}
                </p>
            </div>
        @endif

    </div>

<style>
    .label_user_illness {
        display: flex;
        justify-content: space-between;
    }
</style>
@endsection