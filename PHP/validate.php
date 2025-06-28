<?php
require_once 'Validation.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['code'])) {
    $validator = new Validation($_POST['code']);
    echo $validator->isValid() ? 'Корректный код' : 'Некорректный код';
} else {
    echo 'Нет данных для проверки';
}
