<?php

namespace Migration;

use Spiral\Migrations\Migration;

class OrmDefaultE25d0a76298ce261f77bcd8cbed5d5b0 extends Migration
{
    protected const DATABASE = 'default';

    public function up()
    {
        $this->table('users')
            ->addIndex(["username"], [
                'name'   => 'users_index_username_5e931ada5bb3e',
                'unique' => true
            ])
            ->update();
        
        $this->table('accounts')
            ->addColumn('updated_at', 'timestamp', [
                'nullable' => false,
                'default'  => \Spiral\Database\Injection\Fragment::__set_state(array(
               'fragment' => 'CURRENT_TIMESTAMP',
            ))
            ])
            ->alterColumn('created_at', 'timestamp', [
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
            ->alterColumn('created_at', 'datetime', [
                'nullable' => false,
                'default'  => null
            ])
            ->dropColumn('updated_at')
            ->update();
        
        $this->table('users')
            ->dropIndex(["username"])
            ->update();
    }
}
