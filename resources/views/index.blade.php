<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SCP - for the SCP future!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        p {
            font-size: 1.2rem; 
            margin-bottom: 0.4rem;
        }
        input, textarea, select,
        .input-field span.helper-text {
            color: #eceff1;
        }
        .card-content > .card-title.head {
            margin-bottom: 1.4rem
        }

        .collapsible,
        .collapsible-header,
        .collapsible-body
        {
            border-color: #37474f;
        }
        .collapsible .collapsible-header {
            background-color: #546e7a ;
        }

    </style>
</head>
<body class="blue-grey lighten-4">
<div class="blue-grey-text text-lighten-5">
    <div class="row">
        <div class="col s12 m8 offset-m2 blue-grey-text text-lighten-5">
            <div class="card blue-grey darken-4 z-depth-2">
                <div class="card-content" style="margin-bottom: 2rem">
                    <h5 class="card-title center head">Форма для вступления в сообщество</h5>
                    <p class="center">Пожалуйста, ответьте на следующие вопросы, если вы хотите вступить в команду сообщества.
                        <br />Введённая информация будет опубликована в закрытом Discord-сервере команды проекта.
                    </p>
                    <form id="form" method="post" action="/resume">
                        <div class="row">
                            <div class="input-field col m6 s12">
                                <input id="nickname" type="text" class="validate blue-grey-text text-lighten-5"
                                       name="nickname" pattern="[a-zA-Z]{2,32}" required data-length="32"/>
                                <label for="nickname">Nickname</label>
                                <span class="helper-text">Должен состоять из латинских буков. Для аккаунта в Phabricator (менеджер тасков).</span>
                            </div>
                            <div class="input-field col m6 s12">
                                <input id="email" type="email" class="validate blue-grey-text text-lighten-5" name="email" required />
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <p>Вы уважительно относитесь к вселенной SCP и вызывает ли у вас эта вселенная живой интерес?</p>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea" name="Уважение/интерес SCP"></textarea>
                                <label for="textarea1"></label>
                            </div>
                        </div>

                        <p>Роли, с которыми вы хотите попасть в команду сообщества:</p>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="text1" type="text" name="Роли" />
                                <label for="text1">2d/3d-художник, программист, переводчик, актёр озвучания, композитор и т.д.</label>
                                <span class="helper-text">Можно перечислить несколько.</span>
                            </div>
                        </div>

                        <p>Используемые и привычные в работе инструменты:</p>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="text2" type="text" name="Инструменты" />
                                <label for="text2"></label>
                            </div>
                        </div>

                        <p>Сколько часов в неделю хочется и имеется возможность уделять проекту?</p>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="text3" type="text" name="Часов в неделю" />
                                <label for="text3"></label>
                            </div>
                        </div>

                        <p>Вопросы по специализации.</p>
                        <ul class="collapsible blue-grey darken-3">
                            <li>
                                <div class="collapsible-header"><i class="material-icons">palette</i>Роль «2d-художник»</div>
                                <div class="collapsible-body">
                                    <input type="hidden" name="🎨Роль: 2d-художник" value="🎨🎨🎨" />

                                    Примерный опыт в сфере:
                                    <div class="input-field inline">
                                        <input id="text4" type="text" name="Опыт" />
                                        <label for="text4"></label>
                                    </div>

                                    <p>Несколько примеров работ:</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea2" class="materialize-textarea" name="Примеры работ$"></textarea>
                                            <label for="textarea2"></label>
                                        </div>
                                    </div>

                                    <p>Предпочитаемый стиль:</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="text5" type="text" name="Стиль" />
                                            <label for="text5"></label>
                                        </div>
                                    </div>

                                    <p>Есть ли опыт создания 2D для разработки игр?</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="text6" type="text" name="Опыт рисования для игр" />
                                            <label for="text6"></label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">g_translate</i>Переводчик</div>
                                <div class="collapsible-body">
                                    <input type="hidden" name="🎌Роль: Переводчик" value="🎌🎌🎌" />

                                    Примерный опыт в сфере:
                                    <div class="input-field inline">
                                        <input id="text7" type="text" name="Опыт$" />
                                        <label for="text7"></label>
                                    </div>

                                    <br />
                                    Переводчиком какого иностранного языка вы желаете стать?
                                    <div class="input-field inline">
                                        <input id="text8" type="text" name="Язык перевода" />
                                        <label for="text8"></label>
                                    </div>

                                    <br />
                                    Ваш уровень знания иностранного языка по Common European Framework of Reference (CEFR):
                                    <div class="input-field inline">
                                        <input id="text9" type="text" name="Увроень CEFR" />
                                        <label for="text9"></label>
                                    </div>

                                    <br />
                                    Сколько лет вы изучаете интересующий вас иностранный язык?
                                    <div class="input-field inline">
                                        <input id="text10" type="text" name="Лет изучаю$" />
                                        <label for="text10"></label>
                                    </div>

                                    <p>Можете ли вы свободно общаться на иностранном языке используя голос?</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="text11" type="text" name="Разговор на иностранном языке" />
                                            <label for="text11"></label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">library_music</i>Роль по работе со звуком и музыкой</div>
                                <div class="collapsible-body">
                                    <input type="hidden" name="🎵Роль: Звук и музыка" value="🎵🎶🎵" />

                                    Примерный опыт в сфере:
                                    <div class="input-field inline">
                                        <input id="text12" type="text" name="Опыт$$" />
                                        <label for="text12"></label>
                                    </div>

                                    <p>Как вы оцениваете свои знания по обработке звука?</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea5" class="materialize-textarea" name="Знания обработки звука"></textarea>
                                            <label for="textarea5"></label>
                                        </div>
                                    </div>

                                    <p>Как вы оцениваете свои знания по написанию музыки?</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea6" class="materialize-textarea" name="Знания по музыке"></textarea>
                                            <label for="textarea6"></label>
                                        </div>
                                    </div>

                                    <p>На каких музыкальных жанрах специализируетесь?</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="text13" type="text" name="Муз жанры" />
                                            <label for="text13"></label>
                                        </div>
                                    </div>

                                    <p>На каких муз. инструментах играете?</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="text14" type="text" name="Муз инструменты" />
                                            <label for="text14"></label>
                                        </div>
                                    </div>


                                    <p>Несколько примеров работ:</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea7" class="materialize-textarea" name="Примеры работ$$"></textarea>
                                            <label for="textarea7"></label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">mic</i>Роль «актер озвучивания»</div>
                                <div class="collapsible-body">
                                    <input type="hidden" name="🎤Роль: Актер озвучания" value="🎤🎤🎤" />

                                    Примерный опыт в сфере:
                                    <div class="input-field inline">
                                        <input id="text15" type="text" name="Опыт$$$" />
                                        <label for="text15"></label>
                                    </div>

                                    <p>Как вы оцениваете собственную дикцию?</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea8" class="materialize-textarea" name="Дикция"></textarea>
                                            <label for="textarea8"></label>
                                        </div>
                                    </div>

                                    <p>Используете ли вы упражнения для развития дикции и голоса?</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea9" class="materialize-textarea" name="Упражнения дикции"></textarea>
                                            <label for="textarea9"></label>
                                        </div>
                                    </div>

                                    <p>Используете ли вы упражнения для тренировки изменения голоса?</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea10" class="materialize-textarea" name="Тренировка голоса"></textarea>
                                            <label for="textarea10"></label>
                                        </div>
                                    </div>

                                    <p>Какой уровень вашего музыкального слуха?</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea11" class="materialize-textarea" name="Слух"></textarea>
                                            <label for="textarea11"></label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <button class="btn waves-effect waves-light right" type="submit" name="action">Отправить
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
                <div class="card-action">
                    <p class="" style="margin-top: 0">Появились вопросы?</p>
                    <a href="https://vk.com/club175043828">Группа VK</a>
                    <a href="https://discord.gg/wE2j6vW">Сервер Discord</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal-success" class="modal green lighten-5">
    <div class="modal-content">
        <h4>Спасибо!</h4>
        <p>Данные отправлены!</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
    </div>
</div>
<div id="modal-error" class="modal">
    <div class="modal-content red lighten-5">
        <h4>Ошибка!</h4>
        <p>Failed to save data!</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
    </div>
</div>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    $(document).ready(function () {
        $('select').formSelect();
        $('.collapsible').collapsible();

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