@extends('layouts.master')

@section('content')

    <div class="col-sm-8">

        <h2>Registration</h2>

        <form method="post" action="\login">
            {{ @csrf_field() }}

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-group" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-group" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>

            @include('partials.errors')

        </form>

    </div>

@endsection