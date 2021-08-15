@extends('layout.app')

@section('PageTitle', 'Dashboard')

@section('content')
<p>{{  auth()->user()  }}</p>
@endsection
