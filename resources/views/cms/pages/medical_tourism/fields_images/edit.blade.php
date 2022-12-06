@extends('cms._layout.app')

@section('content')
    <div class="row layout-top-spacing">
        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>تعديل صور المجال</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form method="POST" action="{{ route('panel.medical.tourism.fields-images.update', $elevenFieldsImage->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-4">
                            <label>Trade</label>
                            <select class="form-select  form-select-lg" name="eleven_field_id" required>
                                <option value="{{ $elevenFieldsImage->eleven_field->id }}" selected>
                                    {{ $elevenFieldsImage->eleven_field->title_ar }}</option>
                                @foreach ($elevenFields as $elevenField)
                                    @if ($elevenField->id != $elevenFieldsImage->eleven_field->id)
                                        <option value="{{ $elevenField->id }}">{{ $elevenField->title_ar }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="photo">صورة المجال </label>
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <label>
                                    <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                        title="Clear Image">
                                        <i class="fa-solid fa-xmark"></i> حذف الصورة
                                    </a>
                                </label>
                                @error('photo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="photo"
                                        class="custom-file-container__custom-file__custom-file-input"
                                        accept="image/png,image/jpg,image/jpeg">
                                    {{-- <input type="hidden" name="MAX_FILE_SIZE" value="10485760" /> --}}
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                                <div class="custom-file-container__image-preview"></div>
                            </div>
                        </div>
                        <input type="submit" class="mt-4 mb-4 btn btn-primary" value="تعديل">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            new FileUploadWithPreview('myFirstImage', {
                presetFiles: ["{{ $elevenFieldsImage->photo }}"]
            });
        });
    </script>
@endpush
