@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" sytle="min-height 100px;">
                    <div class="card-body">
                        <h3>
                            {{ $user->name }}.
                        </h3>
                        <a href="/podcasts.create, ['user' => $user->id]"> Create New Episode
                            <button class="btn btn-outline-primary">
                            </button>
                        </a>
                    </div>
                </div>
            </div>


            <div class=" col-md-8">
                <div class="card" sytle="min-height: 100px;">
                    <div class="card-body">
                        <ul>
                            {{-- Tweaking the episode link --}}
                            {{-- @foreach ($podcasts as $podcast) --}}

                            <li>
                                <a href="{{ route('podcasts.show', ['user' => $user->id, 'podcast' => $podcast]) }}">

                                    {{ $user->id }}. Episode: {{ $podcast->title }}

                                </a>
                            </li>


                            {{-- @endforeach --}}

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
