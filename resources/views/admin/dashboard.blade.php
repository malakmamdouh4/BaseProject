@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Welcome, {{ auth('admin')->user()->email }}</h2>
@endsection