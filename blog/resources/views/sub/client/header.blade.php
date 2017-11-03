header start-->
<header class="l-header l-header_overlay">

    <div class="l-navbar l-navbar_expand l-navbar_t-light-trans js-navbar-sticky">
        <div class="container-fluid">
            <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                <!--logo start-->
                <a href="index-2.html" class="logo-brand">
                    <img class="retina" src="{{asset('massive/img/logo.png')}}" alt="Massive">
                </a>
                <!--logo end-->
                @php
                    $cateMenu = App\Category::where('is_menu', 1)->get();
                @endphp
                <!--mega menu start-->
                <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                    @foreach ($cateMenu as $cmn)
                        <li class="">
                            <a href="{{route('cate.detail', ['cateSlug' => $cmn->slug])}}">{{$cmn->name}}</a>
                        </li>

                    @endforeach
                    <li>
                        <a href="javascript:void(0)"><i class="fa fa-search"></i> Search</a>
                        <div class="megamenu megamenu-quarter-width navbar-search">
                            <form role="searchform">
                                <input type="text" class="form-control" placeholder="Search Here">
                            </form>
                        </div>
                    </li>
                </ul>
                <!--mega menu end-->

            </nav>
        </div>
    </div>
</header>
<!--header end