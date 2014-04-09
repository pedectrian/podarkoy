<?php
/*
Template Name: Registration page template
*/

get_header(); ?>

<div id="middle">
    <div id="maincontent">
        <p style="text-align: center;"><span style="color: #008000;">Зарегистрированные пользователи имеют возможность просматривать архив заказов и отслеживать статус отправленного заказа!</span></p>
        <form id="websignupfrm" method="post" name="websignupfrm" action="">
            <fieldset>
                <h3 align="center">Заполните основные данные</h3>
                <p align="center">Все поля обязательны для заполнения</p>
                <table align="center" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td width="140">
                                <label for="su_username"><strong>Логин:</strong></label>
                            </td>
                            <td>
                                <input type="text" name="username" value="<?php if ( ! empty( $_POST['username'] ) ) esc_attr( $_POST['username'] ); ?>" id="su_username" class="inputBox" maxlength="30">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="fullname"><strong>Имя:</strong></label>
                            </td>
                            <td>
                                <input type="text" name="fullname" id="fullname" class="inputBox" maxlength="100" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email"><strong>Ваш E-mail:</strong></label>
                            </td>
                            <td>
                                <input type="text" name="email" id="reg_email" class="inputBox" value="<?php if ( ! empty( $_POST['email'] ) ) esc_attr( $_POST['email'] ); ?>">

                                <div style="left:-999em; position:absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="su_password">
                                    <strong>Пароль:</strong>
                                </label>
                            </td>
                            <td>
                                <input type="password" name="password" id="reg_password" value="<?php if ( ! empty( $_POST['password'] ) ) esc_attr( $_POST['password'] ); ?>" class="inputBox">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="confirmpassword"><strong>Повторите пароль: </strong></label>
                            </td>
                            <td>
                                <input type="password" name="confirmpassword" id="confirmpassword" class="inputBox">
                            </td>
                        </tr>
                        <tr>
                            <td><?php wp_nonce_field( 'woocommerce-register', 'register' ); ?></td>
                            <td>
                                <br>

                                <input type="submit" value="Регистрация" name="register" class="button100">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>
    </div>
</div>

<?php

get_footer();
