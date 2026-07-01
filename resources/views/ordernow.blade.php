@extends('master')
@section('content')

<div class="container-fluid  " style="max-height: 1200px; height:500px; margin:20px 0 ">
    <div class="col-sm-7" style="margin-left: auto; margin-right:auto; ">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul style="margin:0; padding-left: 18px;">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <table class="table table-striped ">

            <tbody>
                <tr>

                    <td class="fw-bold">Price</td>
                    <td>{{$total}} Rs</td>

                </tr>
                <tr>

                    <td class="fw-bold">Delivery Charges</td>
                    <td>150 Rupees</td>
                </tr>
                <tr>

                    <td class="fw-bold fs-5">Total Amount</td>
                    <td class="fw-bold fs-5">{{$total + 150}}</td>
                </tr>
            </tbody>
        </table>
        <form action="orderplace" method="post">
            <div class="mb-3">
                @csrf
                <textarea placeholder="Enter Your Address" name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <span class="fw-bold fs-5">Payment Method</span>
            <div class="mb-3">
                <p>
                    <input type="radio" value="Online Payment" name="payment" id="pay_online">
                    <label for="pay_online">Online Payment</label>
                </p>
                <p>
                    <input type="radio" value="Cash on Delivery" name="payment" id="pay_cod">
                    <label for="pay_cod">Cash on Delivery</label>
                </p>
            </div>
            <button class="btn btn-info">Order Now</button>
        </form>


    </div>
</div>

@endsection