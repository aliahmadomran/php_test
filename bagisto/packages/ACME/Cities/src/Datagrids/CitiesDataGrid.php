<?php

namespace ACME\Cities\Datagrids;

use Illuminate\Support\Facades\DB;
use Webkul\Ui\DataGrid\DataGrid;

class CitiesDataGrid extends DataGrid
{
    protected $index = 'id';

    protected $sortOrder = 'asc';

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('cities')
            ->Select('id','country','city');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => 'Id',
            'type'       => 'number',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'country',
            'label'      => 'Country',
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'city',
            'label'      => 'City',
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);
    }

    public function prepareActions()
    {
        $this->addAction([
            'title'  => 'edit',
            'method' => 'GET',
            'route'  => 'admin.cities.edit',
            'icon'   => 'icon pencil-lg-icon',
        ]);

        $this->addAction([
            'title'  => 'delete',
            'method' => 'POST',
            'route'  => 'admin.cities.delete',
            'icon'   => 'icon trash-icon',
        ]);
    }


//    public function prepareMassActions()
//    {
//        $this->addMassAction([
//            'type'   => 'delete',
//            'label'  => 'Delete',
//            'action' => route('admin.cities.mass-delete'),
//            'method' => 'POST',
//        ]);
//    }
}