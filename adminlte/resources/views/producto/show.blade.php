@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? "{{ __('Show') Producto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $producto->NOMBRE_PRODUCTO }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Producto:</strong>
                            {{ $producto->CANTIDAD_PRODUCTO }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->DESCRIPCION }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Productos:</strong>
                            {{ $producto->CATEGORIA_PRODUCTOS }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Producto:</strong>
                            {{ $producto->PRECIO_PRODUCTO }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen Producto:</strong>
                            {{ $producto->IMAGEN_PRODUCTO }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
