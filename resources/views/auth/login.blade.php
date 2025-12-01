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

        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <form action="{{route("login.post")}}"method="post">
                @csrf

                <fieldset class="fieldset bg-base-200 border-base-300 rounded-lg w-96 border p-6">
               <legend class="fieldset-legend text-xl font-bold">Login</legend>

               <label class="label mt-4">Email</label>
               <input type="email" class="input input-bordered w-full" placeholder="Email" name="email"/>

                <label class="label mt-4">Password</label>
              <input type="password" name="password" class="input input-bordered w-full" placeholder="Password" />


               <button class="btn btn-neutral mt-6 w-full">Login</button>
             </fieldset>
            </form>
  
</div>

    @endsection
