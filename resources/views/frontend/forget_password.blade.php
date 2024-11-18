@extends('frontend.layout.app')

@section('title')

Forget PASSWORD_BCRYPT

@endsection

@section('content')

<div class = "container">

    <h1>Welcome to the Forget Password Page</h1>

    <form id="forget-password" onsubmit="return ValidateForm()">

        <div class="input-group">

            <label for="email">Email Address</label>

            <input type="email" id="email" name="email" required>

        </div>

        <button type="submit" class="btn">submit</button>

        <div id="error-message" class="error-message"></div>

    </form>

</div>

@endsection