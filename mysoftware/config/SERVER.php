<?php
/*CONFIGURACION DE ENCRIPTACION Y CONEXION A LA BASE DE DATOS*/
const SERVER="localhost";
const DB ="mysoftware";
const USER="root";
const PASS="";

const SGBD="mysql:host=".SERVER.";dbname=".DB;

const METHOD="AES-256-CBC";
const SECRET_KEY='$PRESTAMOS@2020';
const SECRET_IV='037970';