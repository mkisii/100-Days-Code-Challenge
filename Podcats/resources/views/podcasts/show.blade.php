@extends('layouts.app')

@section('content')
    <h3>Hello this is prodcast show</h3>
    {{ $podcast->title }}
    {{ $podcast->id }}
    {{ $podcast->file_name }}
@endsection
