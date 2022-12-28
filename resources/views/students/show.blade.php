@extends('students.layout')
@section('content')

    <div class="card" style="margin:20px">
        <div class="card-header">Students Page</div>
        <div class="card-body">
            <h5 class="card-title">Name : {{ $student->name }}</h5>
            <p class="card-title">Address : {{ $student->address }}</p>
            <p class="card-title">Mobile : {{ $student->mobile }}</p>
        </div>
    </div>
