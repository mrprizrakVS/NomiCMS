<?php
/**
 * NomiCMS - Content Management System
 *
 * @author Tosyk, Photon
 * @package nomicms/NomiCMS
 * @link   http://nomicms.ru
 */

$user = $container->get('user');

// Если не авторизован
if (! $user->logger || $user->getUser()['level'] <= 2) {
    go_die($container, '/');
}

$action = $action ?? false;

if ($action == 'entry') {
    $view->title = 'Войти в панель управления';

}

if ($action == 'exit') {
    $view->title = 'Выйти из панели управления';

}
