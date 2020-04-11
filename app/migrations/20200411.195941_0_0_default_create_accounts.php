<?php

namespace Migration;

use Spiral\Migrations\Migration;

class OrmDefault39971b3178b0378f2ea0d35b63214d71 extends Migration
{
    protected const DATABASE = 'default';

    public function up()
    {
        $this->table('accounts')
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
        $this->table('accounts')->drop();
    }
}
