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
            /*font-size: 1.2rem; */
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
        .collapsible-body {
            border-color: #37474f;
        }
        .collapsible .collapsible-header {
            background-color: #546e7a ;
        }
		.label-ellipsis {
			text-overflow: ellipsis;
			white-space: nowrap;
			overflow: hidden;
			width: 100%;
		}
        [type="radio"]:not(:checked)+span:before,
        [type="radio"]:not(:checked)+span:after {
            border-color: #ddd;
        }
    </style>
</head>
<body class="blue-grey lighten-4">
<div class="blue-grey-text text-lighten-5">
    <div class="row">
        <div class="col s12 l8 offset-l2 blue-grey-text text-lighten-5">
            <div class="card blue-grey darken-4 z-depth-2">
                <div class="card-content" style="margin-bottom: 2rem">
                    <h5 class="card-title center head">Форма для вступления в сообщество</h5>
                    <p class="center">Пожалуйста, ответьте на следующие вопросы, если вы хотите вступить в команду сообщества.
                        <br />Введённая информация будет опубликована в закрытом Discord-сервере команды проекта.
                    </p>
                    <form id="form" method="post" action="/resume">
						<br />
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="discordID" type="text" name="Дискорд никнейм" />
                                <label for="discordID">Никнейм в дискорд (пример: ivan#5294)</label>
								<span class="helper-text">Обязательно наличие <i>дискриминатора</i> (числа после решетки).</span>
                            </div>
                        </div>
					
                        <div class="row">									   
                            <div class="input-field col m6 s12">
                                <input id="nickname" type="text" class="validate blue-grey-text text-lighten-5"
                                       name="nickname" pattern="[a-zA-Z0-9_]{2,32}" required data-length="32"/>
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
                                <label class="label-ellipsis" for="text1">2D/3D-художник, программист, переводчик, актёр озвучания, композитор и т.д.</label>
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
                        <span class="helper-text grey-text">Если вашей специализации нет в списке, то уже после вступления вам будут заданы вопросы по ней.</span>
                        <ul class="collapsible blue-grey darken-3">
                            <li>
                                <div class="collapsible-header"><i class="material-icons">palette</i>2D-художник</div>
                                <div class="collapsible-body">
                                    <input type="hidden" name="🎨Роль: 2D-художник" value="🎨🎨🎨" />

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
                                <div class="collapsible-header"><i class="material-icons">3d_rotation</i>3D-художник</div>
                                <div class="collapsible-body">
                                    <input type="hidden" name="📏Роль: 3D художник" value="📏📏📏" />

                                    Примерный опыт в сфере:
                                    <div class="input-field inline">
                                        <input id="text17" type="text" name="Опыт$$$$$" />
                                        <label for="text17"></label>
                                    </div>

                                    <p>Предпочитаемый 3D редактор:</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea17" class="materialize-textarea" name="Предпочитаемый 3D редактор"></textarea>
                                            <label for="textarea17"></label>
                                        </div>
                                    </div>

                                    <p>Известные технологии в сфере:</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea18" class="materialize-textarea" name="Известные технологии в сфере"></textarea>
                                            <label for="textarea18"></label>
                                        </div>
                                    </div>
                                    <p>Опыт в анимировании 3D моделей:</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea19" class="materialize-textarea" name="Опыт в анимировании 3D моделей"></textarea>
                                            <label for="textarea19"></label>
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
                                    <p>
                                        <label>
                                            <input class="with-gap" name="Уровень знания CEFR" type="radio" value="B1" />
                                            <span>B1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap" name="Уровень знания CEFR" type="radio" value="B2" />
                                            <span>B2</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap" name="Уровень знания CEFR" type="radio" value="C1" />
                                            <span>C1</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap" name="Уровень знания CEFR" type="radio" value="C2" />
                                            <span>C2</span>
                                        </label>
                                    </p>

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

                                    <p>От себя добавлю:</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea class="materialize-textarea" name="От себя"></textarea>
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
                                <div class="collapsible-header"><i class="material-icons">mic</i>Актер озвучивания</div>
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
                            <li>
                                <div class="collapsible-header"><i class="material-icons">code</i>Программист</div>
                                <div class="collapsible-body">
                                    <input type="hidden" name="💻Роль: Программист" value="💻💻💻" />

                                    Примерный опыт в сфере:
                                    <div class="input-field inline">
                                        <input id="text16" type="text" name="Опыт$$$$" />
                                        <label for="text16"></label>
                                    </div>

                                    <p>Языки, на которых вы вели разработку:</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea14" class="materialize-textarea" name="Стек"></textarea>
                                            <label for="textarea14"></label>
                                        </div>
                                    </div>

                                    <p>Навыки совместной разработки:</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea15" class="materialize-textarea" name="Командная работа"></textarea>
                                            <label for="textarea15"></label>
                                        </div>
                                    </div>

                                    <p>Опыт в разработке игр:</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea16" class="materialize-textarea" name="Опыт геймдева"></textarea>
                                            <label for="textarea16"></label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">build</i>Системный администратор</div>
                                <div class="collapsible-body">
                                    <input type="hidden" name="🔧Роль: системный администратор" value="🔧🔧🔧" />

                                    Примерный опыт в сфере:
                                    <div class="input-field inline">
                                        <input id="text18" type="text" name="Опыт$$$$$$" />
                                        <label for="text18"></label>
                                    </div>

                                    <p>Известные технологии, можно ключевыми словами:</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea21" class="materialize-textarea" name="Известные технологии"></textarea>
                                            <label for="textarea21"></label>
                                        </div>
                                    </div>
                                    <p>На поддержке какого типа систем вы специализируетесь:</p>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea22" class="materialize-textarea" name="На поддержке какого типа систем вы специализируетесь"></textarea>
                                            <label for="textarea22"></label>
                                        </div>
                                    </div>
                                </div>
                            </li>
							<li>
                                <div class="collapsible-header"><i class="material-icons">gamepad</i>Геймдизайнер</div>
                                <div class="collapsible-body">
                                    <input type="hidden" name="🎮Роль: геймдизайнер" value="🎮🎮🎮" />
								
									Примерный опыт в сфере:
									<div class="input-field inline">
										<input id="text19" type="text" name="Опыт$$$$$$$" />
										<label for="text19"></label>
									</div>
									
									<p>Как вы оцениваете свои знания по механикам игр и фундаментальным их основам?</p>
									<div class="row">
										<div class="input-field col s12">
											<textarea id="textarea23" class="materialize-textarea" name="Оценка знаний по механикам игр и фунд. основам"></textarea>
											<label for="textarea23"></label>
										</div>
									</div>
									
									<p>Создавали ли вы какие-либо игры? Какие?</p>
									<div class="row">
										<div class="input-field col s12">
											<textarea id="textarea24" class="materialize-textarea" name="Создавали ли вы игры?"></textarea>
											<label for="textarea24"></label>
										</div>
									</div>
									
									Готовы ли тратить время на чтение литературы по теме?
									<div class="input-field inline">
										<input id="text20" type="text" name="Готовы тратить время на чтение литературы?" />
										<label for="text20"></label>
									</div>
									<br />
									
									Понимаете ли вы, что от деятельности геймдизайнера зависят все аспекты нашей игры, а главное - насколько интересно в нее будет играть?
									<div class="row">
										<div class="input-field col s12">
											<input id="text21" type="text" name="Понимаете ли, что от геймдиз. зависят все аспекты, а главное - насколько интересно будет играть?" />
											<label for="text21"></label>
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
        $('.collapsible').collapsible({
            accordion: false
        });

        var success = $('#modal-success').modal(),
            error = $('#modal-error').modal()
        ;

        $('#form').on('submit', function (e) {
            e.preventDefault();

            var formFields = $(this).children(':not(.collapsible)').find('input,textarea');

            $('.collapsible-body').each(function () {
                var filledRoleFields = $('input:not([type="hidden"],[type="radio"]),textarea,[type="radio"]:checked', this).filter(function () {
                    return this.value;
                });

                if (filledRoleFields.length) {
                    formFields = formFields
                        .add($('[type="hidden"]', this))
                        .add(filledRoleFields)
                    ;
                }
            });

            $.post("/resume", formFields.serialize(), function () {
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
