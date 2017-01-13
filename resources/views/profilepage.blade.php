@extends('layouts.master')

@section('title')
    Profile Page
@endsection

@section('content')
    <section class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Profile Page
            </div>
            <div class="panel-body">
                <div class="col-md-4">
                    <section class="row">
                        <!-- <div class="col-md-6 col-md-offset-3"> -->
                            <img src="{{ route('account.image', ['filename' => $user->first_name . '-' . $user->id . '.jpg']) }}" alt="" class="img-responsive">
                        <!-- </div> -->
                    </section>
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
@endsection