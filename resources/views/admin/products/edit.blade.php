@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Product</h2>

    <form method="POST" action="{{ route('admin.products.update', $product->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name"
                   value="{{ old('name', $product->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="category_id" class="form-control" id="category" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price ($)</label>
            <input type="number" name="price" step="0.01" class="form-control" id="price"
                   value="{{ old('price', $product->price) }}" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="url" name="image" class="form-control" id="image"
                   value="{{ old('image', $product->image) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="4">{{ old('description', $product->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection
