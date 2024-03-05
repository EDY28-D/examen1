@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? __('Show') . " " . __('Libro') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $libro->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $libro->usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $libro->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Autor Id:</strong>
                            {{ $libro->autor_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
