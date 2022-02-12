@extends('admin::layouts.content')

@section('page_title')
    'Cities'
@stop

@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>Cities</h1>
            </div>
            <div class="page-action">
                <a href="{{ route('admin.cities.create') }}" class="btn btn-lg btn-primary">
                    Add City
                </a>
            </div>
        </div>

        <div class="page-content">
            @inject('cityGrid', 'ACME\Cities\DataGrids\CitiesDataGrid')

            {!! $cityGrid->render() !!}
        </div>
    </div>


@stop

@push('scripts')
    @include('admin::export.export', ['gridName' => $cityGrid])
@endpush

