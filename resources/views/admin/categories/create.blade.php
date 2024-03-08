@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Category Create</h1>
            <form method="post" action="{{ route('categories.store') }} " enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label for="name" id="name"></label>
                    <input type="text" name="name" id="" value="" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="description" id="name">Description:</label>
                    <input type="text" name="description" id="" value="" placeholder="description">
                </div>
                <div class="form-group">
                    <label for="status" id="status">Status:</label>
                    <input type="text" name="status" id="" placeholder="status">
                </div>
                <div>
                    <a href="{{ route('categories.index') }}">Back</a>
                    <button type="submit">Save</button>
                </div>
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-10 5h4m-2 2v-4m0-6V4M7 7V4m10 3V4M5 20h14c.6 0 1-.4 1-1V7c0-.5-.4-1-1-1H5a1 1 0 0 0-1 1v12c0 .6.4 1 1 1Z"/>
                  </svg>
                  
            </form>
        </div>
    </div>
@endsection
