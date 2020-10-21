@extends('layout')

@section('content')
    <div class="pt-2">
        <h1>We have the following boards:</h1>
        @if ($boards->isEmpty())
            <b-alert show variant="warning">
                There seems to be no boards, come back later!
            </b-alert>
        @else
            <b-list-group>
                @foreach ($boards as $board)
                    <b-list-group-item href="{{route('board', ['slug' => $board->slug])}}">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">/{{$board->slug}}/ - {{$board->name}}</h5>
                        </div>

                        <small>{{$board->description}}</small>
                    </b-list-group-item>
                @endforeach
            </b-list-group>
        @endif
    </div>
@endsection
