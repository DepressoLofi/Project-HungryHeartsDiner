@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center ">
            <div class="shadow-sm w-50 px-5">
                <h1 class="m-4 text-center">Create A Dish</h1>
                <form action="{{ route('admin.dish.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group my-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Dish Name">
                    </div>
                    <div class="form-group my-3">
                        <label class="d-block">Picture</label>
                        <input type="file" class="form-control-file" name="picture" >
                    </div>
                    <div class="form-group my-3">
                        <label>Price</label>
                        <input type="number" class="form-control" name="price" placeholder="$$$$">
                    </div>
                    <div class="my-3">
                        <label>Category</label>
                        <select class="form-control" name="category_id">
                            <option value="" disabled selected>Choose a category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="my-3">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>

                    </div>

                    <button TYPE="submit" class="btn btn-warning my-3">Submit</button>

                </form>
                @error($errors->any())
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror


            </div>
        </div>


    </div>
@endsection
