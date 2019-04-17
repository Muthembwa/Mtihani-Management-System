@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.marks.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.marks.fields.subject')</th>
                            <td field-key='subject'>{{ $mark->subject->subjectname ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.marks.fields.student')</th>
                            <td field-key='student'>{{ $mark->student->adm_no ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.marks.fields.mark')</th>
                            <td field-key='mark'>{{ $mark->mark }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.marks.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


