@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" sytle="min-height 100px;">
                    <div class="card-body">
                        <h3>
                            {{ $user->id }}.{{ $user->name }}

                        </h3>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="card" sytle="min-height: 100px;">
                    <div class="card-body">
                        <ul>
                            {{-- Tweaking the episode link --}}
                            @foreach ($podcasts ?? [] as $podcast)

                                <li>
                                    <a href="/podcasts.show', ['user' => $user->id, 'podcast' => $podcast])">

                                        {{ $user->$id }}. Episode: {{ $podcasts->$file_name }}

                                    </a>
                                </li>


                                <li>2. Episode: How was you started Cooking </li>
                                <li>3. Episode: How was The Eve </li>
                                <li>4. Episode: How was your start</li>
                                <li>5. Episode: How was your start</li>
                                <li>6. Episode: Working out 30 days</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
