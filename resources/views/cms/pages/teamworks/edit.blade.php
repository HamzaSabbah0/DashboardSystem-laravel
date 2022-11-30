@extends('cms._layout.app')

@section('content')
    <div class="row layout-top-spacing">

        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>تعديل فريق العمل</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form action="{{route('panel.teamworks.update','teamwork')}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="titleAr" class="form-label">الاسم باللغة العربية</label>
                                <input type="text" class="form-control" name="title_ar" id="titleAr"
                                    placeholder="الاسم" value="{{ old('title_ar', $teamWork ? $teamWork->title_ar : '') }}"
                                    required>
                                @error('title_ar')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4 col">
                                <label for="titleEn" class="form-label">الاسم باللغة الانجليزية</label>
                                <input type="text" class="form-control" name="title_en" id="titleEn" placeholder="name"
                                    value="{{ old('title_en', $teamWork ? $teamWork->title_en : '') }}" required>
                                @error('title_en')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="titleTu" class="form-label">الاسم باللغة التركية</label>
                                <input type="text" class="form-control" name="title_tu" id="titleTu" placeholder="İsim"
                                    value="{{ old('title_tu', $teamWork ? $teamWork->title_tu : '') }}" required>
                                @error('title_tu')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4 col">
                                <label for="titleFr" class="form-label">الاسم باللغة الفرنسية</label>
                                <input type="text" class="form-control" name="title_fr" id="titleFr"
                                    placeholder="Le nom" value="{{ old('title_fr', $teamWork ? $teamWork->title_fr : '') }}"
                                    required>
                                @error('title_fr')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="careerTitleAr" class="form-label">المهنة باللغة العربية</label>
                                <input type="text" class="form-control" name="career_title_ar" id="careerTitleAr"
                                    placeholder="المهنة"
                                    value="{{ old('career_title_ar', $teamWork ? $teamWork->career_title_ar : '') }}"
                                    required>
                                @error('career_title_ar')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4 col">
                                <label for="careerTitleEr" class="form-label">المهنة باللغة الانجليزية</label>
                                <input type="text" class="form-control" name="career_title_en" id="careerTitleEr"
                                    placeholder="career"
                                    value="{{ old('career_title_en', $teamWork ? $teamWork->career_title_en : '') }}"
                                    required>
                                @error('career_title_en')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="careerTitleTu" class="form-label">المهنة باللغة التركية</label>
                                <input type="text" class="form-control" name="career_title_tu" id="careerTitleTu"
                                    placeholder="meslek"
                                    value="{{ old('career_title_tu', $teamWork ? $teamWork->career_title_tu : '') }}"
                                    required>
                                @error('career_title_tu')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4 col">
                                <label for="careerTitleFr" class="form-label">المهنة باللغة الفرنسية</label>
                                <input type="text" class="form-control" name="career_title_fr" id="careerTitleFr"
                                    placeholder="profession"
                                    value="{{ old('career_title_fr', $teamWork ? $teamWork->career_title_fr : '') }}"
                                    required>
                                @error('career_title_fr')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="photo">الصورة الشخصية</label>
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
                        <input type="submit" class="mt-4 mb-4 btn btn-primary" value="تعديل">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        new FileUploadWithPreview('myFirstImage');
    </script>
@endpush
