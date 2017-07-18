@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>
                    <div class="panel-body">
                        @if($categories and  !$categories->isEmpty())
                            @foreach($categories as $category)
                            <div class="col-md-4">
                                <a href="{{ route('category.show',$category->id) }}">
                                    <h3>{{ $category->name }}</h3>
                                </a>
                            </div>
                            @endforeach
                        @else
                            Nothing to show
                        @endif
                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('category.create') }}" class="btn btn-primary">
                            Create category element
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
