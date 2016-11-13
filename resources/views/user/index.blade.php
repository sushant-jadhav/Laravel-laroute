@extends('layouts/default')

@section('content')
    <div class='row' ng-controller='userController'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">User Listing</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        
                    </div>
                </div>
                <div class="box-body">
                    <table id="" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th >Name</th>
                                <th >Email</th>
                                <th >Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat='user in users'>
                              <td class="sorting_1">@{{user.name}}</td>
                              <td>@{{user.email}}</td>
                              <td>@{{user.created_at}}</td>
                              
                            </tr>
                        </tbody>
                    
                  </table>

                </div><!-- /.box-body -->
               <!--  <div class="box-footer">
                    <form action='#'>
                        <input type='text' placeholder='New task' class='form-control input-sm' />
                    </form>
                </div> --><!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->
       

    </div><!-- /.row -->
@endsection
@section('scripts')
<script type="text/javascript" src="{{asset("api/user/user.js")}}"></script>

<script type="text/javascript">
    $(function () {
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
    });
</script>

@stop