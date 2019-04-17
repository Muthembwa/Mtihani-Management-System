@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.streams.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.streams.fields.class-name')</th>
                            <td field-key='class_name'>{{ $stream->class_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.streams.fields.class-teacher')</th>
                            <td field-key='class_teacher'>{{ $stream->class_teacher->name ?? '' }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#students" aria-controls="students" role="tab" data-toggle="tab">Students</a></li>
<li role="presentation" class=""><a href="#marks" aria-controls="marks" role="tab" data-toggle="tab">Marks</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="students">
<table class="table table-bordered table-striped {{ count($students) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.students.fields.adm-no')</th>
                        <th>@lang('quickadmin.students.fields.student-name')</th>
                        <th>@lang('quickadmin.students.fields.parents-name')</th>
                        <th>@lang('quickadmin.students.fields.parents-email')</th>
                        <th>@lang('quickadmin.students.fields.parents-phone-no')</th>
                        <th>@lang('quickadmin.students.fields.class-name')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($students) > 0)
            @foreach ($students as $student)
                <tr data-entry-id="{{ $student->id }}">
                    <td field-key='adm_no'>{{ $student->adm_no }}</td>
                                <td field-key='student_name'>{{ $student->student_name }}</td>
                                <td field-key='parents_name'>{{ $student->parents_name }}</td>
                                <td field-key='parents_email'>{{ $student->parents_email }}</td>
                                <td field-key='parents_phone_no'>{{ $student->parents_phone_no }}</td>
                                <td field-key='class_name'>{{ $student->class_name->class_name ?? '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('student_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.students.restore', $student->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('student_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.students.perma_del', $student->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('student_view')
                                    <a href="{{ route('admin.students.show',[$student->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('student_edit')
                                    <a href="{{ route('admin.students.edit',[$student->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('student_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.students.destroy', $student->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="11">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="marks">
<table class="table table-bordered table-striped {{ count($marks) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.marks.fields.student-name')</th>
                        <th>@lang('quickadmin.marks.fields.subject1')</th>
                        <th>@lang('quickadmin.marks.fields.subject2')</th>
                        <th>@lang('quickadmin.marks.fields.subject3')</th>
                        <th>@lang('quickadmin.marks.fields.subject4')</th>
                        <th>@lang('quickadmin.marks.fields.subject5')</th>
                        <th>@lang('quickadmin.marks.fields.subject6')</th>
                        <th>@lang('quickadmin.marks.fields.subject10')</th>
                        <th>@lang('quickadmin.marks.fields.subject11')</th>
                        <th>@lang('quickadmin.marks.fields.subject7')</th>
                        <th>@lang('quickadmin.marks.fields.subject8')</th>
                        <th>@lang('quickadmin.marks.fields.subject9')</th>
                        <th>@lang('quickadmin.marks.fields.subject12')</th>
                        <th>@lang('quickadmin.marks.fields.subject13')</th>
                        <th>@lang('quickadmin.marks.fields.subject14')</th>
                        <th>@lang('quickadmin.marks.fields.subject15')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($marks) > 0)
            @foreach ($marks as $mark)
                <tr data-entry-id="{{ $mark->id }}">
                    <td field-key='student_name'>{{ $mark->student_name->student_name ?? '' }}</td>
                                <td field-key='subject1'>{{ $mark->subject1->subjectname ?? '' }}</td>
                                <td field-key='subject2'>{{ $mark->subject2->subject_code ?? '' }}</td>
                                <td field-key='subject3'>{{ $mark->subject3->subjectname ?? '' }}</td>
                                <td field-key='subject4'>{{ $mark->subject4->subjectname ?? '' }}</td>
                                <td field-key='subject5'>{{ $mark->subject5->subject_code ?? '' }}</td>
                                <td field-key='subject6'>{{ $mark->subject6->subject_code ?? '' }}</td>
                                <td field-key='subject10'>{{ $mark->subject10->subject_code ?? '' }}</td>
                                <td field-key='subject11'>{{ $mark->subject11->subject_code ?? '' }}</td>
                                <td field-key='subject7'>{{ $mark->subject7->subject_code ?? '' }}</td>
                                <td field-key='subject8'>{{ $mark->subject8->subject_code ?? '' }}</td>
                                <td field-key='subject9'>{{ $mark->subject9->subject_code ?? '' }}</td>
                                <td field-key='subject12'>{{ $mark->subject12->subject_code ?? '' }}</td>
                                <td field-key='subject13'>{{ $mark->subject13->subject_code ?? '' }}</td>
                                <td field-key='subject14'>{{ $mark->subject14->subject_code ?? '' }}</td>
                                <td field-key='subject15'>{{ $mark->subject15->class_name ?? '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('mark_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.marks.restore', $mark->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('mark_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.marks.perma_del', $mark->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('mark_view')
                                    <a href="{{ route('admin.marks.show',[$mark->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('mark_edit')
                                    <a href="{{ route('admin.marks.edit',[$mark->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('mark_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.marks.destroy', $mark->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="21">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.streams.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


