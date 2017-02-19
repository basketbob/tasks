<div class="sector head">
    <div class="container header">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Приложение-задачник</div>
                    <div class="panel-body">
                        <p>Требования к изображениям - формат JPG/GIF/PNG, не более 320х240 пикселей. При попытке загрузить изображение большего размера, картинка должна быть пропорционально уменьшена до заданных размеров.</p>
                        <p>Создавать новые задачи может любой посетитель. Перед сохранением новой задачи можно нажать "Предварительный просмотр", он должен работать без перезагрузки страницы.</p>
                        <p>Сделайте вход для администратора (логин "admin", пароль "123"). Администратор имеет возможность редактировать текст задачи и поставить галочку о выполнении. Выполненные задачи в общем списке выводятся с соответствующей отметкой.</p>
                        <p>В списке задач нужно сделать возможность сортировки по имени пользователя, email и статусу.</p>
                        <p>В приложении нужно с помощью чистого PHP реализовать модель MVC (PHP-фреймворки использовать нельзя). Верстка на bootstrap. Результат нужно развернуть на любом бесплатном хостинге, чтобы можно было посмотреть его в действии.</p>
                    </div>

                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th><a href="/?order=name">Имя пользователя</a></th>
                            <th><a href="/?order=email">E-mail</a></th>
                            <th>Текст задачи</th>
                            <th>Картинки</th>
                            <th><a href="/?order=done">Выполнено</a></th>
                        </tr>
                        <?php foreach($tasks as $task): ?>
                        <tr>
                            <td><?=$task['id']?></td>
                            <td><?=$task['name']?></td>
                            <td><?=$task['email']?></td>
                            <td><?=$task['text']?></td>
                            <td><img src="/img/<?=$task['img']?>" width="100" /></td>
                            <td><input type="checkbox" <?=($task['done']) ?: 'hidden'?> disabled checked /></td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </div>
                <!-- НОВАЯ ЗАДАЧА -->
                <div class="panel panel-default">
                    <div class="panel-heading">+ Добавить новую задачу</div>
                    <div class="panel-body">
                        <form action="/index/newtask" method="post" enctype="multipart/form-data">
                            <table class="table">
                                <tr>
                                    <td><input type="text" name="name" id="name" placeholder="Введите Ваше имя" class="form-control"/></td>
                                    <td><input type="text" name="email" id="email" placeholder="Введите Ваш email" class="form-control"/></td>
                                    <td><textarea name="text" id="text" class="form-control" rows="2" placeholder="Текст задачи"></textarea></td>
                                    <td><input type="file" name="img"/></td>
                                </tr>
                            </table>
                            <?if($_GET['error']):?><p id="alert">Ошибка! Не все поля заполнены!</p><?endif?>
                            <input type="submit" class="btn btn-success" value="Добавить" id="add" disabled />
                            <button type="button" id="show_preview" class="btn btn-primary" data-toggle="modal" data-target="#preview">
                                Предварительный просмотр
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Предварительный просмотр -->
                <div class="modal fade" id="preview" tabindex="-1" role="dialog" aria-labelledby="previewLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="previewLabel">Предварительный просмотр задачи</h4>
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                    <tr>
                                        <td>Имя</td>
                                        <td id="preview_name"></td>
                                    </tr>
                                    <tr>
                                        <td>E-mail</td>
                                        <td id="preview_email"></td>
                                    </tr>
                                    <tr>
                                        <td>Текст задачи</td>
                                        <td id="preview_text"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>