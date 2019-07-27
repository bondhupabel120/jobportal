@extends('admin.master')

@section('body')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Registered Company List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th class="bg-warning">SL No.</th>
                            <th class="bg-success">Candidate name</th>
                            <th class="bg-warning">Email Address</th>
                            <th class="bg-success">Action</th>
                        </tr>
                        </thead>
                        @php($i = 1)
                        @foreach($candidates as $candidate)
                            <tbody>
                            <tr class="odd gradeX">
                                <td class="bg-success">{{ $i++ }}</td>
                                <td class="bg-warning">{{ $candidate->first_name.' '.$candidate->last_name }}</td>
                                <td class="bg-success">{{ $candidate->email }}</td>
                                <td class="bg-warning">
                                    <a href="#" id="{{ $candidate->id }}" class="text-danger delete-btn btn btn-danger" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteCandidateForm'+'{{ $candidate->id }}').submit();
                                            }
                                            ">Delete</a>
                                    <form id="deleteCandidateForm{{ $candidate->id }}" action="{{ route('delete-candidate') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $candidate->id }}" name="id"/>
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