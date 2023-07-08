@extends('layout.master')

@section('title')
    STUDENTS
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ Route('update') }}" enctype="multipart/form-data">
                        <div class="row text-center">
                            <div class="col-md-6 mx-auto">
                                <div class="form-group">
                                    <label>Profile Picture</label>
                                    <img class="rounded-circle shadow-4-strong" alt="profile picture" src="" />
                                    <input type="file" class="form-control" name="image" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mx-auto">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mx-auto">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" readonly value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6 mx-auto">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">@csrf
                            <div class="col-md-6 mx-auto">
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="form-control" name="role" id="">
                                        <option value="{{ $user->role }}" selected hidden>{{ $user->role }}</option>
                                        <option value="student">student</option>
                                        <option value="faculty">faculty</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mx-auto">
                                <div class="form-group">
                                    <input type="hidden" value="{{ $user->id }} " name="id">
                                    <input type="submit" class="btn btn-success" value="Update">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection