@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <form action="/store" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Title</span>
                    </div>
                    <input type="text" class="form-control" name="title" placeholder="Enter Note Title"> <br>
                </div>
                <textarea name="content"  rows="10" class="form-control" placeholder="Enter the Content here"></textarea> <br>
                <input type="submit" value="Save" class="btn btn-success btn-lg ">
                <a href="/" class="btn btn-secondary btn-lg">Back</a>

                {{csrf_field()}}
            </form>
        </div>
    </div>  

   

@endsection
