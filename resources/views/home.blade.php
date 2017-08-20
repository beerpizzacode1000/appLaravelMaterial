@extends('master')
@section('title', 'Home')
@section('content')
<div class="container">
	<div class="row banner">
		<div class="col-md-12">
			<h1 class="text-center margin-top-100 editContent">
			Practica General de Laravel
			</h1>
			<h3 class="text-center margin-top-100 editContent">Construcción de App</h3>
				<div class="text-center">
					<img src="/images/20151005112448.jpg" width="600" height="350" alt="">
                    
				</div>
                <div class="text-center">
					<a href="javascript:void(0)" class="btn btn-raised active"><code>.active</code></a>
                    <a href="javascript:void(0)" class="btn btn-raised btn-default">Default</a>
                    <a href="javascript:void(0)" class="btn btn-raised btn-primary">Primary</a>
                    <a href="javascript:void(0)" class="btn btn-raised btn-success">Success</a>
                    <a href="javascript:void(0)" class="btn btn-raised btn-info">Info</a>
                    <a href="javascript:void(0)" class="btn btn-raised btn-warning">Warning</a>
                    <a href="javascript:void(0)" class="btn btn-raised btn-danger">Danger</a>
                    <a href="javascript:void(0)" class="btn btn-raised btn-link">Link</a>
                </div>
                <div class="text-center">
                    <a href="javascript:void(0)" class="btn btn-default btn-fab"><i class="material-icons">grade</i></a>
                    <a href="javascript:void(0)" class="btn btn-primary btn-fab"><i class="material-icons">grade</i></a>
                    <a href="javascript:void(0)" class="btn btn-success btn-fab"><i class="material-icons">grade</i></a>
                    <a href="javascript:void(0)" class="btn btn-info btn-fab"><i class="material-icons">grade</i></a>
                    <a href="javascript:void(0)" class="btn btn-warning btn-fab"><i class="material-icons">grade</i></a>
                    <a href="javascript:void(0)" class="btn btn-danger btn-fab"><i class="material-icons">grade</i></a>
                 </div>
                
			</div>
		</div>
	</div>
@endsection