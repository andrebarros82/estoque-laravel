<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);

        $this->call('ProdutoTableSeeder');
    }

}

class ProdutoTableSeeder extends Seeder {

    public function run() {
        DB::insert("INSERT INTO `estoque_laravel`.`produtos` (`nome`, `valor`, `descricao`, `quantidade`, `created_at`) "
                . "VALUES ('Mesa', '12.55', 'Mesa de Jantar', '1', now())");

        DB::insert("INSERT INTO `estoque_laravel`.`produtos` (`nome`, `valor`, `descricao`, `quantidade`, `created_at`) "
                . "VALUES ('Geladeira', '556.88', 'Geladeira que gela', '1', now())");

        DB::insert("INSERT INTO `estoque_laravel`.`produtos` (`nome`, `valor`, `descricao`, `quantidade`, `created_at`) "
                . "VALUES ('Microondas', '44.99', 'Microondas Azul', '1', now())");
    }

}
