@extends('layouts.app')
@section('content')


<!--INSER THE PARTIALS INTO YOUR VIEW AND MAKE SURE TO HAVE JQUERY-CHAINED.JS -->
	@include('partials.province')
	@include('partials.city')

    <script>
    	$("#city_id").chained("#province_id");
    </script>

@endsection

