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
            </thead>
            @foreach($posts as $post)
                <tr>
                    <td>
                        Image
                    </td>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{--<a href="{{ route('post.edit',['id' => $post->id]) }}" class="btn btn-info btn-xs">--}}
                        Edit
                        {{--</a>--}}
                    </td>
                    <td>
                        {{--<a href="{{ route('category.delete',['id' => $post->id]) }}" class="btn btn-danger btn-xs">--}}
                        Delete
                        {{--</a>--}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

