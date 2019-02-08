@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Edit your profile
        </div>
        <div class="card-body">
            <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" value="{{ $user->name }}" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" value="{{ $user->email }}" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">New password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="avatar">Upload new avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook profile</label>
                    <input type="text" value="{{ $user->profile->facebook }}" name="facebook" class="form-control">
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube profile</label>
                    <input type="text" value="{{ $user->profile->youtube }}" name="youtube" class="form-control">
                </div>
                <div class="form-group">
                    <label for="about">About you</label>
                    <textarea name="about" id="about" cols="6" rows="6"
                              class="form-control">{{ $user->profile->about }}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Update profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
