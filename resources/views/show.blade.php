@extends('templates.template')
@section('content')
    <h1 class="text-center">Crud</h1>
    <hr>

    <div class="d-flex justify-content-center">
        @php
            $user=$book->find($book->id)->relUsers;
        @endphp

                        
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Título: {{$book->title}}</li>
                <li class="list-group-item">Páginas: {{$book->pages}}</li>
                <li class="list-group-item">Preço: R$ {{$book->price}}</li>
                <li class="list-group-item">Autor: {{$user->name}}</li>
                <li class="list-group-item">Email do autor: {{$user->email}}</li>
            </ul>
        </div>
    </div>
@endsection