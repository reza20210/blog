@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Create new tag
        </div>
        <div class="card-body">
            <form action="{{ route('tag.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="tag">Name</label>
                    <input type="text" name="tag" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Store tag</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
