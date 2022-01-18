@extends('admin.layouts.admin')

@section('content')
<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="row g-3">
        <div class="col-md-12"> <span>Payment Method</span>
            {{-- <div class="card">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header p-0">
                            <h2 class="mb-0"> <button class="btn btn-light btn-block text-left p-3 rounded-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="my-2">Pay with Bkash</span>
                                    <div class="d-flex align-items-center justify-content-between mr-5"> 
                                        <div class="px-9 pr-2"> <img src="https://seeklogo.com/images/B/bkash-logo-FBB258B90F-seeklogo.com.png" width="100px" height="auto"></div>
                                    </div>
                                </button> </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body payment-card-body"> <span class="font-weight-normal card-text">Bkash Number</span>
                                <div class="input"> <i class="fa fa-credit-card"></i> <input type="text" class="form-control" placeholder="0000 0000 0000 0000"> </div>
                                <div class="row mt-3 mb-3">
                                    <div class="col-md-12"> <span class="font-weight-normal card-text">Transaction Id</span>
                                        <div class="input"> <i class="fa fa-calendar"></i> <input type="text" class="form-control" placeholder="Transaction Id"> </div>
                                    </div>
                                </div> <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your transaction is secured with ssl certificate</span>
                            </div>
                        </div>
                        <a href="{{ route('payment') }}" class="m-2 btn btn-primary btn-block free-button">Subscribe to get started</a>
                    </div>
                </div>
            </div> --}}

            <div class="accordion-1">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="accordion" id="accordionRental">
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Pay with Bkash
                                        <i class="collapse-close fa fa-arrow-down text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-arrow-up-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                                    <div class="accordion-body text-sm opacity-8">
                                        <form method="POST" class="insert_form" action="{{ route('subscription-payment') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Your Bkash Number</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="mobile_number" aria-describedby="emailHelp">
                                                <span class="text-muted certificate-text"><i class="fa fa-lock"></i> The Number you are using to subscribe</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Transaction Id</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name="transaction_id">
                                            </div>
                                            <input type="hidden" name="payment_method" value="bkash">
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">I Agree with the terms and poclicy</label>
                                            </div>
                                            <button type="submit" class="m-2 btn btn-primary btn-block free-button">Subscribe to get started</button><br>
                                            <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your transaction is secured with ssl certificate</span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Pay with Nogod
                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                                    <div class="accordion-body text-sm opacity-8">
                                        <form action="{{ route('subscription-payment') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Your Nogod Number</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mobile_number">
                                                <span class="text-muted certificate-text"><i class="fa fa-lock"></i> The Number you are using to subscribe</span>
                                            </div>
                                            <input type="hidden" name="payment_method" value="nogod">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Transaction Id</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name="transaction_id">
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">I Agree with the terms and poclicy</label>
                                            </div>
                                            <button type="submit" class="m-2 btn btn-primary btn-block free-button">Subscribe to get started</button><br>
                                            <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your transaction is secured with ssl certificate</span>
                                        </form>
                                    </div>
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