@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30">
            @include('internal.pw.project.questions._partials.top');

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
                    <tr align="text-center">
                        <th class="tight">No.</th>
                        <th width="350">Description</th>
                        <th>Compliance Status</th>
                        <th align="center">Notes</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach(trans('pw.questions.highway') as $questionNum => $question)
                        <tr>
                            <td class="tight">{{ (intval($questionNum)+1) }}</td>
                            <td>{!! $question['description'] !!}</td>
                            <td>
                                @for($i=0;$i<$question['statusesCount'];$i++)
                                @foreach($question['statuses'] as $no => $status)
                                    <div class="radio">
                                        <input type="radio"
                                               id="q{{$questionNum}}_{{$i}}_{{$no}}"
                                               name="q{{$questionNum}}_{{$i}}"
                                               value="{{$status['value']}}"
                                        @if(old('q'.$questionNum.'_'.$i) == $no)
                                            {{'checked=checked'}}@endif
                                        >
                                        {!! Form::label('q'.$questionNum.'_'.$i."_".$no, $status['text']) !!}
                                    </div>
                                @endforeach
                                @endfor
                            </td>
                            <td class="text-right">
                                @for($i=1;$i<=$question['statusesCount'];$i++)
                                {!! Form::textarea(
                                'q'.$questionNum.'_' . $i .'_note',
                                old('q'.$questionNum.'_' . $i . 'note'),
                                ['rows' => 3, 'cols' => 30]) !!}
                                @endfor
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            @include('internal.pw.project.questions._partials.files')
            @include('internal.pw.project.questions._partials.bottom')
        </div><!--end.row-->
    </div>
    </div>
@endsection