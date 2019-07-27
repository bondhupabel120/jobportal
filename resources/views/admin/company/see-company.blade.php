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
                            <th class="bg-success">Company name</th>
                            <th class="bg-warning">Business Name</th>
                            <th class="bg-success">Email Address</th>
                            <th class="bg-warning">Action</th>
                        </tr>
                        </thead>
                        @php($i = 1)
                        @foreach($companies as $company)
                            <tbody>
                            <tr class="odd gradeX">
                                <td class="bg-success">{{ $i++ }}</td>
                                <td class="bg-warning">{{ $company->first_name.' '.$company->last_name }}</td>
                                <td class="bg-success">{{ $company->business_name }}</td>
                                <td class="bg-warning">{{ $company->email_address }}</td>
                                <td class="bg-success">
                                    <a href="#" id="{{ $company->id }}" class="text-danger delete-btn btn btn-danger" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteCompanyForm'+'{{ $company->id }}').submit();
                                            }
                                            ">Delete</a>
                                    <form id="deleteCompanyForm{{ $company->id }}" action="{{ route('delete-company') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $company->id }}" name="id"/>
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