<div class="sector head">
    <div class="container header">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Приложение-задачник</div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Имя пользователя</th>
                                <th>E-mail</th>
                                <th>Текст задачи</th>
                                <th>Картинки</th>
                                <th>Выполнено</th>
                            </tr>
                        </table>
                        <?php foreach($tasks as $task): ?>
                            <form class="form">
                            <table class="table">
                                <tr>
                                    <td>
                                        <?=$task['id']?>
                                        <input type="text" value="<?=$task['id']?>" name="id" hidden/>
                                    </td>
                                    <td><?=$task['name']?></td>
                                    <td><?=$task['email']?></td>
                                    <td><textarea name="text" id="text" rows="2" class="form-control"><?=$task['text']?></textarea></td>
                                    <td><img src="/img/<?=$task['img']?>" width="100"/></td>
                                    <td><input type="checkbox" name="done" <?=($task['done']) ? 'checked' : '' ?> /></td>
                                </tr>
                            </table>
                            </form>
                        <?php endforeach ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>