@php
	$invalidatingCacheStr = "";
    if(config("app.env") == 'local') $invalidatingCacheStr = "?ver=".date('YmdHis'); //개발서버용
    if(config("app.env") == 'production') $invalidatingCacheStr = "?ver=202001212"; //운영서버용d
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Client @yield('title')</title>
<!-- 공통폰트 -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- 공통스타일 -->
<script src="/css/app.css{{$invalidatingCacheStr}}"></script>

<!-- 공통스크립트 -->
<script src="/js/app.js{{$invalidatingCacheStr}}"></script>
<script src="/js/common.js{{$invalidatingCacheStr}}"></script>
</head>
