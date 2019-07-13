@extends('base')

@section('title', __('messages.home'))

@section('styles')
<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('main')
    <div class="row">
        <div class="col-sm-10" style="height: 100vh; overflow: auto;">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">{{ __('messages.id') }}</th>
                        <th scope="col">{{ __('messages.name') }}</th>
                        <th scope="col">{{ __('messages.description') }}</th>
                        <th scope="col">{{ __('messages.quantity') }}</th>
                        <th scope="col">{{ __('messages.price') }}</th>
                        <th scope="col">{{ __('messages.total') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Carne de Res</td>
                        <td>Descripción para Carne de Res</td>
                        <td>1</td>
                        <td>80.00</td>
                        <td>80.00</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Filete de Pescado</td>
                        <td>Descripción para Pechuga de Pollo</td>
                        <td>2</td>
                        <td>70.00</td>
                        <td>140.00</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cueritos</td>
                        <td>Descripción para Cueritos</td>
                        <td>5</td>
                        <td>60.00</td>
                        <td>300.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-2">
            <div class="row actions" style="height: 80vh;">
            
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ __('messages.total') }}</h5>
                    <strong id="total">$ 520.00</strong>
                </div>
            </div>
        </div>
    </div>
@endsection