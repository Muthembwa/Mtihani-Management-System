@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.students.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.students.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('adm_no', trans('quickadmin.students.fields.adm-no').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('adm_no', old('adm_no'), ['class' => 'form-control', 'placeholder' => 'Enter the Admission Number', 'required' => '']) !!}
                    <p class="help-block">Enter the Admission Number</p>
                    @if($errors->has('adm_no'))
                        <p class="help-block">
                            {{ $errors->first('adm_no') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('student_name', trans('quickadmin.students.fields.student-name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('student_name', old('student_name'), ['class' => 'form-control', 'placeholder' => 'Enter student\'s name', 'required' => '']) !!}
                    <p class="help-block">Enter student's name</p>
                    @if($errors->has('student_name'))
                        <p class="help-block">
                            {{ $errors->first('student_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('parents_name', trans('quickadmin.students.fields.parents-name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('parents_name', old('parents_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('parents_name'))
                        <p class="help-block">
                            {{ $errors->first('parents_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('parents_email', trans('quickadmin.students.fields.parents-email').'', ['class' => 'control-label']) !!}
                    {!! Form::email('parents_email', old('parents_email'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('parents_email'))
                        <p class="help-block">
                            {{ $errors->first('parents_email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('parents_phone_no', trans('quickadmin.students.fields.parents-phone-no').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('parents_phone_no', old('parents_phone_no'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('parents_phone_no'))
                        <p class="help-block">
                            {{ $errors->first('parents_phone_no') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('class_name_id', trans('quickadmin.students.fields.class-name').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('class_name_id', $class_names, old('class_name_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('class_name_id'))
                        <p class="help-block">
                            {{ $errors->first('class_name_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

