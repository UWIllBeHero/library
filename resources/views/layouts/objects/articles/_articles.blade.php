<div class="row">
@foreach($articles as $article)
        <div class="article">
            <h2>
               {{$article->header}}
            </h2>
            <small>Опубліковано: {{$article->updated_at}}</small>
            <hr>
                <img class="img-responsive img-hover" id="img-center" src="http://placehold.it/900x300" alt="">
            <hr>
            <p>{{$article->preview}}</p>
            <a class="btn btn-primary" href="/{{$article->id}}">Читати далі...<i class="fa fa-angle-right"></i></a>
            <hr>
        </div>
        <hr>
@endforeach
    {{$articles->links()}}
</div>