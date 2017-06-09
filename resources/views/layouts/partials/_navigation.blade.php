<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/" style="font-size: 12pt;">Бібліотека ім.В.Чорновола</a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="glyphicon glyphicon-bookmark" aria-hidden="true" style="color: red;"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <li>
                    <a  role="button" data-toggle="modal" data-target="#search">пошук</a>

                </li>
                <li>
                    <a href="/articles">новини</a>
                </li>
                <li>
                    <a href="/catalog">Книги</a>
                </li>
                <li>
                    <a href="/gallery">Галерея</a>
                </li>
                <li>
                    <a href="/about_us">про нас</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>

</nav>
<!-- Search Modal -->
<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                <!--Search block-->
                @include('layouts.partials._search')
            </div>
        </div>
    </div>
</div>

