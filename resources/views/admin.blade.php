@extends('layout.layout-admin')
@section('title', 'Licoreria')
@section('content')
	<div id="container">
		@include('elements.dashboard.metricas01')
		<div class="row">
			@include('elements.dashboard.listMembers')
			@include('elements.dashboard.metricas02')
		</div>
	</div>
@endsection
