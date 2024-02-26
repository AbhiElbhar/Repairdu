
@extends('layouts.admin.main')

@section('content')
<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <div class="page-container">
        <!-- main content area start -->
        <div class="main-content">
            <div class="main-content-inner">
                <span class="panel-title d-none">Package List</span>            
                <div class="row">
                    <div class="col-md-12 text-center"> 
                        @foreach ($pricing as $item)
                        @if ($loop->index == 0)
                        
                        <button class="btn btn-primary btn-xs" id="btn-monthly">{{$item->time}}</button>
                        @else
                        <button class="btn btn-outline-info btn-xs" id="btn-yearly">{{$item->time}}</button>
                        
                        @endif                 
                        @endforeach  
                    </div>
                </div>
                @foreach ($pricing as $item)
                @if ($loop->index == 0)
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
                                    <div class="single-feature">
                                        <td><a href="{{route('pricing.edit',$item->id)}}"><button class="btn btn-primary">Edit</button></a> </td>
                                        <td><form action="{{route('pricing.destroy',$item->id)}}" class= "action" method="POST"> @csrf  @method('DELETE') <button class="btn btn-danger">Delete</button></form></td> 
                                    </div>                         
                                </div>
                            </div>
                        </div>                  
                    </div>
                    @endforeach
                </div>
                @endif
                @endforeach
                @foreach ($pricing as $item)
                @if ($loop->index == 1)
                <div class="row g-24 yearly-package"> 
                    <!-- yearly -->                       
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
                                <td><a href="{{route('pricing.edit',$item->id)}}"><button class="btn btn-primary">Edit</button></a> </td>
                                <td><form action="{{route('pricing.destroy',$item->id)}}" class= "action" method="POST"> @csrf  @method('DELETE') <button class="btn btn-danger">Delete</button></form></td> 
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>                     
                @endif
                @endforeach
                
                
            </div><!--End main content Inner-->
            
        </div><!--End main content-->
        
    </div><!--End Page Container-->
    
    <script src="{{asset('users/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('users/assets/js/jquery.min.js')}}"></script>
    <!-- jQuery  -->
    {{-- <script src="https://repairdu.com/public/backend/assets/js/vendor/jquery-2.2.4.min.js"></script> --}}
    
    {{-- <script src="https://repairdu.com/public/backend/assets/js/scripts.js?v=2.0"></script> --}}
    
    
    <!-- Custom JS -->
    
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
</div>

@endsection 


