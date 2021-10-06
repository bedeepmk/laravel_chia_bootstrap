<div>
{{-- @if (Route::has('login'))
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
@endif --}}


<nav class="isPC">
    <div class="container-0">
        <a href="/"><h1 class="stylesheet">seekcruit</h1></a>
        <div class="text-0">
            @if (Route::has('login'))
                <a class="isMypage">norah yoon</a>
                <span class="stylesheet arrow"></span>
                <span></span>
                <a href="/employer">Sign out</a>
                <div class="layer-menu-mypage">
                    <div class="back-0"></div>
                    <div class="back-1"></div>
                    <div class="back-2"></div>
                    <div class="container-5">
                        <div class="portrait"></div>
                        <p class="text-4">norah yoon</p>
                    </div>
                    <ul>
                        <li><a href="">my profile</a></li>
                        <li><a href="">my career</a></li>
                        <li><a href="">application history</a></li>
                        <li><a href="">suggested jobs</a></li>
                        <li><a href="">resume archive</a></li>
                    </ul>
                    <a class="button-sign-out" href="">sign out</a>
                </div>
            @else
                <a href="/login">Sign in</a> or <a href="/register">Register</a> <span></span> <a href="/employer">Employer site</a>
            @endif
        </div>
    </div>
    <ul class="container-1 layout-100">
        <li class="selected"><a href="">Job Search</a></li>
        <li><a href="">Profile</a></li>
        <li><a href="">Seekcruit Guide</a></li>
        <li class="isMarket"><a>Market</a></li>
        <li><a href="">Community</a></li>
    </ul>
    <div class="layer-menu-market">
        <div class="back-0"></div>
        <div class="back-1"></div>
        <div class="back-2"></div>
        <ul>
            <li><a href="">Beauty and personal care</a></li>
            <li><a href="">Health and Household</a></li>
            <li><a href="">Tools & Home Improvement</a></li>
        </ul>
    </div>
    <div class="container-2">
        <form class="layout-100">
            <button type="button" class="button-category form-unit stylesheet">All Categories<span class="icon stylesheet"></span></button>
            <input type="text" name="keyword" class="input-keyword form-unit" placeholder="Job title, company, keyword">
            <input type="text" class="select-map form-unit stylesheet" value="Australia"></input>
            <input type="submit" class="button-submit form-unit stylesheet"></input>
        </form>
        <div class="layer-menu-category">
            <div class="back-0"></div>
            <div class="back-1"></div>
            <div class="back-2"></div>
            <div class="container-4">
                <ul class="depth-0 parent">
                    <li class="depth-0 child">
                        <div class="view-menu-category">
                            <input type="checkbox" id="horns" name="horns">
                            <label>Proffesionals</label>
                        </div>
                        <ul class="depth-1 parent">
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="depth-0 child">
                        <div class="view-menu-category">
                            <input type="checkbox" id="horns" name="horns">
                            <label>Proffesionals</label>
                        </div>
                        <ul class="depth-1 parent">
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="depth-0 child">
                        <div class="view-menu-category">
                            <input type="checkbox" id="horns" name="horns">
                            <label>Proffesionals</label>
                        </div>
                        <ul class="depth-1 parent">
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-3">
        <div class="container-11">
            <ul class="container-8 layout-100">
                <li class="work-type">
                    <p class="text-1">Part time</p>
                    <div class="arrow"></div>
                </li>
                <li class="paying-from">
                    <p class="text-1"><span>paying</span>$0</p>
                    <div class="arrow"></div>
                </li>
                <li class="paying-to">
                    <p class="text-1"><span>to</span>$200k+</p>
                    <div class="arrow"></div>
                </li>
                <li class="listed">
                    <p class="text-1"><span>listed in</span>Last 7 days</p>
                    <div class="arrow"></div>
                </li>
            </ul>
        </div>
        <div class="container-9">
            <ul class="container-10 layout-100">
                <li>Full time</li>
                <li>Casual/Vacation</li>
                <li>$0</li>
                <li>$100k</li>
                <li>$200k+</li>
                <li>Any time</li>
                <li>Today</li>
                <li>Last 14 days</li>
            </ul>
        </div>
    </div>
</nav>
<nav class="isMobile">
    <div class="image-back-drop"></div>
    <div class="container-0">
        <a href="/"><h1 class="stylesheet">seekcruit</h1></a>
    </div>
    <div class="container-3">
        <div class="container-11">
            <ul class="container-8 layout-100">
                <li class="work-type">
                    <p class="text-1">Part time</p>
                    <div class="arrow"></div>
                </li>
                <li class="paying-from">
                    <p class="text-1"><span>paying</span>$0</p>
                    <div class="arrow"></div>
                </li>
                <li class="paying-to">
                    <p class="text-1"><span>to</span>$200k+</p>
                    <div class="arrow"></div>
                </li>
                <li class="listed">
                    <p class="text-1"><span>listed in</span>Last 7 days</p>
                    <div class="arrow"></div>
                </li>
            </ul>
        </div>
        <div class="container-9">
            <ul class="container-10 layout-100">
                <li>Full time</li>
                <li>Casual/Vacation</li>
                <li>$0</li>
                <li>$100k</li>
                <li>$200k+</li>
                <li>Any time</li>
                <li>Today</li>
                <li>Last 14 days</li>
            </ul>
        </div>
    </div>
    <ul class="container-5">
        <li class="portrait"><a href=""></a></li>
        <li class="outside"><a href="">My Profile</a></li>
        <li class="outside"><a href="">My Account</a></li>
        <li class="underline"></li>
        <li class="selected"><a href="">Job Search</a></li>
        <li><a href="">Seekcruit Guide</a></li>
        <li class="isMarket"><a>Market</a></li>
        <li><a href="">Community</a></li>
        <li class="underline"></li>
        <li class="outside"><a href="">Sign out</a></li>
        <li class="underline"></li>
        <li class="outside"><a href="">Advertiser page</a></li>
    </ul>
    <div class="container-6">
        <form class="layer-menu-category">
            <div class="container-7">
                <ul class="depth-0 parent">
                    <li class="depth-0 child">
                        <div class="view-menu-category">
                            <input type="checkbox" id="horns" name="horns">
                            <label>Proffesionals</label>
                        </div>
                        <ul class="depth-1 parent">
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="depth-0 child">
                        <div class="view-menu-category">
                            <input type="checkbox" id="horns" name="horns">
                            <label>Proffesionals</label>
                        </div>
                        <ul class="depth-1 parent">
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="depth-0 child">
                        <div class="view-menu-category">
                            <input type="checkbox" id="horns" name="horns">
                            <label>Proffesionals</label>
                        </div>
                        <ul class="depth-1 parent">
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="depth-1 child">
                                <div class="view-menu-category">
                                    <input type="checkbox" id="horns" name="horns">
                                    <label>Arts and Media Professionals</label>
                                </div>
                                <ul class="depth-2 parent">
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>Business, Human Resource and Marketing Professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>design, engineering, science and transport professionals</label>
                                        </div>
                                    </li>
                                    <li class="depth-2 child">
                                        <div class="view-menu-category">
                                            <input type="checkbox" id="horns" name="horns">
                                            <label>education professionals</label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <input type="text" name="keyword" class="input-keyword form-unit" placeholder="Job title, company, keyword">
            <input type="text" class="select-map form-unit stylesheet" value="Australia"></input>
            <input type="submit" class="button-submit form-unit stylesheet" value="Search"></input>
        </form>
    </div>
    <div class="button-mobile-search">
        <div class="icon stylesheet"></div>
    </div>
    <div class="button-mobile-menu">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
</nav>

</div>