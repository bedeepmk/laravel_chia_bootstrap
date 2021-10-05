<div>
@if (Route::has('login'))
    <div>
        @auth
            <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">home</a>
            <a href="{{  route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">로그아웃</a>
        @else
            <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">home</a>
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">로그인</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">회원가입</a>
            @endif
        @endauth
    </div>
@endif

</div>