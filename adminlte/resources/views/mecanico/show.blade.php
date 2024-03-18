@extends('layouts.app')

@section('template_title')
    {{ $mecanico->name ?? "{{ __('Show') Mecanico" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Mecanico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mecanicos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $mecanico->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $mecanico->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $mecanico->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $mecanico->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $mecanico->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $mecanico->email }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $mecanico->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad:</strong>
                            {{ $mecanico->especialidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
