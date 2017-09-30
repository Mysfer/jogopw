<?php
session_start();
echo "voce ganhou"."<br>";
echo $_SESSION['nome'] . "<br>";
echo $_SESSION['tentativas'] . "<br>";
echo $_SESSION['rand'] . "<br>";