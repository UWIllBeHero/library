        <div class="article">
            <h2>
               {{$article->header}}
            </h2>
            <small>Опубліковано: {{$article->publication_date}}</small>
            <hr>
                <img class="img-responsive img-hover" src="http://placehold.it/900x300" alt="">
            <hr>
            <p>{{$article->preview}}</p>
            <p>{{$article->main_text}}</p>
            <hr>
        </div>
        <hr>