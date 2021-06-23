@extends('layout.app')
@section('content')
<div class="container">
    <div class="row" style="margin-bottom: 20px;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Categories</h3>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            
            <th width="280px">Actions</th>
        </tr>
        @foreach ($Categories as $category)


        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>

            <td>
                <a class="btn btn-info" href="{{url('edit/'.$product->id)}}">Edit</a>

                <a class="btn btn-danger" href="{{url('delete/'.$product->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
