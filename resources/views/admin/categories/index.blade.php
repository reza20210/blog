@extends('layouts.app')

@section('content')

    <div class="card">
        <table class="table table-hover">
            <thead>
            <th>
                Category name
            </th>
            <th>
                Editing
            </th>
            <th>
                Deleting
            </th>
            </thead>
            @foreach($categories as $category)
                <tr>
                    <td>
                        {{ $category->name }}
                    </td>
                    <td>
                        <a href="{{ route('category.edit',['id' => $category->id]) }}" class="btn btn-info btn-xs">
                            Edit
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('category.delete',['id' => $category->id]) }}"
                           class="btn btn-danger btn-xs">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

