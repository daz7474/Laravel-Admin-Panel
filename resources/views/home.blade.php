@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">
                Welcome {{ auth()->user()->name }}!
            </h2>

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 d-flex flex-column align-items-center">
                            <h2 class="mb-3">Featured Companies</h2>
                            <a class="btn btn-primary p-3" href="/companies">
                                View All Companies
                            </a>

                            <div class="text-center mt-5">
                            @foreach ($companies as $company)
                                <div class="border-bottom pb-3 mb-3">
                                    <h4>{{ $company->name }}</h4>
                                    <h5>{{ $company->email }}</h5>
                                    <img src="{{ asset('storage/logos/' . $company->logo) }}" width="250" alt="Company Logo" class="rounded">
                                </div>
                            @endforeach
                            </div>
                        </div>

                        <div class="col-md-6 d-flex flex-column align-items-center">
                            <h2 class="mb-3">Featured Employees</h2>
                            <a class="btn btn-primary p-3" href="/employees">
                                View All Employees
                            </a>

                            <div class="text-center mt-5">
                                @foreach ($employees as $employee)
                                <div class="border-bottom pb-3 mb-3">
                                    <h4>{{ "$employee->first_name $employee->last_name" }}</h4>
                                    <h5>{{ $employee->email }}</h5>
                                </div>
                                    
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
