<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui" />
	<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
	<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
	<link href="/css/style.css" rel="stylesheet" type="text/css" />
	<!--[if IE 9]>
        <link href="/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
	<link rel="shortcut icon" href="/img/kitaolahraga-fav.png" />
	<title>{{trans('app.Register')}} | KuyRek</title>
</head>

<body class="style-3">

	<!-- LOADER -->
	<div id="loader-wrapper">
		<div class="bubbles">
			<div class="title">{{trans('app.loading')}}</div>
			<span></span>
			<span id="bubble2"></span>
			<span id="bubble3"></span>
		</div>
	</div>

	<div id="content-block">

		<div class="content-center fixed-header-margin">
			<!-- HEADER -->
			@include('layout.header')

			<div class="content-push">

				<div class="breadcrumb-box">
					<a href="/">{{trans('app.Home')}}</a>
					<a>{{trans('app.Register')}}</a>
				</div>

				<div class="information-blocks">
					<div class="row">
						<div class="col-sm-6 information-entry">
							<div class="login-box">
								<div class="article-container style-1">
									<h3>{{trans('app.Donthaveaccount')}}</h3>
									<p>{{trans('app.Ifdonthaveaccount')}}</p>
								</div>
								<form role="form" method="POST" action="{{ route('register') }}">
                  {{ csrf_field() }}
                  <label>{{trans('app.FullName')}}</label>
									<input class="simple-field" tid="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus />
                  @if ($errors->has('name'))
                      <span class="help-block alert alert-danger">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
									<label>{{trans('app.Email')}}</label>
									<input class="simple-field" tid="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required />
                  @if ($errors->has('email'))
                      <span class="help-block alert alert-danger">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                  <label>{{trans('app.Password')}}</label>
									<input class="simple-field" id="password" type="password" class="form-control" name="password" required />
                  @if ($errors->has('password'))
                      <span class="help-block alert alert-danger">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                  <label>{{trans('app.PasswordConfirmation')}}</label>
									<input class="simple-field" id="password-confirm" type="password" class="form-control" name="password_confirmation" required />
                  <div class="button style-4 col-md-12">{{trans('app.Register')}}<input type="submit" value="" /></div>
									<p class="text-center">{{trans('app.or')}}</p>
									</br>
									<a href="/auth/google" class="button style-4 col-md-12"><span class="fa fa-google-plus"></span> {{trans('app.RegisterGoogle')}}</a>
									<a href="/auth/facebook" class="button style-4 col-md-12"><span class="fa fa-facebook"></span> {{trans('app.RegisterFacebook')}}</a>
								</form>
							</div>
						</div>
						<div class="col-sm-6 information-entry">
							<div class="login-box">
								<div class="article-container style-1">
									<h3>{{trans('app.Youhaveaccount')}}</h3>
									<p>{{trans('app.Ifhaveaccount')}}</p>
								</div>
								<a href="/login" class="button style-17 col-md-12">{{trans('app.Login')}}</a>
								<p class="text-center">{{trans('app.or')}}</p>
								</br>
								<a href="/auth/google" class="button style-17 col-md-12"><span class="fa fa-google-plus"></span> {{trans('app.LoginGoogle')}}<input type="submit" value="" /></a>
								<a href="/auth/facebook" class="button style-17 col-md-12"><span class="fa fa-facebook"></span> {{trans('app.LoginFacebook')}}<input type="submit" value="" /></a>
							</div>
						</div>
					</div>
				</div>

				<!-- FOOTER -->
				@include('layout.footer')

			</div>

		</div>
		<div class="clear"></div>

	</div>

  @include('layout.search')
  @include('layout.cart')

	<script src="/js/jquery-2.1.3.min.js"></script>
	<script src="/js/idangerous.swiper.min.js"></script>
	<script src="/js/global.js"></script>

	<!-- custom scrollbar -->
	<script src="/js/jquery.mousewheel.js"></script>
	<script src="/js/jquery.jscrollpane.min.js"></script>
</body>

</html>
