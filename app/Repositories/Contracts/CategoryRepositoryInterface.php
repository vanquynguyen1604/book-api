<?php
namespace App\Repositories\Contracts;
interface CategoryRepositoryInterface extends RepositoryInterface
{
    public function getAllCategory($select = ['*'], $paginate = 5);
    public function create($data);
    public function show($id);
    public function update($data, $id);
    public function destroy($id); 
}