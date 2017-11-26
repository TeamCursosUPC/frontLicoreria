@extends('layout.layout-admin')
@section('title', 'Licoreria')
@section('content')
	<div id="container">
		@include('dashboard.metricas01')
		<div class="row">
			@include('dashboard.listMembers')
			@include('dashboard.metricas02')
		</div>
	</div>
@endsection
