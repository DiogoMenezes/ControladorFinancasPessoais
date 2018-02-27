<?php


use Phinx\Seed\AbstractSeed;

// Gerar dados de teste enquanto desenvolve (apenas desenvolvimento, se for para produção criar uma migração)
class CategoryCostsSeeder extends AbstractSeed
{
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');

        $categoryCosts = $this -> table('category_costs');
        $data = [];
        foreach (range(1,40)as $value) {
            $data[] = [
                    'name' => $faker -> name,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
            ];
        }
        $categoryCosts -> insert($data)->save();
    }
}
