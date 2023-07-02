<?php

namespace App\Repositories;

use App\Models\Person;

class PersonRepository
{
    public function getAllPersons()
    {
        return Person::with('educationLevels')->get();
    }

    public function find($id)
    {
        return Person::findOrFail($id);
    }

    public function create($data)
    {
        return Person::create($data);
    }

    public function update($id, $data)
    {
        $person = Person::findOrFail($id);
        $person->update($data);
        return $person;
    }

    public function delete($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();
    }
}
