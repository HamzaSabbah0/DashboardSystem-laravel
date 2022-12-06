@extends('cms._layout.app')

@section('content')
    <div class="row layout-top-spacing">
        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>الإعدادات</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form action="{{ route('panel.settings.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="email" class="form-label">البريد الإلكتروني</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="البريد الإلكتروني"
                                    value="{{ old('email', $settings ? $settings->email : '') }}" required>
                            </div>
                            @error('email')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group mb-4 col">
                                <label for="phone" class="form-label">رقم التواصل</label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="رقم التواصل" value="{{ old('phone', $settings ? $settings->phone : '') }}"
                                    required>
                            </div>
                            @error('phone')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="facebook" class="form-label">فيسبوك</label>
                                <input type="text" class="form-control" name="facebook_link" id="facebook"
                                    placeholder="رابط فيسبوك"
                                    value="{{ old('facebook_link', $settings ? $settings->facebook_link : '') }}" required>
                            </div>
                            @error('facebook_link')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group mb-4 col">
                                <label for="twitter" class="form-label">تويتر</label>
                                <input type="text" class="form-control" name="twitter_link" id="twitter"
                                    placeholder="رابط تويتر"
                                    value="{{ old('twitter_link', $settings ? $settings->twitter_link : '') }}" required>
                            </div>
                            @error('twitter_link')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="instagram" class="form-label">انستقرام</label>
                                <input type="text" class="form-control" name="instagram_link" id="instagram"
                                    placeholder="رابط انستقرام"
                                    value="{{ old('instagram_link', $settings ? $settings->instagram_link : '') }}"
                                    required>
                            </div>
                            @error('instagram_link')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group mb-4 col">
                                <label for="whatsapp" class="form-label">واتساب</label>
                                <input type="text" class="form-control" name="whatsapp_number" id="whatsapp"
                                    placeholder="رقم واتساب"
                                    value="{{ old('whatsapp_number', $settings ? $settings->whatsapp_number : '') }}"
                                    required>
                            </div>
                            @error('whatsapp_number')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="address" class="form-label">العنوان</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="العنوان" value="{{ old('address', $settings ? $settings->address : '') }}"
                                    required>
                            </div>
                            @error('address')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="logo_photo">صورة الشعار</label>
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <label>
                                    <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                        title="Clear Image">
                                        <i class="fa-solid fa-xmark"></i> حذف الصورة
                                    </a>
                                </label>
                                @error('logo_photo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="logo_photo"
                                        class="custom-file-container__custom-file__custom-file-input"
                                        accept="image/png,image/jpg,image/jpeg,.svg" id="logo_photo">
                                    {{-- <input type="hidden" name="MAX_FILE_SIZE" value="10485760" /> --}}
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                                <div class="custom-file-container__image-preview"></div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    @if ($settings && $settings->logo_photo)
        <script>
            new FileUploadWithPreview('myFirstImage', {
                presetFiles: ["{{ $settings->logo_photo }}"]
            });
        </script>
    @else
        <script>
            new FileUploadWithPreview('myFirstImage');
        </script>
    @endif
@endpush
