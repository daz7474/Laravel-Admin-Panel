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

                <div class="card-body card-body-custom">
                    <div class="card-container">
                        @admin
                        <a class="btn btn-primary p-3 m-2" href="/users">
                            View All Users
                        </a>
                        @endadmin

                        <a class="btn btn-primary p-3 m-2" href="/companies">
                            View All Companies
                        </a>

                        <a class="btn btn-primary p-3 m-2" href="/employees">
                            View All Employees
                        </a>
                    </div>
                </div>

            </div>

            {{-- Featured --}}

            {{-- Companies --}}
            <div class="card mb-4">
                <div class="card-header">{{ __('Featured Companies') }}</div>

                <div class="card-body card-body-custom">
                    <div class="card-container">
                        @foreach ($companies as $company)
                            <div class="text-center pb-3 m-2">
                                <a href="{{ route('companies.show', $company) }}">
                                    <img src="{{ asset('storage/' . $company->logo) }}" width="100" alt="{{ $company->name }}" class="rounded mb-4">
                                    <h5>{{ $company->name }}</h5>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Employees --}}
            <div class="card mb-4">
                <div class="card-header">{{ __('Featured Employees') }}</div>

                <div class="card-body card-body-custom">
                    <div class="card-container">
                        @foreach ($employees as $employee)
                            <div class="text-center pb-3 m-2">
                                <a href="{{ route('employees.show', $employee) }}">
                                    <img src="https://i.pravatar.cc/80?u={{ $employee->email }}" width="80" height="80" alt="Employee Avatar" class="rounded-circle mb-4">
                                    <h4>{{ "$employee->first_name $employee->last_name" }}</h4>
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
