@extends('layouts.app')

@section('title', 'Renzo Ezagui workspaces')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection