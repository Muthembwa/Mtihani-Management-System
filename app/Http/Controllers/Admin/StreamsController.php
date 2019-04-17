<?php

namespace App\Http\Controllers\Admin;

use App\Stream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreStreamsRequest;
use App\Http\Requests\Admin\UpdateStreamsRequest;

class StreamsController extends Controller
{
    /**
     * Display a listing of Stream.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('stream_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('stream_delete')) {
                return abort(401);
            }
            $streams = Stream::onlyTrashed()->get();
        } else {
            $streams = Stream::all();
        }

        return view('admin.streams.index', compact('streams'));
    }

    /**
     * Show the form for creating new Stream.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('stream_create')) {
            return abort(401);
        }
        
        $class_teachers = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.streams.create', compact('class_teachers'));
    }

    /**
     * Store a newly created Stream in storage.
     *
     * @param  \App\Http\Requests\StoreStreamsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStreamsRequest $request)
    {
        if (! Gate::allows('stream_create')) {
            return abort(401);
        }
        $stream = Stream::create($request->all());



        return redirect()->route('admin.streams.index');
    }


    /**
     * Show the form for editing Stream.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('stream_edit')) {
            return abort(401);
        }
        
        $class_teachers = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $stream = Stream::findOrFail($id);

        return view('admin.streams.edit', compact('stream', 'class_teachers'));
    }

    /**
     * Update Stream in storage.
     *
     * @param  \App\Http\Requests\UpdateStreamsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStreamsRequest $request, $id)
    {
        if (! Gate::allows('stream_edit')) {
            return abort(401);
        }
        $stream = Stream::findOrFail($id);
        $stream->update($request->all());



        return redirect()->route('admin.streams.index');
    }


    /**
     * Display Stream.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('stream_view')) {
            return abort(401);
        }
        
        $class_teachers = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$students = \App\Student::where('class_name_id', $id)->get();$marks = \App\Mark::where('subject15_id', $id)->get();

        $stream = Stream::findOrFail($id);

        return view('admin.streams.show', compact('stream', 'students', 'marks'));
    }


    /**
     * Remove Stream from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('stream_delete')) {
            return abort(401);
        }
        $stream = Stream::findOrFail($id);
        $stream->delete();

        return redirect()->route('admin.streams.index');
    }

    /**
     * Delete all selected Stream at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('stream_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Stream::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Stream from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('stream_delete')) {
            return abort(401);
        }
        $stream = Stream::onlyTrashed()->findOrFail($id);
        $stream->restore();

        return redirect()->route('admin.streams.index');
    }

    /**
     * Permanently delete Stream from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('stream_delete')) {
            return abort(401);
        }
        $stream = Stream::onlyTrashed()->findOrFail($id);
        $stream->forceDelete();

        return redirect()->route('admin.streams.index');
    }
}
