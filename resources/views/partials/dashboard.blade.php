@extends('layouts.app')
@section('title','Escritorio - '.config('app.name'))
@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-3 animated bounceInUp">
				<div class="row">
					<div class="iconfo col-md-5">
						<h3>{{ $total['banners'] }}</h3>
						<h4 class="perq">@lang('app.banners')</h4>
					</div>
					<div class="iconfo col-md-5">
						<span style="font-size: 75px; color: #0094d0; padding: 7px;" class="fa fa-desktop animated infinite pulse"></span>
					</div>
					<div class="incofo2 col-md-10 text-center">
						<a class="verm" href="{{route('banner.index')}}">@lang('app.see_more')<span class="glyi glyphicon glyphicon-circle-arrow-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 animated bounceInUp">
				<div class="row">
					<div class="iconfo col-md-5">
						<h3>{{ $total['sections'] }}</h3>
						<h4 class="perq">@lang('app.sections')</h4>
					</div>
					<div class="iconfo col-md-5">
						<span style="font-size: 75px; color: #0094d0; padding: 7px;" class="fa fa-list-alt animated infinite pulse"></span>
					</div>
					<div class="incofo2 col-md-10 text-center">
						<a class="verm" href="{{route('section.index')}}">@lang('app.see_more')<span class="glyi glyphicon glyphicon-circle-arrow-right"></span></a>
					</div>
				</div>				
			</div>
			<div class="col-md-3 animated bounceInUp">
				<div class="row">
					<div class="iconfo col-md-5">
						<h3>{{ $total['collections'] }}</h3>
						<h4 class="perq1">@lang('app.collections')</h4>
					</div>
					<div class="iconfo col-md-5">
						<span style="font-size: 80px; color: #0094d0; padding: 5px;" class="fa fa-stack-overflow animated infinite pulse"></span>
					</div>
					<div class="incofo2 col-md-10 text-center">
						<a class="verm" href="{{route('collection.index')}}">@lang('app.see_more')<span class="glyi glyphicon glyphicon-circle-arrow-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 animated bounceInUp">
				<div class="row">
					<div class="iconfo col-md-5">
						<h3>{{ $total['models'] }}</h3>
						<h4 class="perq1">@lang('app.models')</h4>
					</div>
					<div class="iconfo col-md-5">
						<span style="font-size: 80px; color: #0094d0; padding: 5px;" class="fa fa-edit animated infinite pulse"></span>
					</div>
					<div class="incofo2 col-md-10 text-center">
						<a class="verm" href="{{route('model.index')}}">@lang('app.see_more')<span class="glyi glyphicon glyphicon-circle-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</div>
		<div style="margin-top: 40px;" class="row">
			<div class="col-md-3 animated bounceInUp">
				<div class="row">
					<div class="iconfo col-md-5">
						<h3>{{ $total['pages'] }}</h3>
						<h4 class="perq1">@lang('app.pages')</h4>
					</div>
					<div class="iconfo col-md-5">
						<span style="font-size: 80px; color: #0094d0; padding: 5px;" class="fa fa-file-text animated infinite pulse"></span>
					</div>
					<div class="incofo2 col-md-10 text-center">
						<a class="verm" href="{{route('page.index')}}">@lang('app.see_more')<span class="glyi glyphicon glyphicon-circle-arrow-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 animated bounceInUp">
				<div class="row">
					<div class="iconfo col-md-5">
						<h3>{{ $total['distributors'] }}</h3>
						<h4 class="perq">@lang('app.distributors')</h4>
					</div>
					<div class="iconfo col-md-5">
						<span style="font-size: 75px; color: #0094d0; padding: 7px;" class="fa fa-shopping-cart animated infinite pulse"></span>
					</div>
					<div class="incofo2 col-md-10 text-center">
						<a class="verm" href="{{route('distributor.index')}}">@lang('app.see_more')<span class="glyi glyphicon glyphicon-circle-arrow-right"></span></a>
					</div>
				</div>		
			</div>
			<div class="col-md-3 animated bounceInUp">
				<div class="row">
					<div class="iconfo col-md-5">
						<h3>{{ $total['users'] }}</h3>
						<h4 class="perq">@lang('app.users')</h4>
					</div>
					<div class="iconfo col-md-5">
						<span style="font-size: 75px; color: #0094d0; padding: 7px;" class="fa fa-users animated infinite pulse"></span>
					</div>
					<div class="incofo2 col-md-10 text-center">
						<a class="verm" href="{{ route('user.index') }}">@lang('app.see_more')<span class="glyi glyphicon glyphicon-circle-arrow-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 animated bounceInUp">
				<div class="row">
					<div class="iconfo col-md-5">
						<h3>{{ $total['roles'] }}</h3>
						<h4 class="perq">@lang('app.roles')</h4>
					</div>
					<div class="iconfo col-md-5">
						<span style="font-size: 75px; color: #0094d0; padding: 7px;" class="fa fa-circle animated infinite pulse"></span>
					</div>
					<div class="incofo2 col-md-10 text-center">
						<a class="verm" href="{{ route('role.index') }}">@lang('app.see_more')<span class="glyi glyphicon glyphicon-circle-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</div>
		<div style="padding-top: 40px;" class="row">
			<div class="col-md-3 animated bounceInUp">
				<div class="row">
					<div class="iconfo col-md-5">
						<h3>{{ $total['permissions'] }}</h3>
						<h4 class="perq">@lang('app.permissions')</h4>
					</div>
					<div class="iconfo col-md-5">
						<span style="font-size: 75px; color: #0094d0; padding: 7px;" class="fa fa-cogs animated infinite pulse"></span>
					</div>
					<div class="incofo2 col-md-10 text-center">
						<a class="verm" href="permission.index">@lang('app.see_more')<span class="glyi glyphicon glyphicon-circle-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</div>
</div>
@endsection