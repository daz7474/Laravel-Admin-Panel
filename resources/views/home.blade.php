@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">
                Welcome {{ auth()->user()->name }}!
            </h2>

            {{-- Dashboard --}}

            <div class="card mb-4">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-primary p-3 mt-auto" href="/users">
                                View All Users
                            </a>

                            <a class="btn btn-primary p-3 mt-auto" href="/companies">
                                View All Companies
                            </a>

                            <a class="btn btn-primary p-3 mt-auto" href="/employees">
                                View All Employees
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Featured --}}

            {{-- Companies --}}
            <div class="card mb-4">
                <div class="card-header">{{ __('Featured Companies') }}</div>

                <div class="card-body">
                    <div class="d-flex flex-column align-items-center">
                        @foreach ($companies as $company)
                            <div class="text-center border-bottom pb-3 my-3">
                                <a href="{{ route('companies.show', $company) }}">
                                    <img src="{{ asset('storage/' . $company->logo) }}" width="250" alt="Company Logo" class="rounded mb-4">
                                    <h4>{{ $company->name }}</h4>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Employees --}}
            <div class="card mb-4">
                <div class="card-header">{{ __('Featured Employees') }}</div>

                <div class="card-body">
                    <div class="d-flex flex-column align-items-center">
                        @foreach ($employees as $employee)
                            <div class="text-center border-bottom pb-3 my-3">
                                <a href="{{ route('employees.show', $employee) }}">
                                    <img src="https://i.pravatar.cc/100?u={{ $employee->email }}" width="100" alt="Employee Avatar" class="rounded-circle mb-4">
                                    <h4>{{ $employee->first_name }}</h4>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
