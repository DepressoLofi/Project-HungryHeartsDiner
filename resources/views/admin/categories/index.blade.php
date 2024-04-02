@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center ">
            <div>
                <h1 class="mb-4">Create Category</h1>
                <form action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
                    <div class="d-flex">
                        <input type="text" name="name" class="form-control me-3">

                        <button type="submit" class="btn btn-warning">Create</button>
                    </div>
                </form>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @elseif($errors->any())
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                @endif

            </div>
        </div>
        <div class="pt-5">
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th class="col">No.</th>
                        <th class="col">Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $index => $category)
                        <tr>
                            <th>{{ $index + 1 }}</th>
                            <th>{{ $category->name }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
@endsection
