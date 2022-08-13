@extends('layouts.app')

@section('title','Noticas admin')

@section('content')
    <div>
        <h1 class="text-5xl text-center">Noticias</h1>
        <p class=" text-1 text-center mt-10">las noticias seran vistas por los usuarios</p>
        <div class="flex">
            <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg form-container">
                @if(session()->has('message'))
                    <div class="alert alert-danger">
                        <p class="border border-green-500 rounded-mg bg-green-100 w-full text-green-900 p-2 my-2">
                            {{ session()->get('message') }}
                        </p>
                    </div>
                @endif
                <form class="mt-4" method="POST" action="{{route('notice.store') }}">
                    @csrf
                    <label for="email">Titulo de la noticia</label>
                    <input type="text" name="notice_title" class="
                    border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white
                    ">

                    <label for="email">Descripcion de la noticia</label>
                    <textarea name="notice_description" id="" cols="30" rows="10" class="
                    border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white
                    "></textarea>

                    <button type="submit"
                            class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">
                        Crear
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection