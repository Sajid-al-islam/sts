@extends('admin.layouts.admin') 

@section('content')
    
        <div class="row">
            <div class="col-md-12 me-auto text-left">
                <ul class="list-group mt-3">
                    {{-- @php
                        dd(Auth::user())
                    @endphp --}}
                    <li class="list-group-item">Username: {{ Auth::user()->username }}</li>
                    <li class="list-group-item">Email: {{ Auth::user()->email }}</li>
                    <li class="list-group-item">Referral link: {{ Auth::user()->referral_link }}</li>
                    <li class="list-group-item">Referrer: {{ Auth::user()->referrer->name ?? 'Not Specified' }}</li>
                    <li class="list-group-item">Refferal count: {{ count(Auth::user()->referrals)  ?? '0' }}</li>
                </ul>
            </div>
        </div>
    
@endsection
