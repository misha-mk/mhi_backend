

@extends('layouts.admin')

@section('content')
<div class="container-fluid">
<style>
    .dataTables_scrollHeadInner
    {
        width: 100% !important;
    } 
    .datatable
    {
        width: 100% !important;
    }
    .dataTables_wrapper.no-footer .dataTables_scrollBody {
    border-bottom: 1px solid #fff !important;
}
.tableheading
{
    background: linear-gradient(to right, #004e92, #000428) !important;
    color: white;
}
#profileImage {
  font-family: Arial, Helvetica, sans-serif;
  width: 10rem;
 height: 10rem;
  padding: 10px;
  border-radius: 50%;
  background: #004D3C;
  font-size: 1rem;
  color: #fff;
  text-align: center;
  /* line-height: 10rem; */
  margin: 2rem 0;
}
</style>
    <!-- Content Row -->
    <div class="card">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-sec">
                {{ __('Hospital Charges') }}
            </h6>
            <div class="filter ml-auto text-sec">
                <label>Filter</label>
                <select name="boxes" class="boxselect">
                    <option value="all">All</option>
                    <option value="1">Active</option>
                    <option value="2">Deactive</option>
                </select>
            </div>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped datatable datatable-User">
                    <thead class="tableheading" >
                        <tr>
                        <th width="10"></th>
                            <th scope="col">
                                <div style="cursor:pointer;" >
                                    <span>Name</span>

                                </div>
                            </th>

                            <th scope="col" class="">
                                Consulations Fees
                            </th>
                            
                        </tr>
                    </thead>
                    @foreach($hospitals as $p)
                    <tbody class="">
                        <tr>
                        <td></td>
                            <td>
                            {{$p->name}}
                            </td>
                            <td>
                            {{$p->fees}}
                            </td>
                        </tr>

                    </tbody>
                    @endforeach
                    @foreach($clinics as $p)
                    <tbody class="">
                        <tr>
                        <td></td>
                            <td>
                            {{$p->name}}
                            </td>
                            <td>
                            {{$p->fees}}
                            </td>
                        </tr>

                    </tbody>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
    <!-- Content Row -->

</div>
@endsection


@push('script-alt')
<script>
    $(function() {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        let deleteButtonTrans = 'delete selected'
        let deleteButton = {
            text: deleteButtonTrans,
            url: "{{ route('admin.users.mass_destroy') }}",
            className: 'btn-danger',
            action: function(e, dt, node, config) {
                var ids = $.map(dt.rows({
                    selected: true
                }).nodes(), function(entry) {
                    return $(entry).data('entry-id')
                });
                if (ids.length === 0) {
                    alert('zero selected')
                    return
                }
                if (confirm('are you sure ?')) {
                    $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            method: 'POST',
                            url: config.url,
                            data: {
                                ids: ids,
                                _method: 'DELETE'
                            }
                        })
                        .done(function() {
                            location.reload()
                        })
                }
            }
        }
        dtButtons.push(deleteButton)
        $.extend(true, $.fn.dataTable.defaults, {
            order: [
                [1, 'asc']
            ],
            pageLength: 50,
        });
        $('.datatable-User:not(.ajaxTable)').DataTable({
            buttons: dtButtons
        })
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
    })
    const fullName = document.getElementById('fullName').textContent;
    console.log(fullName);
const intials = fullName.split(' ').map(name => name[0]).join('').toUpperCase();
console.log(intials);
document.getElementById('profileImage').innerHTML = intials;

</script>
@endpush