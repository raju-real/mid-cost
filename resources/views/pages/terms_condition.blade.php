@extends('user.layouts.app')
@section('title','Terms & Condition')
@push('css')
@endpush

@section('content')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li>terms & condition</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--Privacy Policy area start-->
    <div class="privacy_policy_bg">
        <div class="container">
            <div class="privacy_policy_main_area">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                {!! App\Model\Policy::first()->terms_condition !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Privacy Policy area end-->
@endsection

@push('js')

@endpush