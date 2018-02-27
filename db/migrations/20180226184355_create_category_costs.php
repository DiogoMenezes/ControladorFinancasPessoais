<?php


use Phinx\Migration\AbstractMigration;

class CreateCategoryCosts extends AbstractMigration
{
    // Ciração de Tabela
    public function up()
    {
        $this -> table('category_costs')
            -> addColumn('name','string')
            -> addColumn('created_at','datetime')
            -> addColumn('update_at','datetime')
            -> save();
    }

    // Reverter Migração
    public function down()
    {
        $this -> dropTable('category_costs');
    }

}
