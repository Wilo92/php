<?php

$dia = 'viernes';

switch ($dia) {
    case 'lunes':
        echo 'hoy es lunes y toca trabajar';
        break;

    case 'martes':
        echo 'hoy es martes y toca trabajar';
        break;

    case 'miercoes':
        echo 'hoy es miercoles y toca trabajar';
        break;

    case 'jueves':
        echo 'hoy es jueves y toca trabajar';
        break;

    case 'viernes':
        echo 'hoy es viernes y toca trabajar';
        break;
    default:
        echo 'hoy no toca trabajar';
        break;
}
