@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-sec">
                {{ __('Patients') }}
                </h6>
                <div class="filter ml-auto text-sec">
                    <label>Filter</label>
                <select name="boxes" class="boxselect">
                    <option value="all">All</option>
                    <option value="1">Active</option>
                    <option value="2">Deactive</option>
                </select>
                </div>
                <div class="ml-auto">
                  
                    <a href="{{ route('admin.patient.createnewpatient') }}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New Patients') }}</span>
                    </a>
                   
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-User" cellspacing="0" width="100%" style="font-size:14px;">
                        <thead  style="background: linear-gradient(to right, #004e92, #000428) !important; color:white;">
                            <tr>
                                <th width="10">

                                </th>
                                <!-- <th>No</th> -->
                                <th>{{ __('Profile') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Phone') }}</th>
                                <th>{{ __('Address') }}</th>
                                <th>{{ __('Disease') }}</th>
                                <th>{{ __('Blood') }}</th>
                                <th>{{ __('Age') }}</th>
                                <th>{{ __('Gender') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($patient as $p)
                        <tr>
                        <td></td>
                            <td>{{$p->photo}}</td>
                            <td>{{$p->fname}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->phone}}</td>
                            <td>{{$p->address}}</td>
                            <td>{{$p->disease}}</td>
                            <td>{{$p->bloodgroup}}</td>
                            <td>{{$p->dob}}</td>
                            <td>{{$p->gender}}</td>
                            <td ><a href="{{ route('admin.patient.editpatient', ['id' => $p->id]) }}"><i class="fa fa-edit" aria-hidden="true"></i></a> 
                            <a href="{{ route('admin.patient.editpatient', ['id' => $p->id]) }}" style="margin-left:10px;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a href="{{ route('admin.patient.editpatient', ['id' => $p->id]) }}" style="margin-left:2px;margin-top:35px;"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            <a href="{{ route('admin.patient.editpatient', ['id' => $p->id]) }}" style="margin-left:10px;margin-top:35px;"><i class="fa fa-eye" aria-hidden="true"></i></a>
</td>
                           
                            
                        </tr>
                        @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection


@push('script-alt')
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = 'delete selected'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.users.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('zero selected')
        return
      }
      if (confirm('are you sure ?')) {
        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'asc' ]],
    pageLength: 50,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endpush