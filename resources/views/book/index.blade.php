@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Books</div>
                    <div class="panel-body">
                        @if($books and !$books->isEmpty())
                            @foreach($books as $book)
                                <div class="col-md-4">
                                    <h3>{{ $book->name }}</h3>
                                    <div class="content">
                                        <p>{{ $book->description }}</p>
                                        <ul>
                                            <li>
                                                {{ $book->category->name }}
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            @endforeach
                        @else
                            Nothing to show
                        @endif
                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('book.create') }}" class="btn btn-primary">
                            Create book element
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
