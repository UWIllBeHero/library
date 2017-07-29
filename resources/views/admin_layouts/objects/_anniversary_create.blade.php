<div class="page-header">
    <h1>Визначна подія / Створити... </h1>
</div>
<div class="row">
    <div class="col-md-12">

        <form action="{{ route('calendar.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="preview">Стислий опис визначної дати</label>
                <input type="text" name="preview" class="form-control" value=""/>
            </div>
            <div class="form-group">
                <label for="start">дата</label>
                <input type="date" name="start" {{--class="form-control"--}} value=""/>
            </div>
            <a class="btn btn-default" href="{{ route('calendar.index') }}">Скасувати</a>
            <button class="btn btn-primary" type="submit" >Зберегти</button>
        </form>
    </div>
</div>