@php
	$invalidatingCacheStr = "";
    if(config("app.env") == 'local') $invalidatingCacheStr = "?ver=".date('YmdHis'); //개발서버용
    if(config("app.env") == 'production') $invalidatingCacheStr = "?ver=202001212"; //운영서버용d
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title>Client @yield('title')</title>
<!-- 공통폰트 -->
{{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

<!-- 공통스타일 -->
{{-- <link href="/css/app.css{{$invalidatingCacheStr}}"  rel="stylesheet" type="text/css" />  --}}
<link href="/css/common.css{{$invalidatingCacheStr}}"  rel="stylesheet" type="text/css" /> 
<link href="/css/shim.css{{$invalidatingCacheStr}}"  rel="stylesheet" type="text/css" /> 

<!-- 공통스크립트 -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
<script src="/js/app.js{{$invalidatingCacheStr}}"></script>
<script src="/js/common.js{{$invalidatingCacheStr}}"></script>
{{-- <script src="/js/shim.js{{$invalidatingCacheStr}}"></script> --}}
</head>
