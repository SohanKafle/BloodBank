@extends('layouts.app')
@section('content')
<h2 class="font-bold text-3xl text-red-500">Blood Request</h2>
    <hr class="h-1 bg-red-500">
<div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                   Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        BloodGroup
                    </th>
                    <th scope="col" class="px-6 py-3">
                  Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Hospital Report
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $request)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                 
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{$request->name}}
                    </th>
                   
                    <td class="px-6 py-4">
                      {{$request->phone}}
                    </td>
                    <td class="px-6 py-4">
                      {{$request->bloodgroup}}
                    </td>
                    <td class="px-6 py-4">
                   {{$request->address}}
                      </td>
                      <td class="px-6 py-4">
                        <img src="{{asset('images/people/'.$request->photopath)}}" class="w-24" alt="">
                      </td>
                      
                </tr>
                @endforeach
            
            </tbody>
        </table>
    </div>
    
@endsection