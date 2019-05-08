@extends('layouts.app')

@section('content')
    

        <a href="/" class="btn btn-secondary btn-lg float-right mb-5">Back</a>
        <table class="table table-bordered table-hover ">
            <thead class="thead-dark ">
                <tr>
                    <th>Note Title</th>
                    <th>Note Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notes as $note)
                    <tr>
                        <td>{{ $note->title }}</td>
                        <td> {{ $note->content }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

@endsection
