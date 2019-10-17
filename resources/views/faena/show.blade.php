@extends('layouts.app')

@section('content')


<section class="invoice-template">
  <div class="card">
    <div class="card-content p-3">
      <div id="invoice-template" class="card-body">
        {!! $calendario->calendar() !!}
        <!--/ Invoice Footer -->
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')
  {!! $calendario->script() !!}
@endsection