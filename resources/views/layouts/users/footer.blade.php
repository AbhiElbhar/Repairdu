<div class="container">
    <div class="row">
        <div class="bg-footer-one-shape">
            <div class="wrapper">
                <img class="footer_shape small" src="assets/images/footer/01.png" alt="Footer_bg" data-sal-delay="150" data-sal="zoom-in" data-sal-duration="800">
                <img class="footer_shape large" src="assets/images/footer/02.png" alt="Footer_bg" data-sal-delay="150" data-sal="zoom-in" data-sal-duration="800">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="footer-one-left">
                @foreach ($details as $item)

                <a class="logo" href="{{route('index')}}">
                    <img src="{{asset('Admin/images/'.$item->logo)}}" alt="Logo_image" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                </a>
                <p class="disc" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                   {!!$item->address!!}
                </p>
                                            
                @endforeach
                <ul class="social-area">
                    @foreach ($social_media as $item)

                    <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{$item->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                    <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{$item->twitter}}"><i class="fab fa-twitter"></i></a></li>
                    <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{$item->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                    <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{$item->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                        
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="footer-right-one">
                <div class="single-wized-footer">
                    <h5 class="title-heading" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        Software Features
                    </h5>
                    <ul class="list">
                        @foreach ($feature as $item)

                        <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"><a href="{{route('feature',$item->title)}}">{{$item->title}}</a></li>
                            
                        @endforeach
                    </ul>
                </div>
                <div class="single-wized-footer">
                    <h5 class="title-heading" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        Resourses
                    </h5>
                    <ul class="list">
                        <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"><a href="{{route('knowledge_base')}}">Knowledge Base</a></li>
                        <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800"><a href="{{route('faq')}}">FAQs</a></li>
                        <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800"><a href="{{route('industry_category')}}">Industries</a></li>
                    </ul>
                </div>
                <div class="single-wized-footer">
                    <h5 class="title-heading" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        Support
                    </h5>
                    <ul class="list">
                        <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"><a href="{{route('contact')}}">Contact Us</a></li>
                        <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800"><a href="{{route('policy')}}">Privacy & Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>