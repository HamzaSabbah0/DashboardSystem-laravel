@extends('cms._layout.app')

@section('content')
    <div class="row layout-top-spacing">
        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4> صور الغلاف</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form method="POST" action="{{route('panel.home.sliders.store')}}">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="descriptionAr">الوصف باللغة العربية</label>
                            <textarea class="form-control" id="descriptionAr" name="description_ar" rows="3" placeholder="الوصف باللغة العربة"
                                required></textarea>
                            @error('description_ar')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="descriptionEn">الوصف باللغة الانجليزية</label>
                            <textarea class="form-control" id="descriptionEn" name="description_en" rows="3"
                                placeholder="الوصف باللغة الانجليزية " required></textarea>
                            @error('description_en')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="descriptionTu">الوصف باللغة التركية</label>
                            <textarea class="form-control" id="descriptionTu" name="description_tu" rows="3"
                                placeholder="الوصف باللغة التركية" required></textarea>
                            @error('description_tu')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="descriptionFr">الوصف باللغة الفرنسية</label>
                            <textarea class="form-control" id="descriptionFr" name="description_fr" rows="3"
                                placeholder="الوصف باللغة الفرنسية" required></textarea>
                            @error('description_fr')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="photo">صورة الغلاف</label>
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
                                        accept="image/png,image/jpg,image/jpeg" required>
                                    {{-- <input type="hidden" name="MAX_FILE_SIZE" value="10485760" /> --}}
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                                <div class="custom-file-container__image-preview"></div>
                            </div>
                        </div>
                        <input type="submit" class="mt-4 mb-4 btn btn-primary" value="حفظ">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            let optionsAr = {
                placeholder: 'اكتب هنا...',
                tabsize: 2,
                height: 200,
                lang: 'ar-AR',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['codeview', 'help']]
                ]
            };
            let optionsEn = {
                placeholder: 'اكتب هنا...',
                tabsize: 2,
                height: 200,
                lang: 'en-US',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['codeview', 'help']]
                ]
            };
            $('#descriptionAr').summernote(optionsAr);
            $('#descriptionEn').summernote(optionsEn);
            $('#descriptionFr').summernote(optionsEn);
            $('#descriptionTu').summernote(optionsEn);

            new FileUploadWithPreview('myFirstImage');
        });
    </script>
@endpush
