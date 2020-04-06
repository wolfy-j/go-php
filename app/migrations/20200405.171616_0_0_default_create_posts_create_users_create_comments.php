<?php

namespace Migration;

use Spiral\Migrations\Migration;

class OrmDefault5c6a91b08ee9f8ee6e8ae53867d91d53 extends Migration
{
    protected const DATABASE = 'default';

    public function up()
    {
        $this->table('users')
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
        
        $this->table('posts')
            ->addColumn('id', 'primary', [
                'nullable' => false,
                'default'  => null
            ])
            ->addColumn('title', 'string', [
                'nullable' => false,
                'default'  => null,
                'size'     => 255
            ])
            ->addColumn('content', 'text', [
                'nullable' => false,
                'default'  => null
            ])
            ->addColumn('author_id', 'integer', [
                'nullable' => false,
                'default'  => null
            ])
            ->addIndex(["author_id"], [
                'name'   => 'posts_index_author_id_5e8a126062329',
                'unique' => false
            ])
            ->addForeignKey(["author_id"], 'users', ["id"], [
                'name'   => 'posts_foreign_author_id_5e8a1260623d5',
                'delete' => 'CASCADE',
                'update' => 'CASCADE'
            ])
            ->setPrimaryKeys(["id"])
            ->create();
        
        $this->table('comments')
            ->addColumn('id', 'primary', [
                'nullable' => false,
                'default'  => null
            ])
            ->addColumn('message', 'string', [
                'nullable' => false,
                'default'  => null,
                'size'     => 255
            ])
            ->addColumn('post_id', 'integer', [
                'nullable' => false,
                'default'  => null
            ])
            ->addColumn('author_id', 'integer', [
                'nullable' => false,
                'default'  => null
            ])
            ->addIndex(["post_id"], [
                'name'   => 'comments_index_post_id_5e8a126062fdb',
                'unique' => false
            ])
            ->addIndex(["author_id"], [
                'name'   => 'comments_index_author_id_5e8a1260631bd',
                'unique' => false
            ])
            ->addForeignKey(["post_id"], 'posts', ["id"], [
                'name'   => 'comments_foreign_post_id_5e8a126063021',
                'delete' => 'CASCADE',
                'update' => 'CASCADE'
            ])
            ->addForeignKey(["author_id"], 'users', ["id"], [
                'name'   => 'comments_foreign_author_id_5e8a1260631ff',
                'delete' => 'CASCADE',
                'update' => 'CASCADE'
            ])
            ->setPrimaryKeys(["id"])
            ->create();
    }

    public function down()
    {
        $this->table('comments')->drop();
        
        $this->table('posts')->drop();
        
        $this->table('users')->drop();
    }
}
