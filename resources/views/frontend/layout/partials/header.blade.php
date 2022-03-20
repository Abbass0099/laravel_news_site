<div class="header-top-area">
    <div class="container">
        <div class="header-top">
            <div class="info">
                <ul>
                    @php 
                        $timezone = 'Asia/Dhaka';
                        date_default_timezone_set($timezone);
                    @endphp
                    <li><span>{{ date('H:i:sa') }} - {{ date('d M Y') }}</span></li>

                    @guest
                        <li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a></li>
                        <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Sign in</a></li>
                        @else
                        <li><a href="{{ route('profile') }}"><i class="fas fa-user-alt"></i> {{ auth()->user()->name }}</a></li>
                        <li><a href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form-front').submit();"><i class="fas fa-sign-in-alt"></i> Logout</a></li>
                        <form id="logout-form-front" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest

                </ul>


                





            </div>
            

            @if(isset($newstickers) && count($newstickers) > 0) 
                <div class="breaking-news-ticker" id="breakingnewsticker">
                    <div class="bn-label">Breaking News</div>
                    <div class="bn-news">
                        <ul>
                            @foreach ($newstickers as $key => $news)
                                <li><a href="{{ route('page.news',$news->slug) }}">{{ ++$key}}. {{ $news->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="bn-controls">
                        <button><span class="bn-arrow bn-prev"></span></button>
                        <button><span class="bn-action"></span></button>
                        <button><span class="bn-arrow bn-next"></span></button>
                    </div>
                </div>
            @endif


            

            <div class="socials">
                <ul>
                    @if(isset($headersettings) && $headersettings['facebook'])
                        <li><a href="{{ $headersettings['facebook'] }}" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                    @endif
                    @if(isset($headersettings) && $headersettings['twitter'])
                        <li><a href="{{ $headersettings['twitter'] }}" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                    @endif
                    @if(isset($headersettings) && $headersettings['linkedin'])
                        <li><a href="{{ $headersettings['linkedin'] }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    @endif
                    @if(isset($headersettings) && $headersettings['youtube'])
                        <li><a href="{{ $headersettings['youtube'] }}" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                    @endif
                    @if(isset($headersettings) && $headersettings['vimeo'])
                        <li><a href="{{ $headersettings['vimeo'] }}" target="_blank"><i class="fab fa-vimeo-square"></i></a></li>
                    @endif
                </ul>
            </div>

            
        </div>
    </div>
</div>

{{--  --}}
{{--  --}}
{{--  --}}

<div class="search-form">
			<form>
				<div>
					<span class="close-search-form"><i class="fa fa-times fa-3x"></i></span>
					<input type="text" class="form-control" placeholder="بــحــث..." />
					<br />
					<button class="btn btn-custom">بــحــث</button>
				</div>
			</form>
		</div>
		<!-- End Section Search Form -->

		<!-- Start Section Nav -->

		<div class="nav" style="background-color:#3e5062;" >
			<div class="container">
				<div class="row">
					<div class="col">
						<nav class="navbar navbar-expand-lg navbar-light ">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<a class="navbar-brand d-lg-none show-search" href="#">بــحــث <i class="fa fa-search"></i></a>
							<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
								<div class="navbar-nav">
									<a class="nav-item nav-link active" href="index">الرئيسية</a>
									<a class="nav-item nav-link" href="posts">شروحات</a>
									{{-- <a class="nav-item nav-link" href="posts.html">روايات</a> --}}

									<a class="nav-item nav-link" href="single">تفاصيل المقال</a>
									<a class="nav-item nav-link" href="page">صفحة تجريبية</a>
									<a class="nav-item nav-link" href="privacy">سياسة الخصوصية</a>
									<a class="nav-item nav-link" href="contact">إتصل بنا</a>
								</div>
								<div class="navbar-nav mr-auto">
									<a class="nav-item nav-link facebook" href="#" title="facebook"><i class="fab fa-fw fa-facebook-square"></i> </a>
									<a class="nav-item nav-link twitter" href="#" title="twitter"><i class="fab fa-fw fa-twitter-square"></i> </a>
									<a class="nav-item nav-link linkedin" href="#" title="linkedin"><i class="fab fa-fw fa-linkedin"></i> </a>
									<a class="nav-item nav-link youtube" href="#" title="youtube"><i class="fab fa-fw fa-youtube"></i></a>
									<span class="nav-item nav-link show-search">بــحــث <i class="fa fa-search"></i></span>
								</div>
							</div>
						</nav>
					</div><!-- End Col -->
				</div><!-- End row -->
			</div><!-- End container -->
        </div>
        

        {{--  --}}
        {{--  --}}
        {{--  --}}

<div class="container">
    <div class="header-logo">
        <div class="logo">
            <a href="{{ route('home') }}">
                @if(isset($headersettings) && $headersettings['site_logo'])
                    <img src="{{ asset('images/'.$headersettings['site_logo']) }}" alt="Logo">
                @elseif(isset($headersettings) && $headersettings['site_name'])
                    {{ $headersettings['site_name'] }}
                @else
                    {{-- Janoub Media  --}}
                    <img src="img/kshaf1.jpg" width="100%" style="width:500px; margin-right:300px" />
                @endif
            </a>
        </div>
        <div class="myads">
            @foreach ($headerads as $item)
                @if (request()->is('/') && $item->type == 'home')
                    <img src="{{ asset('images/advertisements/'.$item->header_top) }}" alt="Ads" class="width-100">
                @elseif ($item->type == 'category')
                    @if(request()->path() == 'page/category/'.$item->slug)
                        <img src="{{ asset('images/advertisements/'.$item->header_top) }}" alt="Ads" class="width-100">
                    @endif
                @endif
                
            @endforeach
        </div>
    </div>
</div>