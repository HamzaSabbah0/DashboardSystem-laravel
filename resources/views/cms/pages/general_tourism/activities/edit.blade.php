@extends('cms._layout.app')

@section('content')
    <div class="col-lg-12 col-12 layout-spacing layout-top-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>تعديل نشاط</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form action="{{ route('eleven-activities.update', $activity->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-row mb-4 col">
                            <div class="form-group">
                                <label for="title-ar">اسم النشاط باللغة العربية</label>
                                <input type="text" class="form-control" name="title_ar" id="title-ar"
                                    placeholder="اسم النشاط" value="{{ old('title_ar' , $activity->title_ar) }}" required>
                                @error('title_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row mb-4 col">
                            <div class="form-group">
                                <label for="title-en">اسم النشاط باللغة الإنجليزية</label>
                                <input type="text" class="form-control" name="title_en" id="title-en"
                                    placeholder="Activity Name" value="{{ old('title_en' , $activity->title_en) }}" required>
                                @error('title_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-row mb-4 col">
                            <div class="form-group">
                                <label for="title-tu">اسم النشاط باللغة التركية</label>
                                <input type="text" class="form-control" name="title_tu" id="title-tu"
                                    placeholder="Etkinlik adı" value="{{ old('title_tu' , $activity->title_tu) }}" required>
                                @error('title_tu')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row mb-4 col">
                            <div class="form-group">
                                <label for="title-fr">اسم النشاط باللغة الفرنسية</label>
                                <input type="text" class="form-control" name="title_fr" id="title-fr"
                                    placeholder="Nom de l'activité" value="{{ old('title_fr' , $activity->title_fr) }}" required>
                                @error('title_fr')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="description-ar">الوصف باللغة العربية</label>
                        <textarea class="form-control" name="description_ar" id="description-ar" rows="3" placeholder="الوصف" required>
                            {{ old('description_ar' , $activity->description_ar) }}</textarea>
                        @error('description_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="description-en">الوصف باللغة الإنجليزية</label>
                        <textarea class="form-control" name="description_en" id="description-en" rows="3" placeholder="Description"
                            required>{{ old('description_en' , $activity->description_en) }}</textarea>
                        @error('description_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="description-tu">الوصف باللغة العربية</label>
                        <textarea class="form-control" name="description_tu" id="description-tu" rows="3" placeholder="الوصف" required>
                            {{ old('description_tu' , $activity->description_tu) }}</textarea>
                        @error('description_tu')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="description-fr">الوصف باللغة الإنجليزية</label>
                        <textarea class="form-control" name="description_fr" id="description-fr" rows="3" placeholder="Description"
                            required>{{ old('description_fr' , $activity->description_fr) }}</textarea>
                        @error('description_fr')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <div class="form-group">
                            <label for="section-title">عنوان القسم</label>
                            <input type="text" class="form-control" name="section_title" id="section-title"
                                placeholder="عنوان القسم" value="{{ old('section_title' , $activity->section_title) }}" required>
                            @error('section_title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="photo" class="form-label">صورة النشاط</label>
                        <input class="form-control" type="file" accept="image/png,image/jpg,image/jpeg"
                            name="photo" id="photo">
                        @error('photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <img class="mt-3" src="{{ $activity->photo }}" alt="cover" width="300"
                            height="150" id="coverPreview">
                    </div>
                    <input type="submit" value="حفظ" class="btn btn-primary px-5">
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            let options = {
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
            $('#details').summernote(options);

            const fileInput = document.getElementById("photo");
            fileInput.addEventListener('change', function(event) {
                uploadFile(event);
            });
        });

        function uploadFile(event) {
            const file = event.target.files[0];
            let userImageAvatar = document.getElementById("coverPreview");
            userImageAvatar.file = file;
            const fileReader = new FileReader();
            fileReader.onload = (e) => {
                let fileURL = fileReader.result;
                userImageAvatar.src = fileURL;
            };
            fileReader.readAsDataURL(file);
        }
    </script>
@endpush
