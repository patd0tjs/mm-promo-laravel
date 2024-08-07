@extends('promo.layout')

@section('content')

    <form action="{{ route('promo.store') }}" method="post">
        @csrf

        {{-- name input row --}}
        <div class="row mb-3">
            <div class="col">
                <label>Full Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>

        {{-- address input row --}}
        <div class="row mb-3">
            <div class="col">
                <label>Full Address:</label>
                <input type="text" class="form-control" name="address">
            </div>
        </div>

        {{-- mobile number input row --}}
        <div class="row mb-3">
            <div class="col">
                <label>Mobile Number:</label>
                <input type="tel" class="form-control" name="mobile">
            </div>
        </div>

        {{-- email input row --}}
        <div class="row mb-3">
            <div class="col">
                <label>Email:</label>
                <input type="email" class="form-control" name="email">
            </div>
        </div>

        {{-- birthday input row --}}
        <div class="row mb-3">
            <div class="col">
                <label>Birthday:</label>
                <input type="date" class="form-control" name="birthday">
            </div>
        </div>

        {{-- submit button row --}}
        <div class="row">
            <div class="col" align="center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection