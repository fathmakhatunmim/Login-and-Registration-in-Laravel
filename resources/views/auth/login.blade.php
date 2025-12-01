@extends('layout.default')
@section('title',"Login ")
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

 <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-[#004754] to-[#bebd00] px-4">

    <div class="flex flex-col md:flex-row bg-white rounded-3xl shadow-2xl overflow-hidden w-full max-w-5xl">

        
        <div class="hidden md:flex flex-col items-center justify-center bg-[#004754] text-white p-10 w-1/2 rounded-l-3xl">

            <h2 class="text-4xl font-bold mb-3 text-center">Welcome Back!</h2>
            <p class="text-center mb-8 text-gray-200">
                Already have an account? Sign in to access all features.
            </p>

            <a href="{{ route('register') }}"
                class="px-8 py-3 bg-yellow-500 hover:bg-yellow-600 rounded-lg font-bold text-white shadow-md transition-all">
                Sign up
            </a>

        </div>

        
        <div class="flex flex-col justify-center p-10 w-full md:w-1/2">

            <h2 class="text-3xl font-bold mb-6 text-gray-800 text-center md:text-left">Log in</h2>

            <form action="{{ route('login.post') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" placeholder="Email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none">
                </div>

                <!-- Password -->
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none">
                </div>

        
                <button type="submit"
                    class="w-full py-2 mt-4 bg-yellow-500 hover:bg-yellow-600 text-white font-bold rounded-lg transition-all">
                    Log in
                </button>
                     
            </form>

        </div>

    </div>

</div>


    @endsection
