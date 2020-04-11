<?php

namespace Migration;

use Spiral\Migrations\Migration;

class OrmDefault4f9a1af770ee8cc1de442aa5b85a6925 extends Migration
{
    protected const DATABASE = 'default';

    public function up()
    {
        $this->table('roles')
            ->addColumn('id', 'primary', [
                'nullable' => false,
                'default'  => null
            ])
            ->addColumn('name', 'string', [
                'nullable' => false,
                'default'  => null,
                'size'     => 255
            ])
            ->setPrimaryKeys(["id"])
            ->create();
    }

    public function down()
    {
        $this->table('roles')->drop();
    }
}
