
@extends('layout.app')

@section('content')
    <div class="text-center">
        <h2 class="main-title-w3layouts mb-2 text-center">Search Developers</h2>
    </div>
    <hr>
  {{-- <div class="row">
       <div class="col-md-6 center-block">
          <a href="{!! route('developer.search1') !!}"><button class="btn-primary" type="submit">By Programming Language</button></a>
       </div>
       <div class="col-md-6">
           <a href="{!! route('developer.search2') !!}"><button class="btn-primary" type="submit">By Programming language and Language</button></a>
       </div>
   </div>--}}
    <section class="cards-section">
        <div class="">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-4">
                    <div class="card p-xl-3 p-1">
                        <blockquote class="blockquote mb-0 card-body">
                            <p>Search Developers only by Programming Language.</p>
                            <footer class="blockquote-footer mt-2">
                                <a href="{!! route('developer.search1') !!}" class="btn more mt-3 center-block">Search</a>
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                    <div class="card p-xl-3 p-1">
                        <blockquote class="blockquote mb-0 card-body">
                            <p>Search by Programming Language and Language both.</p>
                            <footer class="blockquote-footer mt-2">
                                <a href="{!! route('developer.search2') !!}" class="btn more mt-3 center-block">Search</a>
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </section>

@endsection
