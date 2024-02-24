<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-2 col-md-3 col-4">
            <!-- logo area start -->
            <a href="{{route('index')}}" class="thumbnail">
                @foreach ($details as $item)

                <img class="active-light" src="{{asset('Admin/images/'.$item->logo)}}" alt="axela-logo">
                <img class="active-dark" src="{{asset('Admin/images/'.$item->favicon)}}" alt="axela-logo">
                                    
                @endforeach
            </a>
            <!-- logo area end -->
        </div>
        <div class="col-lg-7 d-none d-xl-block">
            <div class="main-header">
                <nav class="main-nav">
                    <ul class="mainmenu">
                        <li>
                            <a href="{{route('index')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">About</a>
                        </li>
                        <li class="has-droupdown">
                            <a href="#">Software Features</a>
                            <ul class="submenu">
                                @foreach ($feature as $item)

                                <li><a class="single" href="{{route('feature',$item->title)}}">{{$item->title}}</a></li>
                                
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('pricing')}}">Pricing</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-xl-3 col-lg-10 col-md-9 col-8">
            <div class="header-right">

                <a href="{{route('register')}}" class="rts-btn btn-secondary" style="width: 150px; background-color: lightgrey;">Get Started</a>
                {{-- @if (Route::has('login'))
                    @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle rts-btn btn-secondary call-btn" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item rts-btn btn-secondary call-btn" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                @csrf
                            </form>
                        </div>
                    </li>
                    @else
                        <a href="{{ route('login') }}" class="rts-btn btn-secondary call-btn mr-2">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="rts-btn btn-secondary login-btn">Register</a>
                        @endif
                    @endauth
                @endif --}}

                {{-- <a href="#" class="rts-btn btn-secondary call-btn">Let’s Talk
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.96875 7C5.96875 6.46875 5.5 6 4.96875 6H4.5C3.375 6 2.5 6.90625 2.5 8.03125V9.5C2.5 10.625 3.375 11.5 4.5 11.5H5C5.53125 11.5 6 11.0625 6 10.5L5.96875 7ZM8 0C3.5 0 0.125 3.75 0 8V9.25C0 9.6875 0.3125 10 0.71875 10C1.09375 10 1.5 9.6875 1.5 9.25V8C1.5 4.4375 4.40625 1.53125 8 1.53125C11.5625 1.53125 14.5 4.4375 14.5 8V12.5C14.5 13.2188 13.9375 13.75 13.25 13.75H9.78125C9.53125 13.3125 9.03125 13 8.5 13H7.53125C6.8125 13 6.15625 13.5 6 14.2188C5.84375 15.1875 6.5625 16 7.46875 16H8.5C9.03125 16 9.53125 15.7188 9.78125 15.25H13.25C14.75 15.25 16 14.0312 16 12.5V8C15.8438 3.75 12.4688 0 8 0ZM11.5 11.5C12.5938 11.5 13.5 10.625 13.5 9.5V8.03125C13.5 6.90625 12.5938 6 11.5 6H11C10.4375 6 10 6.46875 10 7.03125V10.5C10 11.0625 10.4375 11.5 11 11.5H11.5Z" fill="#3B38EB" />
                    </svg>
                </a> --}}
                <a id="menu-btn" href="#" class="rts-btn btn-secondary menu-btn" onclick="event.preventDefault();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
                        <rect y="12" width="18" height="2" fill="#3B38EB" />
                        <rect x="5" y="6" width="8" height="2" fill="#3B38EB" />
                        <rect width="18" height="2" fill="#3B38EB" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>