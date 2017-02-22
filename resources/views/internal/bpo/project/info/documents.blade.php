<div role="tabpanel" class="tab-pane" id="documents">

    <div class="form-title row-table text-500">
        <div class="col-cell cell-icon">
            <i class="zmdi zmdi-n-1-square text-muted mr-5"></i>
        </div>
        <div class="col-cell pl-10">
            {{trans('bpo.application.info.documents.new_document')}}
        </div>
    </div>

    <hr class="mt-10 mb-30">

    <div class="row row-10">
        <div class="column col-sm-10 col-sm-offset-1">
            <div class="form-horizontal">
                {!! Form::open([
                'url'       => route('internal.but.documentUpload'),
                'files'     => true
                ]) !!}
                {!! Form::hidden('project_id', $project->id) !!}
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('general.title')}}</label>
                    <div class="col-sm-5">
                        {!! Form::input('text', 'title', old('title'), ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">{{trans('general.document')}}</label>
                    <div class="col-sm-5">
                        @include('partials.file', ['name' => 'document'])
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5 col-sm-offset-4 text-center">
                        {!! Form::submit(trans('general.submit'), ['class' => 'btn btn-success']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div><!--end.row-->

    <div class="form-title row-table text-500">
        <div class="col-cell cell-icon">
            <i class="zmdi zmdi-n-2-square text-muted mr-5"></i>
        </div>
        <div class="col-cell pl-10">
            {{trans('bpo.application.info.tabs.documents')}}
        </div>
    </div>

    <hr class="mt-10 mb-30">

    <div class="panel panel-table mb-30 mt-10">
        <table class="datatabless td-middle table ma-0">
            <thead>
            <tr>
                <th class="tight">{{trans('dash.columns.no')}}</th>
                <th width="300">{{trans('dash.columns.item')}}</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            @php ($i = 1)
            @foreach($documents as $name => $document)
                <tr>
                    <td class="tight">{{$i}}</td>
                    <td>{{App\Helpers\Helper::documentTitle($name)}}</td>
                    <td>
                        <a href="{{url('internal/bpo/application/storage/'.$application->id.'/'.$document)}}" target="_blank">{{trans('bpo.document')}}</a>
                    </td>
                </tr>
                @php ($i++)
            @endforeach
            </tbody>
        </table>
    </div>


</div>