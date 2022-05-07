@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <table class="table table-hover table-responsive">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio Unitario</th>
                        <th>Stock</th>
                        <th>Garantia</th>                        
                    </tr>
                </thead>
                <tbody>
                    @if(!$products->isEmpty())
                    @foreach ($products as $prod)
                    <tr>
                        <th>{{ $prod->id}}</th>
                        <th>{{ $prod->name}}</th>
                        <th>{{ $prod->description}}</th>
                        <th>{{ $prod->unit_price}}</th>
                        <th>{{ $prod->stock}}</th>
                        <th>{{ $prod->warranty}}</th>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
