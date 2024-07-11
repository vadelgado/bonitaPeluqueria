@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Registro de citas') }}</div>
                <div class="card-body">
                    <form class="needs-validation" method="POST" novalidate action="{{ url('/citas/crear_cita') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="procedimiento" class="col-md-4 col-form-label ">{{ __('Procedimiento') }}</label>
                                <select name="procedimiento" id="procedimiento" required autocomplete="procedimiento" class="form-select">
                                    <option selected disabled>Seleccione ...</option>
                                    @foreach($listaServicios as $servicio)
                                        <option value="{{ $servicio->id_procedimiento }}"
                                            {{ old('procedimiento') == $servicio->id_procedimiento ? 'selected' : '' }}>
                                            {{ $servicio->nombre_procedimiento }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('procedimiento')
                                        <label class="text-danger small" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </label>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="usuario" class="col-md-4 col-form-label ">{{ __('Usuario') }}</label>
                                <select name="usuario" id="usuario" required autocomplete="usuario" class="form-select">
                                    <option selected disabled>Seleccione ...</option>
                                    @foreach ($listaUsuarios as $usuario)
                                        <option value="{{ $usuario->identificacion }}"
                                            {{ old('usuario') == $usuario->identificacion ? 'selected' : '' }}>
                                            {{ $usuario->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('usuario')
                                    <label class="text-danger small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </label>
                                @enderror
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="fecha" class="col-md-6 col-form-label">{{ __('Fecha') }}</label>
                                <input id="fecha" type="date" class="form-control" name="fecha" value="{{ old('fecha') }}" required autocomplete="fecha" autofocus>
                                @error('fecha')
                                    <label class="text-danger small mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </label>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="hora" class="col-md-6 col-form-label">{{ __('Hora') }}</label>
                                <input id="hora" type="time" class="form-control" name="hora" value="{{ old('hora') }}" required autocomplete="hora" autofocus>
                                @error('hora')
                                    <label class="text-danger small mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </label>
                                @enderror
                            </div>
                        </div>


                          <div class="row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@vite(['resources\js\citas.js'])
