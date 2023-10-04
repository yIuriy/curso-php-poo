<?php
interface Publicacao
{
    public function abrir();

    public function fechar();

    public function folhear($paginaFolhada);

    public function avancarPagina();

    public function voltarPagina();
}
