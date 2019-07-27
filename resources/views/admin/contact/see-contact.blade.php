@extends('admin.master')

@section('body')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Contact Message List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th class="bg-warning">SL No.</th>
                            <th class="bg-success">Name</th>
                            <th class="bg-warning">Email</th>
                            <th class="bg-success">Subject</th>
                            <th class="bg-warning">Message</th>
                            <th class="bg-success">Publication status</th>
                            <th class="bg-warning">Action</th>
                        </tr>
                        </thead>
                        @php($i = 1)
                        @foreach($contacts as $contact)
                            <tbody>
                            <tr class="odd gradeX">
                                <td class="bg-success">{{ $i++ }}</td>
                                <td class="bg-warning">{{ $contact->name }}</td>
                                <td class="bg-success">{{ $contact->email }}</td>
                                <td class="bg-warning">{{ $contact->subject }}</td>
                                <td class="bg-success">{{ $contact->message }}</td>
                                <td class="bg-warning">{{ $contact->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="bg-success">
                                    <a href="#" id="{{ $contact->id }}" class="text-danger delete-btn btn btn-danger" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteContactForm'+'{{ $contact->id }}').submit();
                                            }
                                            ">Delete</a>
                                    <form id="deleteContactForm{{ $contact->id }}" action="{{ route('delete-contact') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $contact->id }}" name="id"/>
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