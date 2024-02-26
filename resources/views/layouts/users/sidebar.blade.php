<button class="close-icon-menu"><i class="far fa-times"></i></button>
<!-- inner menu area desktop start -->
<div class="rts-sidebar-menu-desktop">
    @foreach ($details as $item)
    
    <a class="logo-1" href="{{route('index')}}"><img class="logo" src="{{asset('Admin/images/'.$item->logo)}}" alt="axela_logo"></a>
    <a class="logo-2" href="{{route('index')}}"><img class="normal logo" src="{{asset('Admin/images/'.$item->favicon)}}" alt="axela-logo"></a>
    
    @endforeach
    <div class="body d-none d-xl-block">
        @foreach ($about as $item)
        
        <p class="disc">
           {!!$item->description!!}
        </p>
        
        @endforeach
        <div class="social-wrapper-two">
            <ul class="social-area">
                @foreach ($social_media as $item)

                <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{$item->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{$item->twitter}}"><i class="fab fa-twitter"></i></a></li>
                <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{$item->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{$item->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                    
                @endforeach
            </ul>
        </div>
        <div class="get-in-touch mt--50">
            <!-- title -->
            <div class="h6 title">Get In Touch</div>
            <!-- title End -->
            @foreach ($details as $item)

            <div class="wrapper">
                <!-- single -->
                <div class="single">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:{{$item->mobile_no}}">{{$item->mobile_no}}</a>
                </div>
                <!-- single ENd -->
                <!-- single -->
                <div class="single">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:{{$item->email}}">{{$item->email}}</a>
                </div>
                <!-- single ENd -->
                <!-- single -->
                <div class="single">
                    <i class="fas fa-globe"></i>
                    <a href="{{route('index')}}">www.repairdu.com</a>
                </div>
                <!-- single ENd -->
                <!-- single -->
                <div class="single">
                    <i class="fas fa-map-marker-alt"></i>
                    <a href="#">{!!$item->address!!}</a>
                </div>
                <!-- single ENd -->
            </div>
                            
            @endforeach
        </div>
    </div>
    <div class="body-mobile d-block d-xl-none">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu" id="mobile-menu-active">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li class="has-droupdown">
                    <a href="#">SOftware Feature</a>
                    <ul class="submenu">
                        @foreach ($feature as $item)
                        
                        <li><a class="single" href="{{route('feature',$item->title)}}">{{$item->title}}</a></li>
                        
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="{{route('pricing')}}">pricing</a>
                </li>
                <li>
                    <a href="{{route('contact')}}">Contact Us</a>
                </li>
            </ul>
        </nav>
        <div class="social-wrapper-two mt--50">
            <ul class="social-area">
                @foreach ($social_media as $item)

                <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{$item->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{$item->twitter}}"><i class="fab fa-twitter"></i></a></li>
                <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{$item->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{$item->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                    
                @endforeach
            </ul>
        </div>
        <!-- <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a> -->
    </div>
</div>
<!-- inner menu area desktop End -->