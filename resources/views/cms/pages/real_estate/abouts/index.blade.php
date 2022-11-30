@extends('cms._layout.app')

@section('content')
    <div class="row layout-top-spacing">

        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>النصوص</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form action="{{ route('about') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="title-ar" class="form-label">العنوان باللغة العربية</label>
                                <input type="text" class="form-control" name="title_ar" id="title-ar"
                                    placeholder="العنوان باللغة العربية"
                                    value="{{ old('title_ar', $about ? $about->title_ar : '') }}" required>
                                @error('title_ar')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4 col">
                                <label for="title-en" class="form-label">العنوان باللغة الانجليزية</label>
                                <input type="text" class="form-control" name="title_en" id="title-en"
                                    placeholder="العنوان باللغة الانجليزية"
                                    value="{{ old('title_en', $about ? $about->title_en : '') }}" required>
                                @error('title_en')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="title-tu" class="form-label">العنوان باللغة التركية</label>
                                <input type="text" class="form-control" name="title_tu" id="title-tu"
                                    placeholder="العنوان باللغة التركية"
                                    value="{{ old('title_tu', $about ? $about->title_tu : '') }}" required>
                                @error('title_tu')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4 col">
                                <label for="title-fr" class="form-label">العنوان باللغة الفرنسية</label>
                                <input type="text" class="form-control" name="title_fr" id="title-fr"
                                    placeholder="العنوان باللغة الفرنسية"
                                    value="{{ old('title_fr', $about ? $about->title_fr : '') }}" required>
                                @error('title_fr')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="description-ar">الوصف باللغة العربية</label>
                            <textarea class="form-control" id="description-ar" name="description_ar" rows="3"
                                placeholder="الوصف باللغة العربة" required>{{ $about ? $about->description_ar : '' }}</textarea>
                            @error('description_ar')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="description-en">الوصف باللغة الانجليزية</label>
                            <textarea class="form-control" id="description-en" name="description_en" rows="3"
                                placeholder="الوصف باللغة الانجليزية " required>{{ $about ? $about->description_en : '' }}</textarea>
                            @error('description_en')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="description-tu">الوصف باللغة التركية</label>
                            <textarea class="form-control" id="description-tu" name="description_tu" rows="3"
                                placeholder="الوصف باللغة التركية" required>{{ $about ? $about->description_tu : '' }}</textarea>
                            @error('description_tu')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="description-fr">الوصف باللغة الفرنسية</label>
                            <textarea class="form-control" id="description-fr" name="description_fr" rows="3"
                                placeholder="الوصف باللغة الفرنسية" required>{{ $about ? $about->description_fr : '' }}</textarea>
                            @error('description_fr')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" class="mt-4 mb-4 btn btn-primary" value="حفظ">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
