@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/podcasts.store, ['user' => $user->id])" method="post" enctype="form/data">
            @csrf
            @method('post')

            <div class="form-group">
                <input type="text" name="title" placeholder="Add your Pod Epsiode Name" class="form-control">
            </div>

            <div class="form-group">
                <input type="text" name="file_name" placeholder="Add your Episode file" class="form-control">
            </div>

            <div class="form-group">
                <input type="number" name="user_id" placeholder="Add your User_Id" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary">Add Epsiode</button>

        </form>
    </div>
@endsection
