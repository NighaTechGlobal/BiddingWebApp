@extends('layouts.backend')


@section('content')

    <div class="content mb-4">
        <div class="row">
            <div class="col-md-12 col-xl-12 col-lg-12">

                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Post Tender</h3>
                        <div class="block-options">
{{--                            <button type="button" class="btn-block-option">--}}
{{--                                <i class="si si-settings"></i>--}}
{{--                            </button>--}}
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row justify-content-center py-sm-3 py-md-5">
                            <div class="col-sm-10 col-md-8">


                                <form action="{{ route('tenders.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- Category -->
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Category</label>
                                        <select name="category" id="category" class="form-select">
                                            <option value="">Select Category</option>
                                            <option value="category1">Category1</option>
                                            <option value="category2">Category2</option>
                                            <option value="category3">Category3</option>
                                        </select>
                                        @error('category')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Sub Category -->
                                    <div class="mb-3">
                                        <label for="sub_category" class="form-label">Sub Category</label>
                                        <select name="sub_category" id="sub_category" class="form-select">
                                            <option value="">Select Sub Category</option>
                                            <option value="subcategory1">SubCategory1</option>
                                            <option value="subcategory2">SubCategory2</option>
                                            <option value="subcategory3">SubCategory3</option>
                                        </select>
                                        @error('sub_category')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Tender Title -->
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Tender Title</label>
                                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                                        @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Address -->
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" name="address" id="address" class="form-control"
                                               value="{{ old('address') }}">
                                        @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Contact Number -->
                                    <div class="mb-3">
                                        <label for="contact_number" class="form-label">Contact Number</label>
                                        <input type="text" name="contact_number" id="contact_number" class="form-control"
                                               value="{{ old('contact_number') }}">
                                        @error('contact_number')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Tender Description -->
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Tender Description</label>
                                        <textarea name="description" id="description"
                                                  class="form-control">{{ old('description') }}</textarea>
                                        @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- BOQ File -->
                                    <div class="mb-3">
                                        <label for="boq" class="form-label">BOQ</label>
                                        <input type="file" name="boq" id="boq" class="form-control">
                                        @error('boq')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Tender Value -->
                                    <div class="mb-3">
                                        <label for="tender_value" class="form-label">Tender Value</label>
                                        <input type="number" name="tender_value" id="tender_value" class="form-control"
                                               value="{{ old('tender_value') }}">
                                        @error('tender_value')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- End Date -->
                                    <div class="mb-3">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" name="end_date" id="end_date" class="form-control"
                                               value="{{ old('end_date') }}">
                                        @error('end_date')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Required Documents -->
                                    <div class="mb-3">
                                        <label class="form-label">Required Documents</label>
                                        <div class="form-check">
                                            <input type="checkbox" name="required_documents[]" value="GST_CERTIFICATES"
                                                   class="form-check-input">
                                            <label class="form-check-label">GST Certificates</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="required_documents[]" value="PAN_CARD"
                                                   class="form-check-input">
                                            <label class="form-check-label">PAN Card</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="required_documents[]" value="FIRM_CERTIFICATES"
                                                   class="form-check-input">
                                            <label class="form-check-label">Firm Certificates</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="required_documents[]" value="EXPERIENCE_CERTIFICATES"
                                                   class="form-check-input">
                                            <label class="form-check-label">Experience Certificates</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="required_documents[]" value="TURNOVER_CERTIFICATES"
                                                   class="form-check-input">
                                            <label class="form-check-label">Turnover Certificates</label>
                                        </div>
                                        @error('required_documents')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Work Photos -->
                                    <div class="mb-3">
                                        <label for="work_photos" class="form-label">Work Photos</label>
                                        <input type="file" name="work_photos" id="work_photos" class="form-control">
                                        @error('work_photos')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Submit Button -->
                                    <div>
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
{{--                        <button type="submit" class="btn btn-sm btn-alt-primary">--}}
{{--                            <i class="fa fa-check opacity-50 me-1"></i> Submit--}}
{{--                        </button>--}}
{{--                        <button type="reset" class="btn btn-sm btn-alt-secondary">--}}
{{--                            <i class="fa fa-sync-alt opacity-50 me-1"></i> Reset--}}
{{--                        </button>--}}
                    </div>
                </div>


{{--                <h1 class="text-2xl font-bold mb-4">Post Tender</h1>--}}

{{--                <form action="{{ route('tenders.store') }}" method="POST" enctype="multipart/form-data">--}}
{{--                @csrf--}}

