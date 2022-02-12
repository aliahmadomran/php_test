<?php


namespace ACME\Cities\Repositories;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Event;
use Webkul\Core\Eloquent\Repository;

class CitiesRepository extends Repository
{
    function model()
    {
        return 'ACME\Cities\Models\City';
    }

    /**
     * @param array $data
     * @return \ACME\Cities\Contracts\City
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function create(array $data)
    {
        $cities = parent::create($data);

        return $cities;
    }


    public function getAll()
    {
        $cities = parent::all();

        return $cities;
    }

    /**
     * @par**am array $data
     * @param int $id
     * @param string $attribute
     * @return \ACME\Cities\Contracts\City
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(array $data, $id)
    {
        $page = $this->find($id);

        parent::update($data, $id);



        return $page;
    }




}

