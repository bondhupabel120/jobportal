@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <br/>
            <div class="well">
                <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
                <form action="{{ route('update-job') }}" method="POST" class="form-horizontal" enctype="multipart/form-data" name="editBlogForm">
                    @csrf

                    <div class="form-group">
                        <label class="control-label col-md-3">Job Title</label>
                        <div class="col-md-9">
                            <input type="text" name="job_title" value="{{ $job->job_title }}" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Blog Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="editor" name="job_description">{{ $job->job_description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Salary</label>
                        <div class="col-md-9">
                            <input type="text" name="salary" value="{{ $job->salary }}" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Location</label>
                        <div class="col-md-9">
                            <input type="text" name="location" value="{{ $job->location }}" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Country</label>
                        <div class="col-md-9">
                            <input type="text" name="country" value="{{ $job->country }}" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" {{ $job->publication_status == 1 ? 'checked' : ' ' }} name="publication_status" value="1"/> Published</label>
                            <label><input type="radio" {{ $job->publication_status == 0 ? 'checked' : ' ' }} name="publication_status" value="0"/> Unpublished</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Update Info" />
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection