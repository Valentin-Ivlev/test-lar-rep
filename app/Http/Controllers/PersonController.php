<?php

namespace App\Http\Controllers;

use App\Repositories\PersonRepository;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $personRepository;

    public function __construct(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    public function index()
    {
        $persons = $this->personRepository->getAllPersons();

        return response()->json([
            'data' => $persons,
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

        $person = $this->personRepository->create($data);

        return response()->json([
            'data' => $person,
            'message' => 'Данные о человеке добавлены',
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
        $person = $this->personRepository->find($id);

        return response()->json([
            'data' => $person,
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

        $person = $this->personRepository->update($id, $data);

        return response()->json([
            'data' => $person,
            'message' => 'Данные о человеке обновлены',
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
        $this->personRepository->delete($id);

        return response()->json([
            'message' => 'Данные о человеке удалены',
        ]);
    }
}
