@extends('students.layout')
@section('content')

    <div class="card" style="margin:20px">
        <div class="card-header">Edit Student</div>
        <div class="card-body">
            <form action="{{ url('student/' . $student->id) }}" method="post">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $student->id }}" id="id" />
                <label for="">Name</label></br>
                <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}"></br>
                <label for="">Address</label></br>
                <input type="text" name="address" id="address" class="form-control"
                    value="{{ $student->address }}"></br>
                <label for="">Mobile</label></br>
                <input type="text" name="mobile" id="mobile" class="form-control"
                    value="{{ $student->mobile }}"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
        </div>
    </div>
