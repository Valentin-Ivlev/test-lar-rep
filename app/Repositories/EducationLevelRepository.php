<?php

namespace App\Repositories;

use App\Models\EducationLevel;

class EducationLevelRepository
{
    public function getAllEducationLevels()
    {
        return EducationLevel::all();
    }

    public function find($id)
    {
        return EducationLevel::findOrFail($id);
    }

    public function create($data)
    {
        return EducationLevel::create($data);
    }

    public function update($id, $data)
    {
        $educationLevel = EducationLevel::findOrFail($id);
        $educationLevel->update($data);
        return $educationLevel;
    }

    public function delete($id)
    {
        $educationLevel = EducationLevel::findOrFail($id);
        $educationLevel->delete();
    }
}
