@extends('layout')

@section('content')
    <div class="pt-2">
        <h1>We have the following boards:</h1>
        @if ($boards->isEmpty())
            <b-alert variant="warning">
                There seems to be no boards, come back later!
            </b-alert>
        @else
            <b-list-group>
                @foreach ($boards as $board)
                    <b-list-group-item>/{{$board->slug}}/ - {{$board->name}}</b-list-group-item>
                @endforeach
            </b-list-group>
        @endif
    </div>
@endsection
