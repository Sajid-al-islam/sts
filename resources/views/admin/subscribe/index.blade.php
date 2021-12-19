@extends('admin.layouts.admin')

@section('content')
{{-- <div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="row g-3">
        <div class="col-md-6"> <span>Student Information</span>
            <div class="card">
                <form class="p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Name</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Age</label>
                                <input type="Name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">class</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Future Goal</label>
                                <input type="Name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Contact Number</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Address</label>
                                <input type="Name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-6"> <span>Payment Method</span>
            
        </div>
    </div>
</div> --}}

<div class="row">
    <div class="col-12">
        <div class="multisteps-form mb-5">
            <!--progress bar-->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto my-5">
                    <div class="multisteps-form__progress">
                        <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                            <span>User Info</span>
                        </button>
                        <button class="multisteps-form__progress-btn" type="button" title="Address">Education Information</button>
                    </div>
                </div>
            </div>
            <!--form panels-->
            <div class="row">
                <div class="col-12 col-lg-8 m-auto">
                    <form class="multisteps-form__form mb-8" method="POST" action="{{ route('payment') }}" style="height: 408px;">
                        @csrf
                        <!--single form panel-->
                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                            <h5 class="font-weight-bolder mb-0">About me</h5>
                            <p class="mb-0 text-sm">Mandatory informations</p>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>Name</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Michael" name="name" />
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Age</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Prior" name="age" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <label>Address</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Street 111" name="address" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Email Address</label>
                                        <input class="multisteps-form__input form-control" type="email" placeholder="eg. soft@dashboard.com" name="email" />
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>phone Number</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. soft@dashboard.com" name="phone" />
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                </div>
                            </div>
                        </div>
                        <!--single form panel-->
                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                            <h5 class="font-weight-bolder">Educational Information</h5>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>Class</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Michael" name="class" />
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Future Goal</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Prior" name="future_goal" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>Parents Name</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Michael" name="parents_name" />
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Parents Contact Number</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Prior" name="parents_contact" />
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" title="Next">Next</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection