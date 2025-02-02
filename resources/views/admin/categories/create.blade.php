@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add New Category</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Category</button>
        </form>
    </div>
</div>
@endsection
