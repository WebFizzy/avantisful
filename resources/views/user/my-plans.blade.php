@extends('user.layouts.index')

@section('title', "$title - My Plans")
@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            @if (Session::has('successTrans'))
            <div class="row">
                <div class="col-xl-4">
                    <div class="alert alert-success">
                        <h4 class="text-center">
                            {{ Session::get('successTrans') }}
                        </h4>
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col">
                    <div class="page-description page-description-tabbed">
                        <h1 id="">@lang('messages.myInvestmentPlans')</h1>

                        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="account-tab" data-bs-toggle="tab" data-bs-target="#basic" type="button" role="tab" aria-controls="basic" aria-selected="true">Starter Plan 🤖</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="account-tab" data-bs-toggle="tab" data-bs-target="#silver" type="button" role="tab" aria-controls="silver" aria-selected="true">Gold Plan 🤖</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#gold" type="button" role="tab" aria-controls="gold" aria-selected="false">Advanced Plan 🤖</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#premium" type="button" role="tab" aria-controls="premium" aria-selected="false">Premium Plan 🤖</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#exclusive" type="button" role="tab" aria-controls="exclusive" aria-selected="false">Exclusive Plan 🤖</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#vip" type="button" role="tab" aria-controls="vip" aria-selected="false">VIP Plan 🤖</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#last" type="button" role="tab" aria-controls="last" aria-selected="false">Shares Plan 🤖</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="community-tab">
                            <div class="card">
                                <div class="card-body">
                                    @if ($basic_plans->isEmpty())
                                        You have not purchased Starter Plan🤖 yet! Join a plan to start earning.
                                    @else
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Days left</th>
                                                    <th scope="col">Date Bought</th>
                                                    <th scope="col">Profit Expected</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($basic_plans as $basic_plan) 
                                                <tr>
                                                    <th scope="row">{{ $basic_plan->id }}</th>
                                                    <td>${{ $basic_plan->amount }}</td>
                                                    <td>{{ $basic_plan->days_left }}</td>
                                                    <td>{{ $basic_plan->created_at }}</td>
                                                    <td>${{ $basic_plan->plan_profit }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col">
                                                {{ $basic_plans->links() }}
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="silver" role="tabpanel" aria-labelledby="community-tab">
                            <div class="card">
                                <div class="card-body">
                                    @if ($silver_plans->isEmpty())
                                        You have not purchased the Gold Plan🤖 yet! Join a plan to start earning.
                                    @else
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Days left</th>
                                                    <th scope="col">Date Bought</th>
                                                    <th scope="col">Profit Expected</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($silver_plans as $silver_plan) 
                                                <tr>
                                                    <th scope="row">{{ $silver_plan->id }}</th>
                                                    <td>${{ $silver_plan->amount }}</td>
                                                    <td>{{ $silver_plan->days_left }}</td>
                                                    <td>{{ $silver_plan->created_at }}</td>
                                                    <td>${{ $silver_plan->plan_profit }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col">
                                                {{ $silver_plans->links() }}
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="gold" role="tabpanel" aria-labelledby="personal-tab">
                            <div class="card">
                                <div class="card-body">
                                    @if ($gold_plans->isEmpty())
                                        You have not purchased the Advanced Plan🤖! Join a plan to start earning.
                                    @else
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Amount</th>
                                                         <th scope="col">Days left</th>
                                                        <th scope="col">Date Bought</th>
                                                        <th scope="col">Profit Expected</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($gold_plans as $gold_plan) 
                                                    <tr>
                                                        <th scope="row">{{ $gold_plan->id }}</th>
                                                        <td>${{ $gold_plan->amount }}</td>
                                                        <td>{{ $gold_plan->days_left }}</td>
                                                        <td>{{ $gold_plan->created_at }}</td>
                                                        <td>${{ $gold_plan->plan_profit }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col">
                                                    {{ $gold_plans->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="personal-tab">
                            <div class="card">
                                <div class="card-body">
                                    @if ($premium_plans->isEmpty())
                                        You have not purchased the Premium Plan🤖! Join a plan to start earning.
                                    @else
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Amount</th>
                                                         <th scope="col">Days left</th>
                                                        <th scope="col">Date Bought</th>
                                                        <th scope="col">Profit Expected</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($premium_plans as $premium_plan) 
                                                    <tr>
                                                        <th scope="row">{{ $premium_plan->id }}</th>
                                                        <td>${{ $premium_plan->amount }}</td>
                                                        <td>{{ $premium_plan->days_left }}</td>
                                                        <td>{{ $premium_plan->created_at }}</td>
                                                        <td>${{ $premium_plan->plan_profit }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col">
                                                    {{ $premium_plans->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="exclusive" role="tabpanel" aria-labelledby="personal-tab">
                            <div class="card">
                                <div class="card-body">
                                    @if ($exclusive_plans->isEmpty())
                                        You have not purchased the Exclusive Plan🤖! Join a plan to start earning.
                                    @else
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Amount</th>
                                                         <th scope="col">Days left</th>
                                                        <th scope="col">Date Bought</th>
                                                        <th scope="col">Profit Expected</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($exclusive_plans as $exclusive_plan) 
                                                    <tr>
                                                        <th scope="row">{{ $exclusive_plan->id }}</th>
                                                        <td>${{ $exclusive_plan->amount }}</td>
                                                        <td>{{ $exclusive_plan->days_left }}</td>
                                                        <td>{{ $exclusive_plan->created_at }}</td>
                                                        <td>${{ $exclusive_plan->plan_profit }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col">
                                                    {{ $exclusive_plans->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="vip" role="tabpanel" aria-labelledby="personal-tab">
                            <div class="card">
                                <div class="card-body">
                                    @if ($vip_plans->isEmpty())
                                        You have not purchased the VIP Plan🤖! Join a plan to start earning.
                                    @else
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Amount</th>
                                                         <th scope="col">Days left</th>
                                                        <th scope="col">Date Bought</th>
                                                        <th scope="col">Profit Expected</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($vip_plans as $vip_plan) 
                                                    <tr>
                                                        <th scope="row">{{ $vip_plan->id }}</th>
                                                        <td>${{ $vip_plan->amount }}</td>
                                                        <td>{{ $vip_plan->days_left }}</td>
                                                        <td>{{ $vip_plan->created_at }}</td>
                                                        <td>${{ $vip_plan->plan_profit }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col">
                                                    {{ $vip_plans->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="shares" role="tabpanel" aria-labelledby="personal-tab">
                            <div class="card">
                                <div class="card-body">
                                    @if ($shares_plans->isEmpty())
                                        You have not purchased the Shares Plan🤖! Join a plan to start earning.
                                    @else
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Amount</th>
                                                         <th scope="col">Days left</th>
                                                        <th scope="col">Date Bought</th>
                                                        <th scope="col">Profit Expected</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($shares_plans as $shares_plan) 
                                                    <tr>
                                                        <th scope="row">{{ $shares_plan->id }}</th>
                                                        <td>${{ $shares_plan->amount }}</td>
                                                        <td>{{ $shares_plan->days_left }}</td>
                                                        <td>{{ $shares_plan->created_at }}</td>
                                                        <td>${{ $shares_plan->plan_profit }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col">
                                                    {{ $shares_plans->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection