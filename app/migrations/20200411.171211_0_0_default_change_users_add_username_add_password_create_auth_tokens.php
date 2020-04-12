<?php

namespace Migration;

use Spiral\Migrations\Migration;

class OrmDefault0f124105582325e1394e93b2fee26e74 extends Migration
{
    protected const DATABASE = 'default';

    public function up()
    {
        $this->table('users')
            ->addColumn('username', 'string', [
                'nullable' => false,
                'default'  => null,
                'size'     => 255
            ])
            ->addColumn('password', 'string', [
                'nullable' => false,
                'default'  => null,
                'size'     => 255
            ])
            ->update();
        
        $this->table('auth_tokens')
            ->addColumn('id', 'string', [
                'nullable' => false,
                'default'  => null,
                'size'     => 64
            ])
            ->addColumn('hashed_value', 'string', [
                'nullable' => false,
                'default'  => null,
                'size'     => 128
            ])
            ->addColumn('created_at', 'datetime', [
                'nullable' => false,
                'default'  => null
            ])
            ->addColumn('expires_at', 'datetime', [
                'nullable' => true,
                'default'  => null
            ])
            ->addColumn('payload', 'binary', [
                'nullable' => false,
                'default'  => null
            ])
            ->setPrimaryKeys(["id"])
            ->create();
    }

    public function down()
    {
        $this->table('auth_tokens')->drop();
        
        $this->table('users')
            ->dropColumn('username')
            ->dropColumn('password')
            ->update();
    }
}
