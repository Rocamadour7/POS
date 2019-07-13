@extends('base')

@section('title', __('messages.products'))

@section('main')
<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">{{ __('messages.products') }}</h1>
        <div>
            <a style="margin: 19px;" href="{{ route('products.create')}}" class="btn btn-primary">{{ __('messages.newProduct') }}</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>{{ __('messages.id') }}</td>
                    <td>{{ __('messages.name') }}</td>
                    <td>{{ __('messages.description') }}</td>
                    <td>{{ __('messages.quantity') }}</td>
                    <td>{{ __('messages.price') }}</td>
                    <td colspan=2>{{ __('messages.actions') }}</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">{{ __('messages.edit') }}</a>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">{{ __('messages.delete') }}</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $('.alert').fadeTo(3000, 0).slideUp(500, function() {
        $(this).remove();
    });
</script>
@endsection