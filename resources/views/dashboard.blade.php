@extends('main')

@section('content')

<div class="card">
	<div class="card-header">Dashboard</div>
	<div class="card-body">

		You are Login in Laravel 9 Custom Login Registration Application.
	</div>
</div>

@endsection('content')

<script>
    var conn = new WebSocket("ws:127.0.0.1:8090/");

    conn.onopen = function(e) {
        console.log("connection established")
    }
    conn.onmessage = function (e) {
        console.log("when message is recieved")
    }
    conn.onerror = function(error) {
        console.log(error);
    };
</script>
