<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#employee">
                Add Employee
            </button>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#company">
                Add Company
            </button>
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="btn btn-primary right mb-3" href="{{route('company.index')}}">
                       Show Companies
                    </a>

                    <div>
                        @include('table')
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('employee.create')
@include('employee.edit')
@include('company.create')

