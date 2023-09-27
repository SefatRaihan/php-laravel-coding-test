@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row m-0 p-0">
        <div class="col-md-7">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Transaction Type</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Fee</th>
                    <th scope="col">Date</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($withdrawals as $withdrawal)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $withdrawal->user->name }}</td>
                            <td>{{ $withdrawal->user->balance }}</td>
                            <td>{{ $withdrawal->transaction_type }}</td>
                            <td>{{ $withdrawal->amount }}</td>
                            <td>{{ $withdrawal->fee }}</td>
                            <td>{{ $withdrawal->date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-5">
            <form method="POST" action="{{ route('withdrawal.store') }}">
                @csrf
                {{-- <div class="form-group">
                <label for="exampleFormControlSelect1">Transaction Type</label>
                <select class="form-control" name="transaction_type" id="transaction_type">
                    <option value="deposit">Deposit</option>
                    <option value="withdrawal">Withdrawal</option>
                </select>
                </div> --}}
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" class="form-control" name="amount" id="amount" placeholder="0.00 Tk">
                </div>
                {{-- <div class="form-group">
                    <label for="fee">Fee</label>
                    <input type="number" name="fee" class="form-control" id="fee" placeholder="0.00 Fee">
                </div> --}}
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" class="form-control" id="date">
                </div>
                <div class="mt-2 justify-content-center d-flex">
                    <div class="me-2">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Withdrawal') }}
                        </button>
                    </div>
                    <div>
                        <a href="{{ route('deposit.all') }}" class="btn btn-info">
                            {{ __('Back') }}
                        </a>
                    </div>
                </div>
            </form> 
            
        </div>
    </div>
</div>
@endsection