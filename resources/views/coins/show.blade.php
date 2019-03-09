@extends('layout')

@section('content')

    <h1 class="title">{{$coin->pavadinimas}}</h1>
    <div class="box">
            <p class="is-size-4"><strong>Šalis:</strong> {{$coin->salis}}</p>





            {{-- <p>{{$coin->description}}</p> --}}
            <p class="is-size-4"><strong>Kiekis: </strong>{{$coin->kiekis}}</p>
            <hr>
        <div class="content is-size-7" >Metai {{$coin->metai}}</div>
        <a href="/coins"><button class="button is-link">Atgal</button></a>
     

    </div>

    <p>
            <a href="/coins/{{$coin->id}}/edit"> <button  class="button is-warning">Redaguoti monetą</button></a>
        </p>
    <form method="POST" action="/coins/{{$coin->id}}">
        @method('DELETE')
        @csrf
        {{-- {{ method_field('DELETE') }}
        {{ csrf_field() }} --}}
        <div class="field" style="margin-top: 0.5em">
                <div class="controll">
                    <button type="submit" class="button is-danger">Ištrinti monetą</button>
                </div>
        </div>

@endsection