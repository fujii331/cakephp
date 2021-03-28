<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('username', 'string', [
                  'default' => null,
                  'limit' => 16,
                  'null' => false,
              ])
              ->addColumn('password', 'string', [
                  'default' => null,
                  'limit' => 255,
                  'null' => false,
              ])
              ->addColumn('nickname', 'string', [
                  'default' => null,
                  'limit' => 32,
                  'null' => false,
              ])
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->addIndex(['username'], ['unique' => true])
              ->create();
    }
}
