<?php

namespace App\Http\Controllers\Admin;

use App\schools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSchoolsRequest;
use App\Http\Requests\Admin\UpdateSchoolsRequest;

class SchoolsController extends Controller
{
   /**
     * Display a listing of Schools.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('school_access')) {
            return abort(401);
        }


                $schools = schools::all();

        return view('admin.schools.index', compact('schools'));
    }

    /**
     * Show the form for creating new Schools.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('school_create')) {
            return abort(401);
        }
        
        $roles = \App\Role::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.schools.create', compact('roles'));
    }

    /**
     * Store a newly created School in storage.
     *
     * @param  \App\Http\Requests\StoreSchoolsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolsRequest $request)
    {
        if (! Gate::allows('school_create')) {
            return abort(401);
        }
        $school = School::create($request->all());



        return redirect()->route('admin.schools.index');
    }


    /**
     * Show the form for editing School.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('school_edit')) {
            return abort(401);
        }
        
        $roles = \App\Role::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $school = School::findOrFail($id);

        return view('admin.schools.edit', compact('school', 'roles'));
    }

    /**
     * Update School in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolsRequest $request, $id)
    {
        if (! Gate::allows('school_edit')) {
            return abort(401);
        }
        $school = School::findOrFail($id);
        $school->update($request->all());

  

        return redirect()->route('admin.schools.index');
    }


    /**
     * Display Schools.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('school_view')) {
            return abort(401);
        }
        
        $roles = \App\Role::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$streams = \App\Stream::where('class_teacher_id', $id)->get();$subjects = \App\Subject::where('subject_teacher_id', $id)->get();

        $school = School::findOrFail($id);

        return view('admin.schools.show', compact('school', 'streams', 'subjects'));
    }


    /**
     * Remove Schools from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('school_delete')) {
            return abort(401);
        }
        $school = School::findOrFail($id);
        $school->delete();

        return redirect()->route('admin.schools.index');
    }

    /**
     * Delete all selected School at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('school_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = School::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}

