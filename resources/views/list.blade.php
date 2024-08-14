@extends('layouts.tasklist')
@section('content')

<x-card-list :tasks="$tasks"/>
@endsection

