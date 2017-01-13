@extends('layouts.master')

@section('title')
    Account
@endsection

@section('content')
    <section class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Profile Page
            </div>
            <div class="panel-body">
                <div class="col-md-4">
                    @if (Storage::disk('local')->has($user->first_name . '-' . $user->id . '.jpg'))
                    <section class="row">
                        <!-- <div class="col-md-6 col-md-offset-3"> -->
                            <img src="{{ route('account.image', ['filename' => $user->first_name . '-' . $user->id . '.jpg']) }}" alt="" class="img-responsive">
                        <!-- </div> -->
                    </section>
                    @endif
                </div>
                <div class="col-md-8">
                    <!-- <div class="col-md-6 col-md-offset-3"> -->
                    <!-- <header><h3>Your Account</h3></header> -->
                        <div class="col-md-4">
                            <div>
                                <label for="first_name">First Name</label>
                                <p>{{ $user->first_name }}</p>
                            </div>
                            <div>
                                <label for="last_name">Last Name</label>
                                <p>{{ $user->last_name }}</p>
                            </div>
                            <div>
                                <label for="phone">Phone</label>
                                <p>{{ $user->phone }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="email">E-Mail</label>
                                <p>{{ $user->email }}</p>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>    
    </section>
    <section class="row">
    <form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
    <header><h3>Edit Profile Page</h3></header>
        <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" id="first_name">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="text" name="email" class="form-control" value="{{ $user->email }}" id="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ $user->phone }}" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="image">Image (only .jpg)</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Account</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">    
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}" id="last_name">
            </div>
            <div class="form-group">
                <label for="password">Update Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
        </div>
    </form>    
    </section>
@endsection