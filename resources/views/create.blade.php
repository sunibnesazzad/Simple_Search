
@extends('layout.app')

@section('content')
    <div class="text-center">
        <h1><i>Add New Developer</i></h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <!-- Forms-3 -->
            <div class="outer-w3-agile mt-3">
                <form action="/developer/create" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="name" name="email" placeholder="example@example.com" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Select Programming Language</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="category" name="programminglanguage[]" multiple="multiple">
                                @foreach($programminglanguages as $programminglanguage)
                                    <option value="{{$programminglanguage->id}}">{{$programminglanguage->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Select Language</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="category" name="language[]" multiple="multiple">
                                @foreach($languages as $language)
                                    <option value="{{$language->id}}">{{$language->code}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--// Forms-3 -->
        </div>
        <div class="col-md-2">

        </div>
    </div>

@endsection
