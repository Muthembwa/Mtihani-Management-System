@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.subjects.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.subjects.fields.subject-code')</th>
                            <td field-key='subject_code'>{{ $subject->subject_code }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.subjects.fields.subjectname')</th>
                            <td field-key='subjectname'>{{ $subject->subjectname }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.subjects.fields.subject-teacher')</th>
                            <td field-key='subject_teacher'>{{ $subject->subject_teacher->name ?? '' }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#marks" aria-controls="marks" role="tab" data-toggle="tab">Marks</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="marks">
<table class="table table-bordered table-striped {{ count($marks) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.marks.fields.subject')</th>
                        <th>@lang('quickadmin.marks.fields.student')</th>
                        <th>@lang('quickadmin.marks.fields.mark')</th>
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
                    <td field-key='subject'>{{ $mark->subject->subjectname ?? '' }}</td>
                                <td field-key='student'>{{ $mark->student->adm_no ?? '' }}</td>
                                <td field-key='mark'>{{ $mark->mark }}</td>
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
                <td colspan="8">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.subjects.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


