<?php

namespace App\Models;

class UserModel extends Model
{
    protected static array $safe = ["id", "created_at", "updated_at"];

    protected static string $entity = "users";

    public function boostrap()
    {

    }

    public function load(string $id, $columns = '*'): ?UserModel
    {
        $load = $this->read(
            sprintf("SELECT %s FROM %s WHERE id = :id", $columns, self::$entity), "id={$id}"
        );

        if (!$load->rowCount()) {
           return throw new \Exception("Ops!! Usuario não encontrado");
        }

        return $load->fetchObject(__CLASS__);
    }

    public function find()
    {

    }

    public function all()
    {

    }

    public function save()
    {

    }

    public function destroy()
    {

    }

    private function required()
    {

    }
}