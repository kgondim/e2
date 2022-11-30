@extends('templates/master')

@section('title')
    <h2>New Product</h2>
@endsection

@section('content')

    @if ($productSaved)
        <div class='alert alert-success'>Thank you, your product was added! <a href='/product?sku={{ $sku }}'>you
                can view it here . . . </a></div>
    @endif

    @if ($app->errorsExist())
        <div class='alert alert-danger'>Please correct the errors below</div>
    @endif

    <form method='POST' id='new-product-form' action='/products/save'>
        <h3>New Product</h3>
        <div class='info'>All fields are required</div>

        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class='form-control' name='name' id='name' value='{{ $app->old('name') }}'>
        </div>

        <div class='form-group'>
            <label for='sku'>SKU</label>
            <input type='text' class='form-control' name='sku' id='sku' value='{{ $app->old('sku') }}'>
        </div class='info'>Can only contain numbers, letters, dashes, and/or underscores.</div>

        <div class='form-group'>
            <label for='description'>Description</label>
            <textarea name='description' id='description' class='form-control'>{{ $app->old('description') }}</textarea>
        </div>

        <div class='form-group'>
            <label for='price'>Price $</label>
            <input type='text' class='form-control' name='price' id='price' value='{{ $app->old('price') }}'>
        </div>

        <div class='form-group'>
            <label for='available'>Units available</label>
            <input type='number' class='form-control' name='available' id='available' value='{{ $app->old('available') }}'>
        </div>

        <div class='form-group'>
            <label for='weight'>Weight</label>
            <input type='text' class='form-control' name='weight' id='weight' value='{{ $app->old('weight') }}'>
        </div class='info'>lbs</div>

        <div class='form-group'>
            <input type='checkbox' name='perishable' id='perishable' value=1>
            <label for='perishable'>Perishable</label>
        </div>

        <button type='submit' class='btn btn-primary'>Add Product</button>
    </form>


    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <a href='/products'>&larr; Return to all products</a>
@endsection
