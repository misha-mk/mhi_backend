@extends('layouts.admin')

@section('content')
<div class="container-fluid">

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('Availablity') }}</h1>
                    <h6 class=" mb-0 text-gray-800">{{ $doctordetails[0]->doctorname }}</h6>
                    <h6 class=" mb-0 text-gray-800">{{ $doctordetails[0]->hospitalname }}</h6>
                </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="">
                                    <tr>
                                        <th scope="col" class="" wire:key="header-col-1-9DpPsHI7qJEGVJ8iiqkg">
                                            <div class="" wire:click="sortBy('available_on')" style="cursor:pointer;">
                                                <span>Available On</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-2-9DpPsHI7qJEGVJ8iiqkg">
                                            <div class="" wire:click="sortBy('available_from')" style="cursor:pointer;">
                                                <span>Available From</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="" wire:key="header-col-3-9DpPsHI7qJEGVJ8iiqkg">
                                            <div class="" wire:click="sortBy('available_to')" style="cursor:pointer;">
                                                <span>Available To</span>

                                                <span class="relative">
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="">
                                    @foreach($doctordetails as $row)
                                    <tr wire:loading.class.delay="" class="" wire:key="row-0-9DpPsHI7qJEGVJ8iiqkg">
                                        <td class="" wire:key="cell-0-1-9DpPsHI7qJEGVJ8iiqkg">
                                           {{$row->day}}
                                        </td>

                                        <td class="" id="originalTime" wire:key="cell-0-2-9DpPsHI7qJEGVJ8iiqkg">
                                         <?php $date= date('h:i:s A', strtotime($row->time_from)) ?>
                                          {{$date}}
                                        </td>

                                        <td class="" id="originalTime" wire:key="cell-0-3-9DpPsHI7qJEGVJ8iiqkg">
                                        <?php $date= date('h:i:s A', strtotime($row->time_to)) ?>
                                          {{$date}}
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

