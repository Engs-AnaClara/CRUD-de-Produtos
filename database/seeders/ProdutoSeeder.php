<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Produto;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           Produto::create([
            'nome' => 'notebook',
            'preco' => 6000.50,
            'quantidade' => 12,
            
        ]);
           Produto::create([
            'nome' => 'teclado',
            'preco' => 250.50,
            'quantidade' => 22,
            
        ]);
           Produto::create([
            'nome' => 'memória ram',
            'preco' => 100.50,
            'quantidade' => 5,
            
        ]);

        


    }
}
