<?php

namespace App\Http\Controllers;

use App\Repositories\EducationLevelRepository;
use Illuminate\Http\Request;

class EducationLevelController extends Controller
{
    private $educationLevelRepository;

    public function __construct(EducationLevelRepository $educationLevelRepository)
    {
        $this->educationLevelRepository = $educationLevelRepository;
    }

    public function index()
    {
        $educationLevels = $this->educationLevelRepository->getAllEducationLevels();

        return response()->json([
            'data' => $educationLevels,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $educationLevel = $this->educationLevelRepository->create($data);

        return response()->json([
            'data' => $educationLevel,
            'message' => 'Уровень образования добавлен',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $educationLevel = $this->educationLevelRepository->find($id);

        return response()->json([
            'data' => $educationLevel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $educationLevel = $this->educationLevelRepository->update($id, $data);

        return response()->json([
            'data' => $educationLevel,
            'message' => 'Уровень образования обновлен',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->educationLevelRepository->delete($id);

        return response()->json([
            'message' => 'Уровень образования удален',
        ]);
    }
}
