@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Category elements</div>
                    <div class="panel-body">
                        @if($elements and  !$elements->isEmpty())
                            @foreach($elements as $element)
                                <div class="col-md-4">
                                    <h3>{{ $element->name }}</h3>
                                    <div class="content">
                                        {{ $element->description }}
                                    </div>
                                </div>
                            @endforeach
                        @else
                            Nothing to show
                        @endif
                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('category.index') }}" class="btn btn-primary">
                            Categories
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
