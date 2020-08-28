@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-9">
        <div class="text-center">
            <h1 class="text-primary">Welcome to B-Vote</h1>
            <p>B-Vote is an online voting application which makes it easier for people to anonymously cast their vote without fear.</p>
        </div>
        <hr>
        <div class="text-center" style="margin-top: 100px">
            <a href="/createvote" class="btn btn-outline-primary btn-lg">Create Vote</a> <a href="/submitvote" class="btn btn-outline-success btn-lg">Submit Vote</a>
        </div>
    </div>
</div>
@endsection
