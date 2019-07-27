@extends('admin.master')

@section('body')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Job Post List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th class="bg-warning">SL No.</th>
                            <th class="bg-success">Job Title</th>
                            <th class="bg-warning">Job Description</th>
                            <th class="bg-success">Salary</th>
                            <th class="bg-warning">Location</th>
                            <th class="bg-success">Country</th>
                            <th class="bg-warning">Publication status</th>
                            <th class="bg-success">Action</th>
                        </tr>
                        </thead>
                        @php($i = 1)
                        @foreach($jobs as $job)
                            <tbody>
                            <tr class="odd gradeX">
                                <td class="bg-success">{{ $i++ }}</td>
                                <td class="bg-warning">{{ $job->job_title }}</td>
                                <td class="bg-success">{!! $job->job_description !!}</td>
                                <td class="bg-warning">{{ $job->salary }}</td>
                                <td class="bg-success">{{ $job->location }}</td>
                                <td class="bg-warning">{{ $job->country }}</td>
                                <td class="bg-success">{{ $job->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="bg-warning">
                                    <a href="{{ route('edit-job',['id' => $job->id]) }}" class="text-success btn btn-success">Edit</a>
                                    <a href="#" id="{{ $job->id }}" class="text-danger delete-btn btn btn-danger" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteJobForm'+'{{ $job->id }}').submit();
                                            }
                                            ">Delete</a>
                                    <form id="deleteJobForm{{ $job->id }}" action="{{ route('delete-job') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $job->id }}" name="id"/>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection