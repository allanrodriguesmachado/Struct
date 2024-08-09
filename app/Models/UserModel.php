<?php

namespace App\Models;

class UserModel extends Model
{
    protected static array $safe = ["id", "created_at", "updated_at"];

    protected static string $entity = "users";

    public function boostrap()
    {

    }

    public function load(string $id, string $columns = '*'): ?UserModel
    {
        $load = $this->read(
            sprintf("SELECT %s FROM %s WHERE id = :id", $columns, self::$entity), "id={$id}"
        );

        if ($this->fail() || !$load->rowCount()) {
           return throw new \Exception("Ops!! Usuario não encontrado");
        }

        return $load->fetchObject(__CLASS__);
    }

    public function find(string $email, string $columns = '*')
    {
        $find = $this->read(
            sprintf("SELECT %s FROM %s WHERE email = :email", $columns, self::$entity), "email={$email}"
        );

        if ( !$find->rowCount()) {
            return throw new \Exception("Atenção! E-mail não localizado");
        }

        return $find->fetchObject(__CLASS__);
    }

    public function all(string $columns = '*', string $limit = '10', string $offset = '0')
    {
        $all = $this->read(
            sprintf("SELECT %s FROM %s LIMIT %s OFFSET %s", $columns, self::$entity, $limit, $offset)
        );

        dd( $all);
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