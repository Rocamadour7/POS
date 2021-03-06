@extends('base')

@section('title', __('messages.editProduct'))

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">{{ __('messages.updateAProduct') }}</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('products.update', $product->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <label for="name">{{ __('messages.name') }}:</label>
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}" autocomplete="off" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <label for="description">{{ __('messages.description') }}:</label>
                    <input type="text" class="form-control" name="description" value="{{ $product->description }}" autocomplete="off" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="quantity">{{ __('messages.quantity') }}:</label>
                    <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}" autocomplete="off" />
                </div>
                <div class="form-group col-sm-6">
                    <label for="price">{{ __('messages.price') }}:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="text" class="form-control" name="price" value="{{ $product->price }}" autocomplete="off" />
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">{{ __('messages.update') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection