<?php
/**
 * Created by PhpStorm.
 * User: pry
 * Date: 07.01.16
 * Time: 20:24
 */
?>
<div class="header-top-personal-auth">
    <a class="header-top-personal-auth__link" href="#auth_register" data-toggle="modal" data-target="#auth_register">Вход и регистрация</a>
</div>
<div class="modal fade"  role="dialog" tabindex="-1" aria-hidden="true"  id="auth_register" style="display: none;">
    <div class="modal-dialog header-top-personal-auth__form">
        <div class="modal-content">
            <div class="modal-body tab-content header-top-personal-modal">
                <div class="tab-pane header-top-personal-popup active" id="auth_form">
                    <h3 class="header-top-personal-popup__title auth">Войти</h3>
                    <form class="form" action="/">
                        <div class="header-top-personal-popup__field">
                            <label class="header-top-personal-popup__name">
                                Электронная почта
                            </label>
                            <input class="header-top-personal-popup__text" type="text">
                        </div>
                        <div class="header-top-personal-popup__field">
                            <label class="header-top-personal-popup__name">
                                Пароль
                            </label>
                            <input class="header-top-personal-popup__text" type="text">
                        </div>
                        <a class="header-top-personal-popup__forgot" href="/">Забыли пароль?</a>
                        <div class="header-top-personal-popup__field">
                            <input class="button button-first" type="submit" value="Войти">
                            <a class="header-top-personal-popup__button active" href="#register_form" data-toggle="tab">Зарегистрироваться</a>
                        </div>
                    </form>
                </div>
                <div class="tab-pane header-top-personal-popup" id="register_form">
                    <h3 class="header-top-personal-popup__title">Регистрация</h3>
                    <form class="form" action="/">
                        <div class="header-top-personal-popup__field">
                            <label class="header-top-personal-popup__name">
                                Как вас зовут?
                            </label>
                            <input class="header-top-personal-popup__text" type="text">
                        </div>
                        <div class="header-top-personal-popup__field">
                            <label class="header-top-personal-popup__name">
                                Moбильный телефон
                            </label>
                            <input class="header-top-personal-popup__text" type="text">
                        </div>
                        <div class="header-top-personal-popup__field">
                            <label class="header-top-personal-popup__name">
                                Электронная почта
                            </label>
                            <input class="header-top-personal-popup__text" type="text">
                        </div>
                        <div class="header-top-personal-popup__field">
                            <label class="header-top-personal-popup__name">
                                Пароль
                            </label>
                            <input class="header-top-personal-popup__text" type="text">
                        </div>
                        <div class="header-top-personal-popup__field">
                            <label class="header-top-personal-popup__name">
                                Пароль еще раз
                            </label>
                            <input class="header-top-personal-popup__text" type="text">
                        </div>
                        <div class="header-top-personal-popup__field">
                            <input class="button button-first" type="submit" value="Зарегистрироваться">
                            <a class="header-top-personal-popup__button" href="#auth_form" data-toggle="tab">Войти</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
