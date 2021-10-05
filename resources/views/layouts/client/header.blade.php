<div>
@if (Route::has('login'))
    <div>
            <a href="{{ url('/')  }}" >home</a>
            <a href="{{ route('intro') }}">회사소개</a>
            <a href="{{ route('whyus') }}">왜 CHIA 마이닝랩인가?</a>
            <a href="{{ route('miningsite') }}">채굴현장</a>
            <a href="{{ route('purchase') }}">채굴기구매</a>
            <a href="{{ route('faq') }}">FAQ</a>
            <a href="{{ route('contact') }}">문의하기</a>
        @auth
            <a href="{{  route('mypage.dashboard') }}">마이페이지</a>
            <a href="{{  route('logout') }}">로그아웃</a>
        @else
            <a href="{{ route('login') }}">로그인</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">회원가입</a>
            @endif
        @endauth
    </div>
@endif

</div>