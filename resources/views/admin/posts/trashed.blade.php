@extends('layouts.app')

@section('content')

    <div class="card">
        <table class="table table-hover">
            <thead>
            <th>
                Image
            </th>
            <th>
                Title
            </th>
            <th>
                Edit
            </th>
            <th>
                Delete
            </th>
            <th>
                Destroy
            </th>
            </thead>
            @foreach($posts as $post)
                <tr>
                    <td>
                        <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px">
                    </td>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        <a href="{{ route('post.edit',['id' => $post->id]) }}" class="btn btn-info btn-xs">
                            Edit
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('post.restore',['id' => $post->id]) }}" class="btn btn-xs btn-success">
                            Restore
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('post.kill',['id' => $post->id]) }}" class="btn btn-xs btn-danger">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

