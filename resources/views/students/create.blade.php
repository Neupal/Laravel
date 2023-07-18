@extends('students.layout')
@section('content')
<div class="card" style="margin:28px;">
<div class="card-header"> Create new Students </div>
<div class="card-body">

<form action="{{url('student')}}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="from-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="from-control"></br>
        <label>Contact</label></br>
        <input type="text" name="contact" id="contact" class="from-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
</form>
</div>
</div>

@stop