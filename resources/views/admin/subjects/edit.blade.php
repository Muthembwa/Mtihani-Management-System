@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.subjects.title')</h3>
    
    {!! Form::model($subject, ['method' => 'PUT', 'route' => ['admin.subjects.update', $subject->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('subject_code', trans('quickadmin.subjects.fields.subject-code').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('subject_code', old('subject_code'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('subject_code'))
                        <p class="help-block">
                            {{ $errors->first('subject_code') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('subjectname', trans('quickadmin.subjects.fields.subjectname').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('subjectname', old('subjectname'), ['class' => 'form-control', 'placeholder' => 'Enter name of the subject', 'required' => '']) !!}
                    <p class="help-block">Enter name of the subject</p>
                    @if($errors->has('subjectname'))
                        <p class="help-block">
                            {{ $errors->first('subjectname') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('subject_teacher_id', trans('quickadmin.subjects.fields.subject-teacher').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('subject_teacher_id', $subject_teachers, old('subject_teacher_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('subject_teacher_id'))
                        <p class="help-block">
                            {{ $errors->first('subject_teacher_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

