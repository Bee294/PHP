@extends('students.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Edit student</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problems with your input.<br><br>
            <ul>
                @foreach($errors->all() as $errors)
                    <li>{{$errors}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Student Name:</strong>
                    <input type="text" name="name" value="{{$student->name}}"
                           class="form-control" placeholder="student Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Age:</strong>
                    <input type="number" name="age" class="form-control" style="height: 150px"
                           value="{{$student->address}}" placeholder="Age">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <textarea class="form-control" name="address" style="height: 150px"
                              placeholder="Age">{{$student->age}}
                    </textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telephone:</strong>
                    <input type="text" name="product_qty" class="form-control" style="height: 150px"
                           value="{{$student->telephone}}" placeholder="Telephone">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
