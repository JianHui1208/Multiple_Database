@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Product</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>description</th>
                            <th>Category</th>
                        </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->category_id }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Create Product</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>name</th>
                            <th>description</th>
                            <th>Category</th>
                        </tr>
                        <form action="{{ route('products.store') }}" method="post">
                            <tr>
                                <td><input type="text" name="name" id="name"></td>
                                <td><input type="text" name="description" id="description"></td>
                                <td>
                                    <select name="category_id" id="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->type }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td><button type="submit">Submit</button></td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
