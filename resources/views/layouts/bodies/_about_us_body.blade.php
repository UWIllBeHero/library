<div class="container-fluid text-center">
    <div class="row content">
       @include('layouts.partials._left_column')
        <div class="col-sm-8 text-left" style="background: rgba(255,252,249,0.71);">
        @include('layouts.objects.articles._article')
        </div>
        @include('layouts.partials._right_column')
    </div>
</div>