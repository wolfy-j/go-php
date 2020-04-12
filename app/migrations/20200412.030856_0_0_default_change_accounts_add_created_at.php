<?php

namespace Migration;

use Spiral\Migrations\Migration;

class OrmDefault55b19395a92653d72befd0fc1c10b5ba extends Migration
{
    protected const DATABASE = 'default';

    public function up()
    {
        $this->table('accounts')
            ->addColumn('created_at', 'datetime', [
                'nullable' => false,
                'default'  => null
            ])
            ->update();
    }

    public function down()
    {
        $this->table('accounts')
            ->dropColumn('created_at')
            ->update();
    }
}
