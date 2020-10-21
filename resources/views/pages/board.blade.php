@extends('layout')

@section('content')
    <div class="pt-2">
        <h1>Welcome to /{{$board->slug}}/</h1>
        <b-alert show variant="warning">
            This is where replies would go, but they're not implemented yet
        </b-alert>
    </div>
@endsection
