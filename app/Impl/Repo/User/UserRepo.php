<?php

namespace App\Impl\Repo\User;

interface UserRepo {

    public function getAll();

    public function find($id);

    public function delete($id);
}