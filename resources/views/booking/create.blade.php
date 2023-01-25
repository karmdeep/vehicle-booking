<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" >
<style>
    .invalid-feedback {
    display: block !important;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #dc3545;
}
</style>
<div style="padding: 40px;">
@if(\Session::has('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">
        x
    </button>
    <strong>{{\Session::get('error')}}</strong>
</div>
@endif
@if(\Session::has('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">
        x
    </button>
    <strong>{{\Session::get('success')}}</strong>
</div>
@endif
<form method="POST" action="{{ route('booking.store') }}" enctype="multipart/form-data" id="manage-user-form">

{{ csrf_field() }}

    <div class="grid custom-row">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="{{ old('customer_name', '') }}" name="customer_name" class="form-control" id="customer_name" placeholder="Enter name">
            <span class="invalid-feedback" role="alert">
            @error('customer_name')
                <strong>{{ $message }}</strong>
            @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" value="{{ old('email', '') }}" class="form-control" id="email" placeholder="Enter email">
       <span class="invalid-feedback" role="alert">
            @error('email')
                <strong>{{ $message }}</strong>
            @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" name="phone" value="{{ old('phone', '') }}" class="form-control" id="phone" placeholder="Enter phone">
        <span class="invalid-feedback" role="alert">
            @error('phone')
                <strong>{{ $message }}</strong>
            @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="vehicle_id">Vehicle</label>
            <select class="form-control" name="vehicle_id" id="vehicle_id">
            <option value="">Select</option>
            @foreach($vehicles as $k=>$v)
            <option value="{{$k}}">{{htmlentities($v)}}</option>
            @endforeach
            </select>
            <span class="invalid-feedback" role="alert">
            @error('vehicle_id')
                <strong>{{ $message }}</strong>
            @enderror
            </span>
        </div>

        <label for="">Booking Type: </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="booking_type" id="inlineRadio1" value="full-day">
            <label class="form-check-label" for="inlineRadio1">Full Day</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="booking_type" id="inlineRadio2" value="half-day">
            <label class="form-check-label" for="inlineRadio2">Half Day</label>
        </div>
        <span class="invalid-feedback" role="alert">
            @error('booking_type')
                <strong>{{ $message }}</strong>
            @enderror
            </span>


        <div class="form-group">
            <label for="exampleInputEmail1">Booking Date</label>
            <input type="date" id="booking_date" name="booking_date" value="{{ old('booking_date', '') }}">
        <span class="invalid-feedback" role="alert">
            @error('booking_date')
                <strong>{{ $message }}</strong>
            @enderror
            </span>
        </div>

        <label for="">Booking Shift: </label>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="booking_shift" id="inlineRadio11" value="morning">
            <label class="form-check-label" for="inlineRadio11">Morning</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="booking_shift" id="inlineRadio21" value="evening">
            <label class="form-check-label" for="inlineRadio21">Evening</label>
        </div>
        <span class="invalid-feedback" role="alert">
            @error('booking_shift')
                <strong>{{ $message }}</strong>
            @enderror
            </span>

        <div class="form-col form-col-full">
            <div class="user-screen-btn-wrapper">
                <button type="submit" class="login-btn btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</form>
</div>
