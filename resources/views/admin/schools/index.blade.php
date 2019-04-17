@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.schools.title')</h3>
    @can('school_create')
    <p>
        <a href="{{ route('admin.schools.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($schools) > 0 ? 'datatable' : '' }} @can('school_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('school_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.schools.fields.school_name')</th>
                        <th>@lang('quickadmin.schools.fields.county')</th>
                        <th>@lang('quickadmin.schools.fields.subcounty')</th>
                        <th>@lang('quickadmin.schools.fields.email')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($schools) > 0)
                        @foreach ($schools as $school)
                            <tr data-entry-id="{{ $school->id }}">
                                @can('school_delete')
                                    <td></td>
                                @endcan
                                <td field-key='school_name'>{{ $school->school_name }}</td>
                                <td field-key='county'>{{ $school->county }}</td>
                                <td field-key='subcounty'>{{ $school->subcounty }}</td>
                                <td field-key='email'>{{ $school->email }}</td>
                                                                <td>
                                    @can('school_view')
                                    <a href="{{ route('admin.schools.show',[$school->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('school_edit')
                                    <a href="{{ route('admin.schools.edit',[$school->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('school_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.schools.destroy', $school->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

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
    </div>
@stop

@section('javascript') 
    <script>
        @can('school_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.schools.mass_destroy') }}';
        @endcan

    </script>
@endsection