<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="/">На головну</a>
                </li>
                <li class="active">галерея</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    @foreach($photos->chunk(4) as $chunk)
        <div class="row">
            @foreach($chunk as $photo)
                <div class="col-md-3 img-portfolio">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                    </a>
                </div>
            @endforeach
        </div>
        <hr>
    @endforeach
<!-- Projects Row -->
    {{$photos->links()}}
</div>    <!-- Page Heading/Breadcrumbs -->
    <!-- Projects Row -->
  {{--  <div class="row">
        <div class="col-md-3 img-portfolio">
            <a href="portfolio-item.html">
                <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
            </a>
        </div>
        <div class="col-md-3 img-portfolio">
            <a href="portfolio-item.html">
                <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
            </a>
        </div>
        <div class="col-md-3 img-portfolio">
            <a href="portfolio-item.html">
                <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
            </a>
        </div>
        <div class="col-md-3 img-portfolio">
            <a href="portfolio-item.html">
                <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
            </a>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-3 img-portfolio">
            <a href="portfolio-item.html">
                <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
            </a>
        </div>
        <div class="col-md-3 img-portfolio">
            <a href="portfolio-item.html">
                <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
            </a>
        </div>
        <div class="col-md-3 img-portfolio">
            <a href="portfolio-item.html">
                <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
            </a>
        </div>
        <div class="col-md-3 img-portfolio">
            <a href="portfolio-item.html">
                <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
            </a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination">
                <li>
                    <a href="#">&laquo;</a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

    <hr>--}}