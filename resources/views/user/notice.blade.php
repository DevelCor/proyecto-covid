@extends('layouts.app')

@section('title','Noticias user')

@section('content')

    <div>
        <h1 class="text-5xl text-center">Noticias</h1>
        <div class="block">
            @if(isset($notices))
                @foreach($notices as $notice)
                    <div class="block mx-auto my-3 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg form-container">
                        <div>
                            <h5> {{$notice->title}} </h5>
                            <p>{{$notice->description}}</p>
                        </div>
                        <div class="mt-10">
                            fecha: <span>{{$notice->created_at}}</span>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection