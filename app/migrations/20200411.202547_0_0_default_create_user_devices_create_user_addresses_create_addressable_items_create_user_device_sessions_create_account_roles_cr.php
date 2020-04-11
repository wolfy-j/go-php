<?php

namespace Migration;

use Spiral\Migrations\Migration;

class OrmDefault551340ec95eecd7352365502665a9048 extends Migration
{
    protected const DATABASE = 'default';

    public function up()
    {
        $this->table('user_devices')
            ->addColumn('id', 'bigPrimary', [
                'nullable' => false,
                'default'  => null
            ])
            ->setPrimaryKeys(["id"])
            ->create();
        
        $this->table('user_addresses')
            ->addColumn('id', 'bigPrimary', [
                'nullable' => false,
                'default'  => null
            ])
            ->setPrimaryKeys(["id"])
            ->create();
        
        $this->table('addressable_items')
            ->addColumn('id', 'bigPrimary', [
                'nullable' => false,
                'default'  => null
            ])
            ->setPrimaryKeys(["id"])
            ->create();
        
        $this->table('user_device_sessions')
            ->addColumn('id', 'bigPrimary', [
                'nullable' => false,
                'default'  => null
            ])
            ->setPrimaryKeys(["id"])
            ->create();
        
        $this->table('account_roles')
            ->addColumn('id', 'bigPrimary', [
                'nullable' => false,
                'default'  => null
            ])
            ->setPrimaryKeys(["id"])
            ->create();
        
        $this->table('account_addresses')
            ->addColumn('id', 'bigPrimary', [
                'nullable' => false,
                'default'  => null
            ])
            ->setPrimaryKeys(["id"])
            ->create();
        
        $this->table('tags')
            ->addColumn('id', 'bigPrimary', [
                'nullable' => false,
                'default'  => null
            ])
            ->setPrimaryKeys(["id"])
            ->create();
        
        $this->table('user_contacts')
            ->addColumn('id', 'bigPrimary', [
                'nullable' => false,
                'default'  => null
            ])
            ->setPrimaryKeys(["id"])
            ->create();
        
        $this->table('user_details')
            ->addColumn('id', 'bigPrimary', [
                'nullable' => false,
                'default'  => null
            ])
            ->setPrimaryKeys(["id"])
            ->create();
        
        $this->table('addresses')
            ->addColumn('id', 'bigPrimary', [
                'nullable' => false,
                'default'  => null
            ])
            ->setPrimaryKeys(["id"])
            ->create();
        
        $this->table('map_entities')
            ->addColumn('id', 'bigPrimary', [
                'nullable' => false,
                'default'  => null
            ])
            ->setPrimaryKeys(["id"])
            ->create();
        
        $this->table('account_users')
            ->addColumn('id', 'bigPrimary', [
                'nullable' => false,
                'default'  => null
            ])
            ->setPrimaryKeys(["id"])
            ->create();
    }

    public function down()
    {
        $this->table('account_users')->drop();
        
        $this->table('map_entities')->drop();
        
        $this->table('addresses')->drop();
        
        $this->table('user_details')->drop();
        
        $this->table('user_contacts')->drop();
        
        $this->table('tags')->drop();
        
        $this->table('account_addresses')->drop();
        
        $this->table('account_roles')->drop();
        
        $this->table('user_device_sessions')->drop();
        
        $this->table('addressable_items')->drop();
        
        $this->table('user_addresses')->drop();
        
        $this->table('user_devices')->drop();
    }
}
