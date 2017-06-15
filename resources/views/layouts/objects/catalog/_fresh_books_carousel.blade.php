<h3 style="color: white;">Нові книги</h3>
<div class="carousel slide vertical" id="FreshBooksCarousel" data-ride="vertical_carousel">
    <nav>
        <ul class="control-box pager">
            <li><a data-slide="prev" href="#FreshBooksCarousel" class=""><i class="glyphicon glyphicon-chevron-down"></i></a></li>
            <li><a data-slide="next" href="#FreshBooksCarousel" class=""><i class="glyphicon glyphicon-chevron-up"></i></a></li>
        </ul>
    </nav>
    <div class="carousel-inner">
        @foreach($books->chunk(3) as $chunk)
            <div class="item {{ $chunk == $books->chunk(3)->first() ? 'active' : '' }}">
                <ul class="list-unstyled">
                @foreach($chunk as $book)

                        <li class="col-md-12">
                            <div class="thumbnail">
                                <div class="caption">
                                @if($book->authors!=null)
                                    @foreach($book->authors as $author)
                                        <h6>{{$author->value}}</h6>
                                    @endforeach
                                @endif
                                </div>
                                <a href="#"><img src="http://placehold.it/200x300" alt=""/></a>
                                <div class="caption">
                                    <h6>{{$book->name}}</h6>
                                </div>
                            </div>
                        </li>
            @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>
