<?php

namespace Migration;

use Spiral\Migrations\Migration;

class OrmDefault2596af17be4d82fb3f13dff9d845d57b extends Migration
{
    protected const DATABASE = 'default';

    public function up()
    {
        $this->table('roles')
            ->addColumn('slug', 'string', [
                'nullable' => false,
                'default'  => null,
                'size'     => 255
            ])
            ->update();
    }

    public function down()
    {
        $this->table('roles')
            ->dropColumn('slug')
            ->update();
    }
}
