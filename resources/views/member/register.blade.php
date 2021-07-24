@extends('layouts.app')

@section('content')

<div class="sm:hidden md:block">
    <div class="text-gray-200 text-lg w-1/6 mb-5" style="font-weight: 700">
        <h3>Register User Account</h3>
        <hr>
    </div>
    
    <form class="text-white space-y-4 w-full">
        <div class="flex items-center w-full">
            <div class="w-1/6">Name</div>
            <input name="name" maxlength="50" class="w-2/6 text-gray-500 shadow-md rounded-md p-2 focus:outline-none focus:ring focus:ring-green-500" type="text">
            @error('name')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex items-center w-full">
            <div class="w-1/6">Email</div>
            <input name="email" maxlength="80" class="w-2/6 text-gray-500 shadow-md rounded-md p-2 focus:outline-none focus:ring focus:ring-green-500" type="text">
            @error('email')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex items-center w-full">
            <div class="w-1/6">Password</div>
            <input name="password" maxlength="80" class="w-2/6 text-gray-500 shadow-md rounded-md p-2 focus:outline-none focus:ring focus:ring-green-500" type="password">
            @error('password')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex items-center w-full">
            <div class="w-1/6">Confirm Password</div>
            <input name="password_confirmation" maxlength="80" class="w-2/6 text-gray-500 shadow-md rounded-md p-2 focus:outline-none focus:ring focus:ring-green-500" type="password">
        </div>
        <div class="flex items-center w-full">
            <div class="w-1/6">Account Type</div>
            <Select name="type" class="w-2/6 text-gray-500 shadow-md rounded-md p-2 focus:outline-none focus:ring focus:ring-green-500">
                <option value="">--Select User Type--</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </Select>
        </div>
        <div class="flex items-center w-full">
            <div class="w-1/2 flex space-x-4 justify-end">
                <button type="submit" class="p-2 bg-green-500 rounded-md shadow-md cursor-pointer">Submit</button>
                <button type="reset" class="p-2 bg-blue-500 rounded-md shadow-md cursor-pointer">Clear</button>
            </div>
        </div>
    </form>
</div>

@endsection