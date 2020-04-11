<?php

namespace Migration;

use Spiral\Migrations\Migration;

class OrmDefault0b93ab4e2a841db2b76630780b4f7042 extends Migration
{
    protected const DATABASE = 'default';

    public function up()
    {
        $this->table('roles')
            ->alterColumn('slug', 'string', [
                'nullable' => true,
                'default'  => null,
                'size'     => 255
            ])
            ->update();
    }

    public function down()
    {
        $this->table('roles')
            ->alterColumn('slug', 'string', [
                'nullable' => false,
                'default'  => null,
                'size'     => 255
            ])
            ->update();
    }
}