{{--                <!-- Category -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="category" class="form-label">Category</label>--}}
{{--                        <select name="category" id="category" class="form-select">--}}
{{--                            <option value="">Select Category</option>--}}
{{--                            <option value="category1">Category1</option>--}}
{{--                            <option value="category2">Category2</option>--}}
{{--                            <option value="category3">Category3</option>--}}
{{--                        </select>--}}
{{--                        @error('category')--}}
{{--                        <div class="text-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Sub Category -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="sub_category" class="form-label">Sub Category</label>--}}
{{--                        <select name="sub_category" id="sub_category" class="form-select">--}}
{{--                            <option value="">Select Sub Category</option>--}}
{{--                            <option value="subcategory1">SubCategory1</option>--}}
{{--                            <option value="subcategory2">SubCategory2</option>--}}
{{--                            <option value="subcategory3">SubCategory3</option>--}}
{{--                        </select>--}}
{{--                        @error('sub_category')--}}
{{--                        <div class="text-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Tender Title -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="title" class="form-label">Tender Title</label>--}}
{{--                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">--}}
{{--                        @error('title')--}}
{{--                        <div class="text-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Address -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="address" class="form-label">Address</label>--}}
{{--                        <input type="text" name="address" id="address" class="form-control"--}}
{{--                               value="{{ old('address') }}">--}}
{{--                        @error('address')--}}
{{--                        <div class="text-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Contact Number -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="contact_number" class="form-label">Contact Number</label>--}}
{{--                        <input type="text" name="contact_number" id="contact_number" class="form-control"--}}
{{--                               value="{{ old('contact_number') }}">--}}
{{--                        @error('contact_number')--}}
{{--                        <div class="text-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Email -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="email" class="form-label">Email</label>--}}
{{--                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">--}}
{{--                        @error('email')--}}
{{--                        <div class="text-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Tender Description -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="description" class="form-label">Tender Description</label>--}}
{{--                        <textarea name="description" id="description"--}}
{{--                                  class="form-control">{{ old('description') }}</textarea>--}}
{{--                        @error('description')--}}
{{--                        <div class="text-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- BOQ File -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="boq" class="form-label">BOQ</label>--}}
{{--                        <input type="file" name="boq" id="boq" class="form-control">--}}
{{--                        @error('boq')--}}
{{--                        <div class="text-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Tender Value -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="tender_value" class="form-label">Tender Value</label>--}}
{{--                        <input type="number" name="tender_value" id="tender_value" class="form-control"--}}
{{--                               value="{{ old('tender_value') }}">--}}
{{--                        @error('tender_value')--}}
{{--                        <div class="text-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- End Date -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="end_date" class="form-label">End Date</label>--}}
{{--                        <input type="date" name="end_date" id="end_date" class="form-control"--}}
{{--                               value="{{ old('end_date') }}">--}}
{{--                        @error('end_date')--}}
{{--                        <div class="text-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Required Documents -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <label class="form-label">Required Documents</label>--}}
{{--                        <div class="form-check">--}}
{{--                            <input type="checkbox" name="required_documents[]" value="GST_CERTIFICATES"--}}
{{--                                   class="form-check-input">--}}
{{--                            <label class="form-check-label">GST Certificates</label>--}}
{{--                        </div>--}}
{{--                        <div class="form-check">--}}
{{--                            <input type="checkbox" name="required_documents[]" value="PAN_CARD"--}}
{{--                                   class="form-check-input">--}}
{{--                            <label class="form-check-label">PAN Card</label>--}}
{{--                        </div>--}}
{{--                        <div class="form-check">--}}
{{--                            <input type="checkbox" name="required_documents[]" value="FIRM_CERTIFICATES"--}}
{{--                                   class="form-check-input">--}}
{{--                            <label class="form-check-label">Firm Certificates</label>--}}
{{--                        </div>--}}
{{--                        <div class="form-check">--}}
{{--                            <input type="checkbox" name="required_documents[]" value="EXPERIENCE_CERTIFICATES"--}}
{{--                                   class="form-check-input">--}}
{{--                            <label class="form-check-label">Experience Certificates</label>--}}
{{--                        </div>--}}
{{--                        <div class="form-check">--}}
{{--                            <input type="checkbox" name="required_documents[]" value="TURNOVER_CERTIFICATES"--}}
{{--                                   class="form-check-input">--}}
{{--                            <label class="form-check-label">Turnover Certificates</label>--}}
{{--                        </div>--}}
{{--                        @error('required_documents')--}}
{{--                        <div class="text-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Work Photos -->--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="work_photos" class="form-label">Work Photos</label>--}}
{{--                        <input type="file" name="work_photos" id="work_photos" class="form-control">--}}
{{--                        @error('work_photos')--}}
{{--                        <div class="text-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Submit Button -->--}}
{{--                    <div>--}}
{{--                        <button type="submit" class="btn btn-primary">Upload</button>--}}
{{--                    </div>--}}
{{--                </form>--}}

            </div>
        </div>
    </div>











@endsection



