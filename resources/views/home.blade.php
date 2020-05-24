@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create">Create Post</a>

                    @if( count($posts) > 0 )

                    <table>
                        <tr>
                            <th>Title</th>
                            <th>body</th>
                            <th>Edit</th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <th>{{$post->title}}</th>
                            <th>{{$post->body}}</th>
                            <th><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
                        </tr>
                        @endforeach

                    </table>

                    @else 
                    <p>You have No Posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
