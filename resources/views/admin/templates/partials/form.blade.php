<label for="">Название</label>
<input type="text" class="form-control" name="name" placeholder="Название категории" value="{{$template->name or ''}}" required>

<label for="" style="margin-top: 10px;">Url</label>
<input type="text" class="form-control" name="url" placeholder="Автоматическая генерация" value="{{$template->url or ''}}" readonly>

<input class="btn btn-primary" style="margin-top: 15px;" type="submit" value="Сохранить">