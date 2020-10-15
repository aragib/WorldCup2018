<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/Master/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Master/nav.css">
    <link rel="stylesheet" href="/css/Master/Footer.css">
    @yield('css')
</head>
<body>
    <header class="header">
        <nav>
            <div class="logo"><img src="/Images/Master Page/fifa.png" alt=""></div>
            <ul>
          
            </ul>
        </nav>
            <div class="headline">
                <div class="inner">
                    <h1>Hello</h1>
                    <p>Scroll down the page</p>
                </div>
            </div>
    </header>



@yield('body')




    <section class="section fi-pre-footer ">
        <div class="container-fluid">
            <div class="fi-footer-link">
                <!--SOCIAL-->
                <div class="fi-footer-link__social">
                    <h4 class="fi-social-channels__title">
                        Follow us on
                    </h4>
                </div>
                <ul class="nav fi-footer-link__menu">
                    <li class="ALLORA" data-tag="">

                        <a href="/worldcup/matches/?#knockoutphase">
                            Matches          </a>
                    </li>
                    <li class="ALLORA" data-tag="">

                        <a href="/worldcup/teams/">
                            Teams          </a>
                    </li>
                    <li class="ALLORA" data-tag="">

                        <a href="/worldcup/groups/">
                            Groups          </a>
                    </li>
                    <li class="ALLORA" data-tag="">

                        <a href="/worldcup/players/">
                            Players          </a>
                    </li>
                    <li class="ALLORA" data-tag="">

                        <a href="/worldcup/statistics/">
                            Statistics          </a>
                    </li>
                    <li class="ALLORA" data-tag="">

                        <a href="/worldcup/destination/">
                            Destination          </a>
                    </li>
                    <li class="ALLORA" data-tag="">

                        <a href="/worldcup/fan-zone/">
                            Fan Zone          </a>
                    </li>
                    <li class="ALLORA" data-tag="">

                        <a href="/worldcup/awards/">
                            Awards          </a>
                    </li>
                    <li class="ALLORA" data-tag="">

                        <a href="/worldcup/organisation/ticketing/index.html">
                            Ticketing          </a>
                    </li>
                    <li class="ALLORA" data-tag="">

                        <a href="/worldcup/classic/">
                            Classic          </a>
                    </li>
                </ul>
                <div class="fi-search">
                    <div class="form-group">
                        <form action="/search/index" method="get">
                            <input name="q" maxlength="100" data-required="true" class="fi-search__text" title="Search" type="text" placeholder="Search on FIFA.com">
                            <div class="fi-search__submit-wrap">
                                <label>
                                    {{--<input class="btn btn-primary fi-btn--submit" value="" type="submit">--}}
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/js/Master/jquery.min.js"></script>
    <script src="/js/Master/bootstrap.min.js"></script>
    @yield('js')
    <script>
        var $headline = $('.headline'),
            $inner = $('.inner'),
            $nav = $('nav'),
            navHeight = 75;
        $(window).scroll(function() {
            var scrollTop = $(this).scrollTop(),
                headlineHeight = $headline.outerHeight() - navHeight,
                navOffset = $nav.offset().top;

            $headline.css({
                'opacity': (1 - scrollTop / headlineHeight)
            });
            $inner.children().css({
                'transform': 'translateY('+ scrollTop * 0.4 +'px)'
            });
            if (navOffset > headlineHeight) {
                $nav.addClass('scrolled');
            } else {
                $nav.removeClass('scrolled');
            }
        });
    </script>
</body>
</html>
