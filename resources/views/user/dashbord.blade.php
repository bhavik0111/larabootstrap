@extends('user.layout.master')

@section('content')
<div class="py-12">
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1>{{ __("User Dashbord") }}</h1>
            </div>
        </div>
    </div>
    <div class="card-body">
       <h3>{{ __('Comming soon...............')}}</h3>
    </div>
</div>


@endsection

