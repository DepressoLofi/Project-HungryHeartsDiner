@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center ">
            <div>
                <h1 class="mb-4">Create Category</h1>
                <form action="{{ route('admin.category.store') }}" method="POST">
                    @csrf

                </form>


            </div>
        </div>


    </div>
@endsection
