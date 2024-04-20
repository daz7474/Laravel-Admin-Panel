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
                            <div class="text-center mt-3">
                                <h2>Featured Companies</h2>
                            @foreach ($companies as $company)
                                <div class="border-bottom pb-3 my-5">
                                    <img src="{{ asset('storage/' . $company->logo) }}" width="150" height="80" alt="Company Logo" class="rounded">
                                </div>
                            @endforeach
                            </div>

                            <a class="btn btn-primary p-3 mt-auto" href="/companies">
                                View All Companies
                            </a>
                        </div>

                        <div class="col-md-6 d-flex flex-column align-items-center">
                            <div class="text-center mt-3">
                                <h2>Featured Employees</h2>
                                @foreach ($employees as $employee)
                                <div class="border-bottom pb-3 my-3">
                                    <img src="https://i.pravatar.cc/60?u={{ $employee->email }}" alt="Avatar" width="60" height="60" class="rounded-circle mb-3">
                                    <h4>{{ "$employee->first_name $employee->last_name" }}</h4>
                                </div>
                                @endforeach
                            </div>

                            <a class="btn btn-primary p-3 mt-auto" href="/employees">
                                View All Employees
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
