<div class="input-group" id="adv-search" style="margin-top: 100px;">
    <input type="text" class="form-control" placeholder="Search for snippets" />
    <div class="input-group-btn">
        <div class="btn-group" role="group">
            <div class="dropdown dropdown-lg">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="filter">Шукати серед:</label>
                            <select class="form-control">
                                <option value="0" selected>Статтей</option>
                                <option value="1">Книг</option>
                                <option value="2">Визначних дат</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="contain">Включно зі словами:</label>
                            <input class="form-control" type="text" />
                        </div>
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </form>
                </div>
            </div>
            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </div>
    </div>
</div>