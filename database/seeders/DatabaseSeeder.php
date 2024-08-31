<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livro;
use App\Models\Autor;
use App\Models\Editora;
use App\Models\Categoria;
use App\Models\Pedido;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Livro::create(['titulo' => 'Memorias Póstumas', 'autor' => 'Brascubas', 'editora' => 'JosileineSA', 'ano_publicacao' => 2020, 'preco' => 50.00]);
        Livro::create(['titulo' => 'Iracema', 'autor' => 'Marquez', 'editora' => 'MarcosFontes', 'ano_publicacao' => 2021, 'preco' => 60.00]);

        Autor::create(['nome' => 'Brascubas']);
        Autor::create(['nome' => 'Marquez']);

        Editora::create(['nome' => 'JosileineSA', 'telefone' => '1394854345']);
        Editora::create(['nome' => 'MarcosFontes', 'telefone' => '13948546455']);

        Categoria::create(['nome' => 'Literatura']);
        Categoria::create(['nome' => 'Drama']);

        Pedido::create(['data_pedido' => now(), 'status' => 'ativo', 'total' => 54.90]);
        Pedido::create(['data_pedido' => now(), 'status' => 'inativo', 'total' => 23.56]);

    }
}
