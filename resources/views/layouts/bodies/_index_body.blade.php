<div class="container-fluid text-center">
    <div class="row content">
       @include('layouts.partials._left_column')
        <div class="col-sm-8" style="background: rgba(255,252,249,0.71);">
            @include('layouts.objects.articles._anniversaries_carousel')
            <hr>
            @include('layouts.objects.articles._articles')
        </div>
        @include('layouts.partials._right_column')
    </div>
</div>