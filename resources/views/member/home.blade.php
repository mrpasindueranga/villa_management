@extends('layouts.app')

@section('content')

<div class="sm:hidden md:block">
    <div class="text-gray-200 text-lg w-1/6 mb-5" style="font-weight: 700">
        <h3>List of User Accounts</h3>
        <hr>
    </div>
    <a class="absolute top-0 right-0" href="{{route('member.create')}}">
        <div class="shadow-xl flex items-center justify-center" style="margin:.5em .5em 0em 0em; width: 2.5em; height:2.5em; border-radius:50%; background-color:#11af39" >
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="none" viewBox="0 0 24 24" stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
        </div>
    </a>
    
    <table border="0" style="border-collapse: separate; border-spacing:0 1em;" cellspacing="0">
        <tr>
            <th class="text-gray-500 text-sm" style="column-width:20em; text-align:left"># Name</th>
            <th class="text-gray-500 text-sm" style="column-width:20em; text-align:left">Created At</th>
            <th class="text-gray-500 text-sm" style="column-width:20em; text-align:left">Updated At</th>
            <th class="text-gray-500 text-sm" style="column-width:20em; text-align:left">Edit</th>
            <th class="text-gray-500 text-sm" style="column-width:20em; text-align:left">Delete</th>
        </tr>
        @foreach ($Users as $User)
            <tr>
                <td class="text-white text-sm">{{$User->name}}</td>
                <td class="text-white text-sm">{{$User->created_at}}</td>
                <td class="text-white text-sm">{{$User->updated_at}}</td>
                <td>
                    <a href="{{route('member.edit',$User->id)}}">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="white" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </a>
                </td>
                <td>
                    <form action="{{route('member.destroy',$User->id)}}" method="POST">
                        <button type="submit">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="white" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                            @method('delete')
                            @csrf
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
    <div class="flex text-white">
        {{-- {{$Users->links()}} --}}
    </div>
</div>

@endsection