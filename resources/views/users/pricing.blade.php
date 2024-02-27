
@extends('layouts.users.main')

@section('content')
<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Pricing</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="active">Home</a>
                    <span> / </span>
                    <a href="{{route('pricing')}}" class="active" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">Pricing</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->
















<div class="pricing-area-h2 rts-section-gap" id="pricing">
    <div class="container">
        <div class="row mb--30">
            <div class="title-area text-center">
                <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate">Price Table</span>
                <h2 class="title animated fadeIn sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Our Price Plan</h2>
            </div>
        </div>
        
        <div class="text-center">
            <div class="gap-3 btn-group mb-4" role="group" aria-label="Pricing">
                <button type="button" class="rts-btn btn-primary btn-lg" id="btn-monthly">Monthly</button>
                <button type="button" class="rts-btn btn-outline-info btn-lg" id="btn-yearly">Yearly</button>
            </div>
        </div>
        
        @foreach ($pricing as $item)
        @if ($loop->index == 0)
        @php
        $id = $item->time
        @endphp
        <div class="row g-24 monthly-package">  
            <!-- monthly-->
            @foreach ($item->pricing as $item)          
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="single-pricing-area-h2" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    
                    <div class="pricing-header standard">
                        <div class="pricing-head">
                            <h5 class="title">{{$item->package}}</h5>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <h3 class="title">{{$item->price}} ₹ <span>/monthly</span></h3>
                        <div class="feature-area">
                            <div class="single-feature">
                                @if ($item->staff_accounts == 'no')
                                <i class="fas fa-times-circle"></i> <span> {{$item->staff_accounts}} Staff Accounts</span>  
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->staff_accounts}} Staff Accounts</span>
                                @endif                                
                            </div>
                            <div class="single-feature">
                                @if ($item->contacts_limit == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->contacts_limit}}  Contacts Limit</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->contacts_limit}}  Contacts Limit</span>
                                @endif
                            </div>
                            <div class="single-feature">
                                @if ($item->invoice_limit == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->invoice_limit}}  Invoice Limit</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->invoice_limit}}  Invoice Limit</span>
                                @endif
                            </div>
                            <div class="single-feature">
                                @if ($item->quotation_limit == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->quotation_limit}}  Quotation Limit</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->quotation_limit}}  Quotation Limit</span>
                                @endif
                            </div>
                            <div class="single-feature">
                                @if ($item->project_management == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->project_management}}  Project Management</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->project_management}}  Project Management</span>
                                @endif
                            </div>
                            <div class="single-feature">
                                @if ($item->recurring_transaction == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->recurring_transaction}}  Recurring Transaction</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->recurring_transaction}}  Recurring Transaction</span>
                                @endif
                            </div>
                            <div class="single-feature">
                                @if ($item->inventory_module == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->inventory_module}}  Inventory Module</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->inventory_module}}  Inventory Module</span>
                                @endif
                            </div><div class="single-feature">
                                @if ($item->live_chat == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->live_chat}}  Live Chat</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->live_chat}}  Live Chat</span>
                                @endif
                            </div><div class="single-feature">
                                @if ($item->file_manager == 'no')
                                <i class="fas fa-times-circle"></i></i><span> {{$item->file_manager}}  File Manager</span>
                                @else
                                <i class="fas fa-check-circle"></i></i><span> {{$item->file_manager}}  File Manager</span>
                                @endif
                            </div>
                            <div class="single-feature">
                                @if ($item->online_payment == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->online_payment}}  Online Payment</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->online_payment}}  Online Payment</span>
                                @endif
                            </div>                         
                        </div>                       
                        <a class="rts-btn btn-secondary" href="{{route('register1',[$id,$item->package])}}">Get Started</a>
                    </div>
                    
                </div>
            </div>
            @endforeach         
        </div>
        @endif
        @if ($loop->index == 1)
        @php
        $id = $item->time
        @endphp
        <div class="row g-24 yearly-package">
            <!-- yearly-->
            @foreach ($item->pricing as $item)                    
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="single-pricing-area-h2" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    
                    <div class="pricing-header standard">
                        <div class="pricing-head">
                            <h5 class="title">{{$item->package}}</h5>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <h3 class="title">{{$item->price}} ₹ <span>/yearly</span></h3>
                        <div class="feature-area">
                            <div class="single-feature">
                                @if ($item->staff_accounts == 'no')
                                <i class="fas fa-times-circle"></i> <span> {{$item->staff_accounts}} Staff Accounts</span>  
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->staff_accounts}} Staff Accounts</span>
                                @endif                                
                            </div>
                            <div class="single-feature">
                                @if ($item->contacts_limit == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->contacts_limit}}  Contacts Limit</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->contacts_limit}}  Contacts Limit</span>
                                @endif
                            </div>
                            <div class="single-feature">
                                @if ($item->invoice_limit == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->invoice_limit}}  Invoice Limit</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->invoice_limit}}  Invoice Limit</span>
                                @endif
                            </div>
                            <div class="single-feature">
                                @if ($item->quotation_limit == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->quotation_limit}}  Quotation Limit</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->quotation_limit}}  Quotation Limit</span>
                                @endif
                            </div>
                            <div class="single-feature">
                                @if ($item->project_management == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->project_management}}  Project Management</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->project_management}}  Project Management</span>
                                @endif
                            </div>
                            <div class="single-feature">
                                @if ($item->recurring_transaction == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->recurring_transaction}}  Recurring Transaction</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->recurring_transaction}}  Recurring Transaction</span>
                                @endif
                            </div>
                            <div class="single-feature">
                                @if ($item->inventory_module == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->inventory_module}}  Inventory Module</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->inventory_module}}  Inventory Module</span>
                                @endif
                            </div><div class="single-feature">
                                @if ($item->live_chat == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->live_chat}}  Live Chat</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->live_chat}}  Live Chat</span>
                                @endif
                            </div><div class="single-feature">
                                @if ($item->file_manager == 'no')
                                <i class="fas fa-times-circle"></i></i><span> {{$item->file_manager}}  File Manager</span>
                                @else
                                <i class="fas fa-check-circle"></i></i><span> {{$item->file_manager}}  File Manager</span>
                                @endif
                            </div>
                            <div class="single-feature">
                                @if ($item->online_payment == 'no')
                                <i class="fas fa-times-circle"></i><span> {{$item->online_payment}}  Online Payment</span>
                                @else
                                <i class="fas fa-check-circle"></i><span> {{$item->online_payment}}  Online Payment</span>
                                @endif
                            </div>                         
                        </div>
                        <a class="rts-btn btn-secondary" href="{{route('register1',[$id,$item->package])}}">Get Started</a>
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>       
        @endif
        @endforeach
        

    </div>
