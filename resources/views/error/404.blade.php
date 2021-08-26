
@extends('frontend.layouts.master')
@section('title') 404 Not Found - @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Aurum @endif  @endsection
@section('styles')
<style>
      .center-content-wrapper{
            text-align:center;
      }
      .center-content {
      margin-bottom: 50px;
      }
</style>
@endsection
@section('content')


<main id="wrapper type1">
        <section class="container ">
            <div class="center-content-wrapper"> 
                <div class="center-content ">
                    <img src="{{asset('/images/uploads/page-404.jpg')}}" alt="Page 404" class="mb-5">
                    <h1 class="fs-30 lh-16 text-dark font-weight-600 mb-5">Oops! That page can’t be found.</h1>
                   
                  
                </div>
            </div>
        </section>
    </main>  
@endsection 
