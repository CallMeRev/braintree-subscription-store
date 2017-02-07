@extends('layouts.app')

@section('content')

<div class="hero">
    <div class="hero-content">
        <h1>You're Joining!</h1>
        <h2>Hooray!</h2>
    </div>
</div>

<section class="container">
    <div class="card card-padded">

    <form action="/subscribe" method="POST" id="subscribe-form">
        {!! csrf_field() !!}

        @if (Auth::check())
        <div class="section-header">
          <div id="dropin-container"></div>
             <input type="hidden" name="plan" value="{{ $product->id  }}">

             <hr>
           <button id="payment-button" class="btn btn-primary btn-flat hidden" type="submit">Pay now</button>
        </div>

        <div class="form-group">
            <div class="row">
            @else
            {{ view('auth.login') }}
            @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif
      </div>
</form>

      <script>
           $.ajax({
               url: '{{ url('braintree/token') }}'
           }).done(function (response) {
               braintree.setup(response.data.token, 'dropin', {
                   container: 'dropin-container',
                   onReady: function () {
                       $('#payment-button').removeClass('hidden');
                   }
               });
           });
       </script>
</section>

@endsection
