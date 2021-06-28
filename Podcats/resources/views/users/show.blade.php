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
                        <a href="{{ route('podcasts.create', ['user' => $user->idgit]) }}"> Create New Episode
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
                                <a href="/podcasts.show, ['user' => $user->id, 'podcast' => $podcast]">

                                    {{ $user->id }}. Episode: {{ '' }}

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
