@extends('site.layout')
@section('title', 'Details')
@section('conteudo')

<div class="row container">
    <div class="col s12 m6">
        <img src="{{ $produto->imagem ? asset('assets/images/image.png') : asset('assets/images/image.png') }}" alt="" class="responsive-img">
    </div>
    <div class="col s12 m6">
        <h4>{{ $produto->name }}</h4>
        <h4>Kz {{ number_format($produto->preco, 2, ',', '.') }}</h4>
        <p>{{ $produto->descricao }}</p>
        <p> Postado por: {{ $produto->user->firstName }}<br>
            Categoria: {{ $produto->categoria->nome }}
        </p>

        <form action="{{ route('site.addcarrinho') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $produto->id }}">
            <input type="hidden" name="name" value="{{ $produto->name }}">
            <input type="hidden" name="price" value="{{ $produto->preco }}">
            <input type="number" name="qnt" min="1" value="1">
            <input type="hidden" name="img" value="{{ $produto->imagem }}">
            <button class="btn orange btn-large">Comprar</button>
        </form>
    </div>
</div>

@endsection