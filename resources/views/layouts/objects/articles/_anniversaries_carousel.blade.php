<div id="AnniversariesCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#AnniversariesCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#AnniversariesCarousel" data-slide-to="1"></li>
        <li data-target="#AnniversariesCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
<div class="carousel-inner" style="margin-top: 5px;">
    @foreach($anniversaries as $anniversary)
            <div class="item {{ $anniversary == $anniversary->first() ? 'active' : '' }}">
                <div class="row">
                        <img src="{{URL::asset('img/slide-1.jpg')}}">
                        <div class="carousel-caption">
                            <h3>{{$anniversary->preview}}</h3>
                            <p style="color: white;">{{$anniversary->anniversary}}</p>
                                {{--@foreach($articles as $article)
                                    @if($article->id == $anniversary->articles_id)--}}
                                    <p style="color: white;">
                                        {{--{{$anniversary->article()->header}}--}}
                                    </p>
                                    <a class="btn" href="/articles/{{$anniversary->article}}">Дізнатись більше</a>
                                {{--@endif
                                @endforeach--}}
                        </div>
                </div>
            </div>
    @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#AnniversariesCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#AnniversariesCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>