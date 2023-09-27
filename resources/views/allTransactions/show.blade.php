@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row m-0 p-0">
        <div class="col-md-12">
            <div class="justify-content-center d-flex">
                <a href="{{ route('deposit.index') }}" class="btn btn-success me-2">{{ __('Deposit') }}</a>
                <a href="{{ route('withdrawal.index') }}" class="btn btn-danger">{{ __('Withdrawal') }}</a>
            </div>
            <h2>Available Balance: {{ number_format($allTransactions[0]->user->balance ?? 0, 2, '.', ',') }} TK</h2>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Transaction Type</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Fee</th>
                    <th scope="col">Date</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($allTransactions as $allTransaction)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $allTransaction->user->name }}</td>
                            <td>{{ $allTransaction->transaction_type }}</td>
                            <td>{{ $allTransaction->amount }}</td>
                            <td>{{ $allTransaction->fee }}</td>
                            <td>{{ $allTransaction->date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection