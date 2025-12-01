@extends('layout.default')
@section('title', 'Register')
@section('content')

@if($errors->any())
<div class="alert alert-error mb-4">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{{-- @if(session('success'))
<div class="alert alert-success mb-4">{{ session('success') }}</div>
@endif

@if(session('error'))
<div class="alert alert-error mb-4">{{ session('error') }}</div>
@endif --}}

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <form action="{{ route('register.post') }}" method="post" class="w-full max-w-md">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-lg border p-6">
            <legend class="fieldset-legend text-xl font-bold">REGISTER</legend>

            <label class="label mt-4">Full Name</label>
            <input type="text" name="fullname" class="input input-bordered w-full" placeholder="Full Name" />

            <label class="label mt-4">Email</label>
            <input type="email" name="email" class="input input-bordered w-full" placeholder="Email" />

            <label class="label mt-4">Password</label>
            <input type="password" name="password" class="input input-bordered w-full" placeholder="Password" />

            <label class="label mt-4">Confirm Password</label>
            <input type="password" name="password_confirmation" class="input input-bordered w-full" placeholder="Confirm Password" />

            <button type="submit" class="btn btn-neutral mt-6 w-full">Sign Up</button>
        </fieldset>
    </form>
</div>

@endsection
