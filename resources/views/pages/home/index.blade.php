@extends('layouts.app')

@section('content')

<div class="container">
      <div class="row">
            <div class="col-lg-12 text-center">
                  <h1 class="page-title">Home Page</h1>
            </div>
      </div>

      <div class="col-lg-12 justify-content-center stcardarea">

            @forelse ($students as $student )
                  
            <div class="card stcard" style="width: 18rem;">
                  <img src="{{ config('images.access_path') }}/{{ $student->image }}" class="card-img-top" alt="image">
                  <div class="card-body">

                    <h5 class="card-title">{{ $student->name }}</h5>
                    
                  </div>
            </div>

            @empty

            <div class="row justify-content-center">
                  <div class="col-lg-12 text-center">
                        <h1 class="page-title">No Student Found</h1>
                  </div>
                  
            @endforelse

      </div>

</div>


@endsection


@push('css')

<style>
      .page-title{
            padding-top: 10vh;
      }

      .stcardarea{
            display: flex; 
            flex-wrap: wrap; 
      }

      .stcard{
            margin: 10px;
      }
</style>
      
@endpush