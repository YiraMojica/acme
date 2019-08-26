<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ACME</title>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700","Asap+Condensed:500"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
    <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/demo/demo10/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      @yield('css')
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body class="m-page--fluid m-page--loading-enabled m-page--loading m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default" >
  <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">

			<header id="m_header" class="m-grid__item m-header "  m-minimize="minimize" m-minimize-mobile="minimize" m-minimize-offset="10" m-minimize-mobile-offset="10" >
				<div class="m-header__top">
					<div class="m-container m-container--fluid m-container--full-height m-page__container">
  						<div class="m-stack m-stack--ver m-stack--desktop">
                @guest
  							<div class="m-stack__item m-brand m-stack__item--left">
  								<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
  									<div class="m-stack__item m-stack__item--middle m-brand__logo">
                      <a href="{{ url('/') }}" class="m-brand__logo-wrapper">
                    <img alt="" src="assets/demo/demo10/media/img/logo/logo.png" class="m-brand__logo-desktop"/>
                    <img alt="" src="assets/demo/demo10/media/img/logo/logo_mini.png" class="m-brand__logo-mobile"/>
                      </a>
  									</div>
  									<div class="m-stack__item m-stack__item--middle m-brand__tools">
  										<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
  											<a href="#" class="dropdown-toggle m-dropdown__toggle btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
  												<span>
  													Más Opciones
  												</span>
  											</a>
  											<div class="m-dropdown__wrapper">
  												<span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
  												<div class="m-dropdown__inner">
  													<div class="m-dropdown__body">
  														<div class="m-dropdown__content">
  															<ul class="m-nav">
  																<li class="m-nav__separator m-nav__separator--fit"></li>
  																<li class="m-nav__item">
                                    @if (Route::has('register'))
  																	<a href="{{ route('register') }}" class="m-nav__link">
  																		<i class="m-nav__link-icon flaticon-chat-1"></i>
  																		<span class="m-nav__link-text">
  																			Resgistrarse
  																		</span>
  																	</a>
                                    @endif
  																</li>
  															</ul>
  														</div>
  													</div>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  							</div>
                  @else
                <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
                  <div class="m-stack__item m-stack__item--middle m-brand__logo">
                      <a href="#" class="m-brand__logo-wrapper">
                    <img alt="" src="assets/demo/demo10/media/img/logo/logo.png" class="m-brand__logo-desktop"/>
                    <img alt="" src="assets/demo/demo10/media/img/logo/logo_mini.png" class="m-brand__logo-mobile"/>
                      </a>
                  </div>
                </div>
  							<div class="m-stack__item m-stack__item--right m-header-head" id="m_header_nav">
  								<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
  									<div class="m-stack__item m-topbar__nav-wrapper">
  										<ul class="m-topbar__nav m-nav m-nav--inline">
  											<li class="m-nav__item m-nav__item--accent m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1" style="margin-right: 82px;">
  												<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
  													<span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
  													<span class="m-nav__link-icon">
  														<span class="m-nav__link-icon-wrapper">
  															<i class="flaticon-add-circular-button"></i>
  														</span>
  													</span>
  												</a>
  												<div class="m-dropdown__wrapper">
  													<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
  													<div class="m-dropdown__inner">
  														<div class="m-dropdown__header m--align-center">
  															<span class="m-dropdown__header-title">
  																Administrar
  															</span>
  														</div>
  														<div class="m-dropdown__body">
  															<div class="m-dropdown__content">
  																<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
  																	<li class="nav-item m-tabs__item">
  																		<a class="nav-link m-tabs__link active" href="{{route('users.index')}}" >
  																			Usuarios
  																		</a>
  																	</li>
  																	<li class="nav-item m-tabs__item">
  																		<a class="nav-link m-tabs__link"  href="{{route('vehiculos.index')}}" >
  																			Vehiculos
  																		</a>
  																	</li>
  																	<li class="nav-item m-tabs__item">
  																		<a class="nav-link m-tabs__link"  href="{{route('marcas.index')}}">
  																			Marca
  																		</a>
  																	</li>
  																</ul>
  														</div>
  													</div>
  												</div>
  											</li>  											
  											<li class="m-nav__item m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
  												<a href="#" class="m-nav__link m-dropdown__toggle">
  													<span class="m-topbar__userpic">
  														<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
  													</span>
  													<span class="m-nav__link-icon m-topbar__usericon  m--hide">
  														<span class="m-nav__link-icon-wrapper">
  															<i class="flaticon-user-ok"></i>
  														</span>
  													</span>
  													<span class="m-topbar__username m--hide">
  														Mark
  													</span>
  												</a>
  												<div class="m-dropdown__wrapper">
  													<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
  													<div class="m-dropdown__inner">
  														<div class="m-dropdown__header m--align-center">
  															<div class="m-card-user m-card-user--skin-light">
  																<div class="m-card-user__pic">
  																	<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
  																</div>
  																<div class="m-card-user__details">
  																	<span class="m-card-user__name m--font-weight-500">
  																		{{ Auth::user()->name }}
  																	</span>
  																	<a href="" class="m-card-user__email m--font-weight-300 m-link">
  																		{{ Auth::user()->	email }}
  																	</a>
  																</div>
  															</div>
  														</div>
  														<div class="m-dropdown__body">
  															<div class="m-dropdown__content">
  																<ul class="m-nav m-nav--skin-light">
  																	<li class="m-nav__separator m-nav__separator--fit"></li>
  																	<li class="m-nav__item">
  																		<a  href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
  																			Salir
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                                @csrf
                                         </form>
  																		</a>
  																	</li>
  																</ul>
  															</div>
  														</div>
  													</div>
  												</div>
  											</li>
  										</ul>
  									</div>
  								</div>
  							</div>
                  @endguest
  						</div>
					</div>
				</div>
			</header>
	<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body" style="margin-top: 8%;  margin-left: 28px;  margin-right: 28px;">
		<div class="m-grid__item m-grid__item--fluid m-wrapper" style="overflow: auto;  max-height: 165%;">
			<div class="m-content">
          @yield('content')
			</div>
		</div>
	</div>
	<footer class="m-grid__item m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-footer__wrapper">
						<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
							<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
								<span class="m-footer__copyright">
									2017 &copy; Metronic theme by
									<a href="https://keenthemes.com" class="m-link">
										Keenthemes
									</a>
								</span>
							</div>
							<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
								<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												Presentado por:
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="#"  class="m-nav__link">
											<span class="m-nav__link-text">
												Yiraudys
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												Mojica
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												Rangel
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
											<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
  <script src="{{asset('js/jquery-1.8.3.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/demo/demo10/base/scripts.bundle.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}" type="text/javascript"></script>

  <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
