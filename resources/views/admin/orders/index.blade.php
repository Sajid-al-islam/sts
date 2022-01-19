@extends('admin.layouts.admin')

@section('content')

<div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Payment Method</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mobile number</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Transaction Id</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($payments as $payment)
            <tr>
            <td>
                <div class="d-flex px-2">
                  
                @foreach ($user_info as $item)
                    <div class="my-auto">
                      <h6 class="mb-0 text-xs">{{ $item }}</h6>
                  </div>
                @endforeach
                </div>
            </td>
            <td>
                <p class="text-xs font-weight-bold mb-0">{{ $payment->payment_method }}</p>
            </td>
            <td>
                <span class="badge badge-dot me-4">
                <i class="bg-info"></i>
                <span class="text-dark text-xs">{{ $payment->mobile_number }}</span>
                </span>
            </td>

            <td>
                <span class="badge badge-dot me-4">
                <i class="bg-info"></i>
                <span class="text-dark text-xs">{{ $payment->transaction_id }}</span>
                </span>
            </td>
            
            <td>
                <span class="badge badge-dot me-4">
                <i class="bg-info"></i>
                <span class="text-dark text-xs">{{ $payment->status }}</span>
                </span>
            </td>

            <td class="align-middle">
              <div class="dropdown">
                <button class="btn bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  Status
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <form action="{{ route('orderstatus_change') }}" method="post">
                    @csrf
                    <input type="hidden" name="student_id" value="{{ $payment->student_id }}">
                    <li><button class="dropdown-item" type="submit" name="payment_confirmation" value="1">Approve</button></li>
                    <li><button class="dropdown-item" type="submit" name="payment_confirmation" value="0" value="0">Deny</button></li>
                  </form>
                </ul>
              </div>
            </td>
            </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  </div>
  
@endsection