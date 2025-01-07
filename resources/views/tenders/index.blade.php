@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
@endsection

@section('js_after')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Tender</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item active" aria-current="page">Post New Tender</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Info -->
{{--        <div class="block block-rounded">--}}
{{--            <div class="block-header block-header-default">--}}
{{--                <h3 class="block-title">Plugin Example</h3>--}}
{{--            </div>--}}
{{--            <div class="block-content">--}}
{{--                <p>--}}
{{--                    This page showcases how easily you can add a plugin’s JS/CSS assets and init it using custom JS code.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- END Info -->

        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title"> All Tender <small></small></h3>
                <a href="{{ route('tenders.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-lg"></i> Post New Tender
                </a>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>


                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Value</th>
                        <th>End Date</th>
                        <th width="200">Actions</th>
                    </tr>
                    </thead>
                    <tbody>


                    @forelse($tenders as $tender)
                        <tr>
                            <td>
                                <div class="fw-bold">{{ $tender->title }}</div>
                                <div class="text-muted small">{{ Str::limit($tender->description, 50) }}</div>
                            </td>
                            <td>
                                <div>{{ $tender->category }}</div>
                                <div class="text-muted small">{{ $tender->sub_category }}</div>
                            </td>
                            <td>₹{{ number_format($tender->tender_value, 2) }}</td>
                            <td>
                                <div>{{ $tender->end_date->format('d M Y') }}</div>
                                @if($tender->end_date->isPast())
                                    <span class="badge rounded-pill bg-danger">Expired</span>
                                @else
                                    <span class="badge rounded-pill bg-success">Active</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('tenders.edit', $tender->id) }}"
                                       class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <form action="{{ route('tenders.destroy', $tender->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this tender?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                                    No tenders found
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full -->


    </div>
    <!-- END Page Content -->
@endsection



{{--@extends('layouts.master')--}}

{{--@section('content')--}}
{{--    <div class="container py-4">--}}
{{--        <div class="d-flex justify-content-between align-items-center mb-4">--}}
{{--            <h1 class="display-6">Tenders</h1>--}}
{{--            <a href="{{ route('tenders.create') }}" class="btn btn-primary">--}}
{{--                <i class="bi bi-plus-lg"></i> Post New Tender--}}
{{--            </a>--}}
{{--        </div>--}}

{{--        @if(session('success'))--}}
{{--            <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                {{ session('success') }}--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <div class="card shadow-sm">--}}
{{--            <div class="card-body">--}}
{{--                <div class="table-responsive">--}}
{{--                    <table class="table table-striped table-hover">--}}
{{--                        <thead class="table-light">--}}
{{--                        <tr>--}}
{{--                            <th>Title</th>--}}
{{--                            <th>Category</th>--}}
{{--                            <th>Value</th>--}}
{{--                            <th>End Date</th>--}}
{{--                            <th width="200">Actions</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @forelse($tenders as $tender)--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <div class="fw-bold">{{ $tender->title }}</div>--}}
{{--                                    <div class="text-muted small">{{ Str::limit($tender->description, 50) }}</div>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <div>{{ $tender->category }}</div>--}}
{{--                                    <div class="text-muted small">{{ $tender->sub_category }}</div>--}}
{{--                                </td>--}}
{{--                                <td>₹{{ number_format($tender->tender_value, 2) }}</td>--}}
{{--                                <td>--}}
{{--                                    <div>{{ $tender->end_date->format('d M Y') }}</div>--}}
{{--                                    @if($tender->end_date->isPast())--}}
{{--                                        <span class="badge rounded-pill bg-danger">Expired</span>--}}
{{--                                    @else--}}
{{--                                        <span class="badge rounded-pill bg-success">Active</span>--}}
{{--                                    @endif--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <div class="d-flex gap-2">--}}
{{--                                        <a href="{{ route('tenders.edit', $tender->id) }}"--}}
{{--                                           class="btn btn-sm btn-outline-primary">--}}
{{--                                            <i class="bi bi-pencil-square"></i> Edit--}}
{{--                                        </a>--}}
{{--                                        <form action="{{ route('tenders.destroy', $tender->id) }}"--}}
{{--                                              method="POST"--}}
{{--                                              onsubmit="return confirm('Are you sure you want to delete this tender?');">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button type="submit" class="btn btn-sm btn-outline-danger">--}}
{{--                                                <i class="bi bi-trash"></i> Delete--}}
{{--                                            </button>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @empty--}}
{{--                            <tr>--}}
{{--                                <td colspan="5" class="text-center py-4">--}}
{{--                                    <div class="text-muted">--}}
{{--                                        <i class="bi bi-inbox fs-1 d-block mb-2"></i>--}}
{{--                                        No tenders found--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforelse--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="d-flex justify-content-center mt-4">--}}
{{--            {!! $tenders->links() !!}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
