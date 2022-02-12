<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
<accordian :title="'Custom shipping cost'" :active="false">
    <div slot="body">
        <div class="control-group" :class="[errors.has('page_title') ? 'has-error' : '']">
            <label for="defcost" class="required">Default Shipping Cost </label>

            <input type="text" class="control" name="defcost" value="{{ $product }}" data-vv-as="&quot;defcost&quot;">
        </div>
        <div>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="col-md-4">Use default</th>
                    <th class="col-md-4">Country</th>
                    <th class="col-md-2">city</th>
                    <th class="col-md-2">Shipping Cost</th>
                </tr>
                </thead>

                <tbody>
                @foreach($cities as $data)
                    <tr ng-repeat="name in getdrugnameNewArray">
                        <td><input type="checkbox">
                        <td>{{$data['country']}}</td>
                        <td>{{$data['city']}}</td>
                        <td><input type="text" placeholder=""></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</accordian>