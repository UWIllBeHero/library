@include('admin_layouts.partials._admin_header')
<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            @include('admin_layouts.partials._admin_navigation')
        </div>
        <div class="col-md-10">
            <a role="button" class="button-red" href="/admin/calendar/create">New...</a>
            @include('admin_layouts.objects._calendar')
        </div>
    </div>
</div>
