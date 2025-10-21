<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateProductsTable extends AbstractMigration
{
    public function change(): void
{
    $table = $this->table('products');
    $table->addColumn('nome', 'string', ['limit' => 255])
          ->addColumn('descricao', 'text', ['null' => true])
          ->addColumn('imagem_url', 'text', ['null' => true])
          ->addColumn('headline_1', 'string', ['limit' => 255, 'null' => true])
          ->addColumn('headline_2', 'string', ['limit' => 255, 'null' => true])
          ->addTimestamps()
          ->create();
}

}
