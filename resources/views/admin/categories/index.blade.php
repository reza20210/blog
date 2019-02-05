@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            Categories
        </div>
        <div class="card-body">
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
                @if($categories->count() > 0)
                    @foreach($categories as $category)
                        <tr>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>
                                <a href="{{ route('category.edit',['id' => $category->id]) }}"
                                   class="btn btn-info btn-xs">
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
                @else
                    <tr>
                        <th colspan="5" class="text-center">No categories post.</th>
                    </tr>
                @endif
            </table>
        </div>
    </div>
@endsection

