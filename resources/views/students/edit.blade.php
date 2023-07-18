@extends('students.layout')
@section('content')
<div class="card" style="margin:28px;">
<div class="card-header"> Edit Students </div>
<div class="card-body">
    <form action="{{ url( 'student/' .$students->id) }}" method="post">
    {!! csrf_field() !!}
    @method("PATCH")

    <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id"/>
    <label>Name</label></br>
    <input type="text" name="name" id="name" value="{{$students->name}}" class="from-control"></br>
    <label>Address</label></br>
    <input type="text" name="address" id="address" value="{{$students->address}}" class="from-control"></br>
    <label>Contact</label></br>
    <input type="text" name="contact" id="contact" value="{{$students->contact}}" class="from-control"></br>
    <input type="submit" value="Update" class="btn btn-success"></br>

</form>
</div>

</div>

@stop