@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">

            @include('internal.pw.project.questions._partials.top');

            <div class="row row-10">
                <div class="column col-sm-10 col-sm-offset-1">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Any duplicates application on the same location
                                ?</label>
                            <div class="col-sm-8">
                                <div class="radio">
                                    <input type="radio" id="apply-1" name="apply" checked="">
                                    <label for="apply-1">Yes</label>&nbsp;&nbsp;
                                    <input type="radio" id="apply-1" name="apply" checked="">
                                    <label for="apply-1">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">If yes, please state duplicate's Application
                                No</label>
                            <div class="col-sm-3">
                                {!! Form::text('duplicates', old('duplicates'), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end.row-->

            <div class="form-title row-table text-500 mt-30">
                <div class="col-cell cell-icon">
                    <i class="zmdi zmdi-n-2-square text-muted mr-5"></i>
                </div>
                <div class="col-cell pl-10">
                    Site Inspection Checklist
                </div>
            </div>

            <hr class="mt-10 mb-30">

            <div class="panel panel-table mb-30 mt-10">
                <table class="datatabless td-middle table ma-0">
                    <thead>
                    <tr>
                        <th class="tight">No.</th>
                        <th width="350">Description</th>
                        <th>Compliance Status</th>
                        <th>Notes</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach(trans('pw.questions.ad') as $questionNum => $question)
                    <tr>
                        <td class="tight">{{$question['no']}}</td>
                        <td>{{$question['description']}}</td>
                        <td>
                            @foreach($question['statuses'] as $no => $status)
                                <div class="radio">
                                    <input type="radio"
                                           id="q{{$questionNum}}_{{$no}}"
                                           name="q{{$questionNum}}"
                                           value="{{$status['value']}}"
                                    @if(old('q'.$questionNum) == $no)
                                        {{'checked=checked'}}@endif
                                    >
                                    {!! Form::label('q'.$questionNum.'_'.$no, $status['text']) !!}
                                </div>
                            @endforeach
                        </td>
                        <td class="text-right">
                            {!! Form::textarea(
                            'q'.$questionNum.'_note',
                            old('q'.$questionNum.'_note'),
                            ['rows' => 3, 'cols' => 30]) !!}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            @include('internal.pw.project.questions._partials.files')
            @include('internal.pw.project.questions._partials.bottom')
        </div>
    </div>
@endsection