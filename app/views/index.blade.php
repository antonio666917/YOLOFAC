@extends('layouts.master')

@section('title')
    <title>App Title</title>
@stop

@section('content')
    <main class="home">
        <header class="home__hero">
            <div class="row">
                <div class="flag flag--bottom">
                    <div class="flag__img">
                        <div class="home__hero-img" role="presentation"></div>
                    </div>
                    <div class="flag__body">
                        <h1 class="home__hero-heading">You already do crazy<b>use charity as your excuse</b></h1>

                        <div class="home__hero-cta row collapse">
                            <div class="small-12 medium-8 column">
                                <p>Supporting charities has never<br /> been this <span id="crazy-fun">refreshing, fun, interesting, insane, edgy, weird, entertaining, viral, social</span></p>
                            </div>
                            <div class="small-12 medium-4 column">
                                <a class="button radius small" href="{{URL::to('/dare/create')}}">Create a dare</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="row">
            <div class="medium-7 column">
                <h2 class="delta bold">Latest Dares</h2>

                <ul class="small-block-grid-1 medium-block-grid-2">
                    @for ($i = 0; $i < 6; $i++)
                    <li>
                        <article class="dare-widget">
                            <figure class="flex-video">
                                <iframe src="//www.youtube.com/embed/EdM_u5y5m5A" frameborder="0" allowfullscreen></iframe>
                            </figure>

                            <p class="dare-widget__desc">I pledge to donate $5 dollars for every persont that swallows a spoonful of cinnamon.</p>

                            <footer class="dare-widget__meta flag flag--inverted nano">
                                <div class="flag__body">
                                    <span><b>$200</b> Donated</span>
                                    <span><b>35</b> Responses</span>
                                </div>
                                <div class="flag__img">
                                    <img src="//placehold.it/50x50" alt="">
                                </div>
                            </footer>
                        </article>
                    </li>
                    @endfor
                </ul>
            </div>

            <div class="medium-4 column last">
                <h2 class="epsilon bold">Staff Pick</h2>

                <article class="dare-widget">
                    <figure class="flex-video">
                        <iframe src="//www.youtube.com/embed/EdM_u5y5m5A" frameborder="0" allowfullscreen></iframe>
                    </figure>

                    <footer class="dare-widget__meta flag milli">
                        <div class="flag__img">
                            <img src="//placehold.it/50x50" alt="">
                        </div>
                        <div class="author flag__body">
                            <strong class="author__name">Waldemar Figueroa</strong>
                            <span class="author__location">Miami, FL</span>
                        </div>
                    </footer>
                </article>

                <p class="home__sidebar-promo-desc">Every week we’ll highlight a dare response for your enjoyment. #YOLOFAC</p>

                <h2 class="epsilon bold">Featured Charities</h2>
                <ul class="home__sidebar-charities small-block-grid-3">
                    @foreach($charities as $charity)
                    <li><a href="#charity{{ $charity->id }}"><img class="expand" src="{{ $charity->media }}" alt="Charity logo"></a></li>
                    @endforeach
                </ul>

                </div>
            </div>

            </div>
        </div>
    </main>
@stop
