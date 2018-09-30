@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


<div class="card">
    <div class="card-header">Create a new post</div>

    <div class="card-body">
    	<form action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
    		{{ csrf_field() }}
    		
    		<div class="form-group">
    			<label for="Title"> Title </label>
    			<input type="text" name="title" class="form-control">
    		</div>
    		

    		<div class="form-group">
    			<label for="featured"> Featured image </label>
    			<input type="file" name="featured" class="form-control">
    		</div>


            <div class="form-group">
                <label for="category"> Select Category </label>
                <select name = "category_id">
                   @foreach($categories as $category)
                      <option>{{ $category->name }}</option>
                   @endforeach 
                </select>


            </div>

            ->with('categories', Category::all());


    		<div class="form-group">
    			<label for="content"> Content </label>
    			<textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>

    		</div>

    		<div class="form-group">
    			<div class="text-center">
    				<button class="btn btn-success" type="submit"> Store Post </button>
    			</div>

    		</div>



    	</form>
    </div>
</div>


@stop