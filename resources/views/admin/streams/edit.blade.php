@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.streams.title')</h3>
    
    {!! Form::model($stream, ['method' => 'PUT', 'route' => ['admin.streams.update', $stream->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('class_name', trans('quickadmin.streams.fields.class-name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('class_name', old('class_name'), ['class' => 'form-control', 'placeholder' => 'Enter name of the class', 'required' => '']) !!}
                    <p class="help-block">Enter name of the class</p>
                    @if($errors->has('class_name'))
                        <p class="help-block">
                            {{ $errors->first('class_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('class_teacher_id', trans('quickadmin.streams.fields.class-teacher').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('class_teacher_id', $class_teachers, old('class_teacher_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('class_teacher_id'))
                        <p class="help-block">
                            {{ $errors->first('class_teacher_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

