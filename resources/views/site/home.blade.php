@extends('site.layout')
@section('title', 'Home')
@section('conteudo')

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($produtos as $produto)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('assets/images/image.png') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $produto->name }}</h5>
                                <!-- Product price-->
                                Kz {{ number_format($produto->preco, 2, ',', '.') }}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark" href="{{ route('site.details', $produto->slug) }}">Ver Detalhes</a></div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark" href="#">Adicionar ao carrinho</a></div>
                        </div>
                    </div>
                </div>
            @endforeach            
        </div>

        <div class="row center">
            {{ $produtos->links() }}
        </div>

    </div>
</section>

@endsection