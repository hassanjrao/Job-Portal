@extends('layouts.backend')
@section('page-title', 'Jobs')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Jobs
                </h3>



                <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary">Add</a>

            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Location</th>
                                <th>Total Views</th>
                                <th>Title En</th>
                                <th>Title Ar</th>
                                <th>Description En</th>
                                <th>Description Ar</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($jobs as $ind => $location)



                                <tr>

                                    <td>{{ $ind + 1 }}</td>

                                    <td>{{ $location->category ? $location->category->name_en_ar : '-' }}</td>

                                    <td>{{ $location->location ?$location->location->name_en_ar : "-" }}</td>

                                    <td>{{ $location->total_views }}</td>

                                    <td>
                                        {{ $location->title_en }}
                                    </td>

                                    <td>
                                        {{ $location->title_ar }}
                                    </td>

                                    <td>
                                        {{ $location->description_en }}

                                    </td>

                                    <td>
                                        {{ $location->description_ar }}
                                    </td>

                                    <td>{{ $location->created_at }}</td>
                                    <td>{{ $location->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            <a href="{{ route('admin.jobs.edit', $location->id) }}"
                                                class="btn btn-sm btn-alt-primary">Edit</a>
                                            <form id="form-{{ $location->id }}"
                                                action="{{ route('admin.jobs.destroy', $location->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="button" onclick="confirmDelete({{ $location->id }})"
                                                    class="btn btn-sm btn-alt-danger" value="Delete">

                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>








    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
