

@extends('layout.app')

@section('content')

    <!-- table3 -->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Only {{$pro->name}} Programming Language Developers Detail</h4>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Email</th>
                <th scope="col">Programming Languages</th>
                <th scope="col">Languages</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($developers as $developer)
                    @include('developer.developer')
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>

@endsection