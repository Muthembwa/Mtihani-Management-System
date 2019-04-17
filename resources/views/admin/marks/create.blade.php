@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.marks.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.marks.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('subject_id', trans('quickadmin.marks.fields.subject').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('subject_id', $subjects, old('subject_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('subject_id'))
                        <p class="help-block">
                            {{ $errors->first('subject_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('student_id', trans('quickadmin.marks.fields.student').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('student_id', $students, old('student_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('student_id'))
                        <p class="help-block">
                            {{ $errors->first('student_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mark', trans('quickadmin.marks.fields.mark').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('mark', old('mark'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mark'))
                        <p class="help-block">
                            {{ $errors->first('mark') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

