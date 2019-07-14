@extends('base')

@section('title', __('messages.home'))

@section('styles')
<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('modals')
<div class="modal fade" id="productsModal" tabindex="-1" role="dialog" aria-labelledby="productsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="productsModalLabel">{{ __('messages.addAProduct') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="form-row" id="addProductForm">
                <div class="form-group col-md-8">
                    <label for="productsSelect">{{ __('messages.products') }}</label>
                    <select class="form-control" id="productsSelect" onchange="enableQuantity()" required>
                        <option value="" disabled selected>{{ __('messages.pleaseSelect') }}</option>
                        @foreach($products as $product)
                        <option value='{"id": {{ $product->id }}, "description": "{{ $product->description }}", "price": {{ $product->price }}}''>{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="quantity">{{ __('messages.quantity') }}</label>
                    <input type="number" step="0.01" class="form-control" id="quantity" autocomplete="off" onchange="$('#quantity').removeClass('is-invalid')" disabled required />
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('messages.close') }}</button>
            <button type="button" class="btn btn-primary" onclick="addProduct()">{{ __('messages.add') }}</button>
        </div>
        </div>
    </div>
</div>
@endsection

@section('main')
    <div class="row">
        <div class="col-sm-10" style="height: 100vh; overflow: auto;">
            <table class="table table-striped table-hover" id="productsTable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">{{ __('messages.id') }}</th>
                        <th scope="col">{{ __('messages.name') }}</th>
                        <th scope="col">{{ __('messages.description') }}</th>
                        <th scope="col">{{ __('messages.quantity') }}</th>
                        <th scope="col">{{ __('messages.price') }}</th>
                        <th scope="col">{{ __('messages.total') }}</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div class="col-sm-2">
            <div class="row actions" style="height: 80vh;">
                <div class="col-sm-12 buttonDiv">
                    <a href="{{ route('products.index') }}" role="button" class="btn btn-primary btn-lg btn-block">{{ __('messages.products') }}</a>
                </div>
                <div class="col-sm-12 buttonDiv">
                    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#productsModal">{{ __('messages.addAProduct') }}</button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ __('messages.total') }}</h5>
                    <strong id="total"><span id="total">$ 0.00</span></strong>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        messageProduct ="{{ __('messages.products') }}";
        var products = @json($products);
    </script>
@endsection()