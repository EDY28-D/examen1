@extends('layouts.app')

@section('template_title')
    {{ $resena->name ?? __('Show') . " " . __('Resena') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Resena</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('resenas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Contenido:</strong>
                            {{ $resena->contenido }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $resena->usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Libro Id:</strong>
                            {{ $resena->libro_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
