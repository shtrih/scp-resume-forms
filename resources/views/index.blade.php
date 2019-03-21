<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SCP - for the SCP future!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
    <!-- <script src="main.js"></script> -->
    <style>
        p {
            font-size: 1.2rem; 
            margin-bottom: 0.4rem;
        }
    </style>
</head>

<body class="grey">
<div>
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card grey darken-4 darken-1 z-depth-2">
                <div class="card-content" style="margin-bottom: 2rem">
                    <span class="card-title center white-text" style="margin-bottom: 1.4rem"><b>Форма для вступления в сообщество</b></span>
                    <p class="center white-text">Пожалуйста, ответьте на следующие вопросы, если вы хотите вступить в
                        наше сообщество;<br> Данная информация появится в нашем <a href="#!">публичном дискорде</a>.</p>
                    <br>
                    <form id="form" method="post" action="/resume">
                        <p class="white-text">1) Личная информация</p>
                        <div class="row">
                            <div class="input-field col m6 s12">
                                <input id="first_name" type="text" class="validate" required name="firstname" />
                                <label for="first_name">Имя</label>
                            </div>
                            <div class="input-field col m6 s12">
                                <input id="last_name" type="text" class="validate" name="lastname" />
                                <label for="last_name">Фамилия</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate" name="email" required />
                                <label for="email">Email</label>
                                <span class="helper-text" data-error="Email введён неправильно"
                                      data-success="Правильный email!">Этот input может сам проверить мыло на валидность</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nickname" type="text" class="validate" name="nickname" required />
                                <label for="nickname">Nickname</label>
                            </div>
                        </div>

                        <p class="white-text">3) Расскажите о себе</p>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
                                <label for="textarea1">Этот input расширяется под текст автоматом</label>
                            </div>
                        </div>

                        <p class="white-text">4) Любимый цвет?</p>
                        <p>
                            <label>
                                <input name="group1" type="radio" checked/>
                                <span>Зеленый</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="group1" type="radio"/>
                                <span>Зеленый</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="group1" type="radio"/>
                                <span>Я люблю зеленый</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="group1" type="radio"/>
                                <span>Да</span>
                            </label>
                        </p>

                        <p class="white-text" style="font-size: 1.2rem; margin-bottom: 0.6rem; margin-top: 2rem">5)
                            Какие цвета вы бы посчитали годными?</p>
                        <div class="row">
                            <div class="input-field col s12">
                                <select multiple>
                                    <option value="" disabled selected>Выберите из предложенного</option>
                                    <option value="1">Зелёный</option>
                                    <option value="2">Зелёнистый</option>
                                    <option value="3">Зеленоватый</option>
                                    <option value="4">Зелёновато-зелёный</option>
                                    <option value="5" disabled>Красный</option>
                                </select>
                                <label>Множественный выбор</label>
                            </div>
                        </div>

                        <button class="btn waves-effect waves-light right" type="submit" name="action">Отправить
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
                <div class="card-action">
                    <p class="white-text" style="margin-top: 0">Появились вопросы?</p>
                    <a href="#!">Группа ВКонтакте</a>
                    <a href="#!">Дискорд канал</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-success" class="modal green lighten-5">
    <div class="modal-content">
        <h4>Thank you!</h4>
        <p>Your data sent!</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
    </div>
</div>
<div id="modal-error" class="modal">
    <div class="modal-content red lighten-5">
        <h4>Sorry!</h4>
        <p>Failed to save data!</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
    </div>
</div>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    $(document).ready(function () {
        $('select').formSelect();

        var success = $('#modal-success').modal(),
            error = $('#modal-error').modal()
        ;

        $('#form').on('submit', function (e) {
            e.preventDefault();

            $.post("/resume", $(this).serialize(), function (data) {
                success.modal('open');
            }).fail(function(data) {
                error
                    .modal('open')
                    .find('.modal-content > p')
                    .text(data.statusText + ', ' + data.status)
                ;
            });
        });
    });
</script>
</body>

</html>