</div>
{{-- </div> --}}
{{-- </div> --}}
<script src="{{asset('users/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('users/assets/js/jquery.min.js')}}"></script>
{{-- <script src="https://repairdu.com/public/backend/assets/js/scripts.js?v=2.0"></script>  --}}




<script>
    $(document).ready(function(){
        $(window).on('load', function(){
        $(".monthly-package").fadeIn(800);
        $(".yearly-package").css('display','none');
        $(this).removeClass('btn-outline-info').addClass('btn-primary');
        $('#btn-yearly').removeClass('btn-primary').addClass('btn-outline-info');
        });
    });
    $(document).on('click','#btn-monthly',function(){
        $(".monthly-package").fadeIn(800);
        $(".yearly-package").css('display','none');
        $(this).removeClass('btn-outline-info').addClass('btn-primary');
        $('#btn-yearly').removeClass('btn-primary').addClass('btn-outline-info');
    });
    
    $(document).on('click','#btn-yearly',function(){
        $(".yearly-package").fadeIn(800);
        $(".monthly-package").css('display','none');
        $(this).removeClass('btn-outline-info').addClass('btn-primary');
        $('#btn-monthly').removeClass('btn-primary').addClass('btn-outline-info');
    });
    
    
</script>


@endsection 

@push('title')
    @php
        $pricing = 'Pricing'
    @endphp
    {{$pricing}}
@endpush
