@extends('layouts.backend')


@section('content')

    <div class="content mb-4">
        <div class="row">
            <div class="col-md-12 col-xl-12 col-lg-12">

                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Edit Tender Post</h3>
                        <div class="block-options">
                            {{--                            <button type="button" class="btn-block-option">--}}
                            {{--                                <i class="si si-settings"></i>--}}
                            {{--                            </button>--}}
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row justify-content-center py-sm-3 py-md-5">
                            <div class="col-sm-10 col-md-8">
                                <!-- Start : Form-->
                                <form action="{{ route('tenders.update', $tender->id) }}" method="POST"
                                      enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Category -->
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Category</label>
                                        <select name="category" id="category" class="form-select">
                                            <option value="">Select Category</option>

                                            <option @if($tender->category == 'category1') selected @endif  value="category1">Category1</option>
                                            <option @if($tender->category == 'category2') selected @endif value="category2">Category2</option>
                                            <option @if($tender->category == 'category3') selected  @endif value="category3">Category3</option>

{{--                                            <option value="{{ $tender->category }}"--}}
{{--                                                    >{{ $tender->category }}</option>--}}
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

                                            <option @if($tender->sub_category == 'subcategory1') selected @endif value="subcategory1">SubCategory1</option>
                                            <option @if($tender->sub_category == 'subcategory2') selected @endif value="subcategory2">SubCategory2</option>
                                            <option @if($tender->sub_category == 'subcategory3') selected @endif value="subcategory3">SubCategory3</option>

{{--                                            <option  value="{{ $tender->sub_category }}"--}}
{{--                                                    selected>{{ $tender->sub_category }}</option>--}}
                                        </select>
                                        @error('sub_category')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Tender Title -->
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Tender Title</label>
                                        <input type="text" name="title" id="title" class="form-control"
                                               value="{{ old('title', $tender->title) }}">
                                        @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Address -->
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" name="address" id="address" class="form-control"
                                               value="{{ old('address', $tender->address) }}">
                                        @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Contact Number -->
                                    <div class="mb-3">
                                        <label for="contact_number" class="form-label">Contact Number</label>
                                        <input type="text" name="contact_number" id="contact_number"
                                               class="form-control"
                                               value="{{ old('contact_number', $tender->contact_number) }}">
                                        @error('contact_number')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                               value="{{ old('email', $tender->email) }}">
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Tender Description -->
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Tender Description</label>
                                        <textarea name="description" id="description"
                                                  class="form-control">{{ old('description', $tender->description) }}</textarea>
                                        @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- BOQ -->
                                    <div class="mb-3">
                                        <label for="boq" class="form-label">BOQ</label>
                                        @if($tender->boq)
                                            <div class="mb-2">
                                                <a href="{{ Storage::url($tender->boq) }}" target="_blank"
                                                   class="text-primary">View Current BOQ</a>
                                            </div>
                                        @endif
                                        <input type="file" name="boq" id="boq" class="form-control">
                                        @error('boq')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Tender Value -->
                                    <div class="mb-3">
                                        <label for="tender_value" class="form-label">Tender Value</label>
                                        <input type="number" name="tender_value" id="tender_value" class="form-control"
                                               value="{{ old('tender_value', $tender->tender_value) }}">
                                        @error('tender_value')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- End Date -->
                                    <div class="mb-3">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" name="end_date" id="end_date" class="form-control"
                                               value="{{ old('end_date', $tender->end_date->format('Y-m-d')) }}">
                                        @error('end_date')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Required Documents -->
                                    <div class="mb-3">
                                        <label class="form-label">Required Documents</label>
                                        <div class="form-check">
                                            <input type="checkbox" name="required_documents[]" value="GST_CERTIFICATES"
                                                   class="form-check-input" {{ in_array('GST_CERTIFICATES', $tender->required_documents) ? 'checked' : '' }}>
                                            <label class="form-check-label">GST Certificates</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="required_documents[]" value="PAN_CARD"
                                                   class="form-check-input" {{ in_array('PAN_CARD', $tender->required_documents) ? 'checked' : '' }}>
                                            <label class="form-check-label">PAN Card</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="required_documents[]" value="FIRM_CERTIFICATES"
                                                   class="form-check-input" {{ in_array('FIRM_CERTIFICATES', $tender->required_documents) ? 'checked' : '' }}>
                                            <label class="form-check-label">Firm Certificates</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="required_documents[]"
                                                   value="EXPERIENCE_CERTIFICATES"
                                                   class="form-check-input" {{ in_array('EXPERIENCE_CERTIFICATES', $tender->required_documents) ? 'checked' : '' }}>
                                            <label class="form-check-label">Experience Certificates</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="required_documents[]"
                                                   value="TURNOVER_CERTIFICATES"
                                                   class="form-check-input" {{ in_array('TURNOVER_CERTIFICATES', $tender->required_documents) ? 'checked' : '' }}>
                                            <label class="form-check-label">Turnover Certificates</label>
                                        </div>
                                        @error('required_documents')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Work Photos -->
                                    <div class="mb-3">
                                        <label for="work_photos" class="form-label">Work Photos</label>
                                        @if($tender->work_photos)
                                            <div class="mb-2">
                                                <img src="{{ Storage::url($tender->work_photos) }}" alt="Work Photos"
                                                     class="img-fluid w-25">
                                            </div>
                                        @endif
                                        <input type="file" name="work_photos" id="work_photos" class="form-control">
                                        @error('work_photos')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Submit and Cancel buttons -->
                                    <div class="d-flex space-x-2">
                                        <button type="submit" class="btn btn-primary">Update Tender</button>
                                        <a href="{{ route('tenders.index') }}" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </form>
                                <!-- End : Form-->
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


            </div>
        </div>
    </div>

@endsection



