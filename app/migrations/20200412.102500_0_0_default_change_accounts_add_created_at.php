<?php

namespace Migration;

use Spiral\Migrations\Migration;

class OrmDefault8262fbc68a77bad28d86dc1f9d4d6ed7 extends Migration
{
    protected const DATABASE = 'default';

    public function up()
    {
        $this->table('accounts')
            ->addColumn('created_at', 'timestamp', [
                'nullable' => false,
                'default'  => \Spiral\Database\Injection\Fragment::__set_state(array(
               'fragment' => 'CURRENT_TIMESTAMP',
            ))
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
