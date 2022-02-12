@extends('admin::layouts.content')

@section('page_title')
    Edit Country and City
@stop

@section('content')
    <div class="content">
        @php
            $locale = core()->getRequestedLocaleCode();
        @endphp

        <form method="POST" action="{{ route('admin.cities.update', $page->id) }}" @submit.prevent="onSubmit">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="window.location = '{{ route('admin.cities.index') }}'"></i>

                        Edit Country and City
                    </h1>


                </div>

                <div class="page-action">

                    <button type="submit" class="btn btn-lg btn-primary">
                        Edit
                    </button>
                </div>
            </div>

            <div class="page-content">

                <div class="form-container">
                    @csrf()
                    <accordian :title="'{{ __('admin::app.cms.pages.general') }}'" :active="true">
                        <div slot="body">
                            <div class="control-group" :class="[errors.has('page_title') ? 'has-error' : '']">
                                <label for="country" class="required">Country</label>

                                <input type="text" class="control" name="country" v-validate="'required'" value="{{$page->country}}" data-vv-as="&quot;country&quot;">

                                <span class="control-error" v-if="errors.has('page_title')">@{{ errors.first('page_title') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('page_title') ? 'has-error' : '']">
                                <label for="city" class="required">City</label>

                                <input type="text" class="control" name="city" v-validate="'required'" value="{{$page->city}}" data-vv-as="&quot;city&quot;">

                                <span class="control-error" v-if="errors.has('page_title')">@{{ errors.first('page_title') }}</span>
                            </div>


                        </div>
                    </accordian>


                </div>
            </div>
        </form>
    </div>
@stop

