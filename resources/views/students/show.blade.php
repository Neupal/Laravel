@extends('students.layout')
@section('content')
<div class="card" style="margin:28px;">
<div class="card-header">Student Page</div>
<div class="card-body">
    <div class="card-body">
    <h1 class="card-title">Name : {{ $students->name}}</h1>
    <p class="card-text">Address : {{ $students->address}}</p>
    <p class="card-text">Contact : {{ $students->contact}}</p>
</div>
</hr>
</div>
</div>