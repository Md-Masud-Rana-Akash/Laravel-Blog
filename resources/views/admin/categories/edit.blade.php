@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


<div class="panel panel-heading">

    <div style='margin-bottom: 25px' class="panel-heading">
        Update category
    </div>

    <div class="panei-body">

        <form action="{{ route('category.update' , ['id'=>$category->id]) }}" method="post">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control">

            </div>


            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Update category
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection
