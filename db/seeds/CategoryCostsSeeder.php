<?php


use Phinx\Seed\AbstractSeed;

// Gerar dados de teste enquanto desenvolve (apenas desenvolvimento, se for para produção criar uma migração)
class CategoryCostsSeeder extends AbstractSeed
{
    public function run()
    {
        $categoryCosts = $this -> table('category_costs');
        $categoryCosts -> insert([
            [
                'name' => 'Category 1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Category 2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ])->save();
    }
}
