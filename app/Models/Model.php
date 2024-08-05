<?php

namespace App\Models;

use App\Database\Connect;

abstract class Model
{
    protected ?object $data;
    protected \PDOException $fail;
    protected ?string $message;

    public function __set(string $name, string $value)
    {
        dd($this->data);
//        if (empty($this->data)) {
//
//        }
//
//        $this->data->$name = $value;
    }

//    public function __get(string $name)
//    {
//        return ($this->data->$name ?? null);
//    }
//
//    public function __isset(string $name): bool
//    {
//       return isset($this->data->$name);
//    }

    protected function data(): ?object
    {
        return $this->data;
    }

    protected function fail(): \PDOException
    {
        return $this->fail;
    }

    protected function message(): ?string
    {
        return $this->message;
    }

    protected function create()
    {

    }

    protected function read(string $select, ?string $params): \PDOException|false|\Exception|\PDOStatement
    {
        try {
            $stmt = Connect::getInstance()->prepare($select);
            if ($params) {
                parse_str($params, $valuesArr);
                foreach ($valuesArr as $key => $value) {
                    $type = (is_numeric($value) ? \PDO::PARAM_INT : \PDO::PARAM_STR);
                    $stmt->bindValue(":{$key}", $value, $type);
                }
            }

            $stmt->execute();
            return $stmt;
        } catch (\PDOException $exception) {
            return $this->fail = $exception;
        }
    }

    protected function update()
    {

    }

    protected function delete()
    {

    }

    protected function safe()
    {

    }

    private function filter()
    {

    }
}