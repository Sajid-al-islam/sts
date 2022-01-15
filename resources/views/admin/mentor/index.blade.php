@extends('admin.layouts.admin')

@section('content')
<div class="row">
<div class="col-12 col-lg-8 m-auto">
    <form class="multisteps-form__form mb-8" method="POST" action="{{ route('mentor.create') }}" style="height: 408px;">
        @csrf
        <!--single form panel-->
        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
            <h5 class="font-weight-bolder mb-0">About Mentor</h5>
            <p class="mb-0 text-sm">Mandatory informations</p>
            <div class="multisteps-form__content">
                <div class="row mt-3">
                    <div class="col-12 col-sm-6">
                        <label>Name</label>
                        <input class="multisteps-form__input form-control" value="{{ Auth::user()->name }}" type="text" placeholder="eg. Michael" name="name" />
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <label>Institute</label>
                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Prior" name="institute" />
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label>Subjects</label>
                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Street 111" name="subject" />
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <label>Email Address</label>
                        <input class="multisteps-form__input form-control" type="email" value="{{ Auth::user()->email }}"  placeholder="eg. soft@dashboard.com" name="email" />
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <label>phone Number</label>
                        <input class="multisteps-form__input form-control" type="text" value="{{ Auth::user()->phone }}" placeholder="eg. soft@dashboard.com" name="contact" />
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-sm-12 mt-3 mt-sm-0">
                        <label>Address</label>
                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. soft@dashboard.com" name="address" />
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <label>Nid/Instituation Id no</label>
                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. soft@dashboard.com" name="mentor_id" />
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <label>Interested Class</label>
                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. soft@dashboard.com" name="interested" />
                    </div>
                </div>
                
                <div class="button-row d-flex mt-4">
                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" title="Next">Next</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
@endsection