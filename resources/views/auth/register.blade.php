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



<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-[#004754] to-[#bebd00]">
    <div class="flex flex-col md:flex-row bg-white rounded-3xl shadow-lg overflow-hidden w-full max-w-6xl ">
        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="p-10 w-2xl">
           <h2 class="text-2xl font-bold mb-6 text-gray-800">Register</h2>

            <label class="block mb-2 text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" name="fullname" placeholder="Full Name"
                class="w-full mb-4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">

            <label class="block mb-2 text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" placeholder="Email"
                class="w-full mb-4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">

            <label class="block mb-2 text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" placeholder="Password"
                class="w-full mb-4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">

            <label class="block mb-2 text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                class="w-full mb-6 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">

            <button type="submit"
                class="w-full py-2 bg-yellow-500 hover:bg-yellow-600 text-white font-bold rounded-lg transition-all">Sign Up</button>

            </div>
           
        </form>


    <div class="hidden md:block  bg-[#004754] text-white p-5 flex flex-col items-center justify-center rounded-3xl py-50 w-2xl shadow-cyan-700">
        <h2 class="text-3xl font-bold mb-2 text-center">Welcome Back!</h2>
        <p class="mb-6 text-center">Already have an account? Sign in to access all features.</p>
      <div class="flex justify-center">
      <a href="{{ route('login') }}"
       class="px-6 py-2 bg-yellow-500 hover:bg-yellow-600 rounded-lg font-bold transition-all">
       Sign In
        </a>
</div>

    </div>


    </div>


@endsection
