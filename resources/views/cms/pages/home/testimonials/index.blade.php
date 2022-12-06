@extends('cms._layout.app')

@section('content')
    <div class="row layout-top-spacing">
        <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>إدارة الآراء</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الصورة</th>
                                    <th>الاسم</th>
                                    <th>المهنة</th>
                                    <th>العنوان</th>
                                    <th>الوصف</th>
                                    <th class="text-center">الأدوات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td><img src={{ $testimonial->photo }} alt='new' width='70' height='70'>
                                        </td>
                                        <td>{{ $testimonial->name_ar }}</td>
                                        <td>{{ $testimonial->title_ar }}</td>
                                        <td>{{ $testimonial->career_title_ar }}</td>
                                        <td>{!! \Str::words(strip_tags($testimonial->description_ar), 50, '...') !!}</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <a href="{{ route('panel.home.testimonials.edit', $testimonial->id) }}"
                                                    class="btn btn-outline-primary">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{ route('panel.home.testimonials.show', $testimonial->id) }}"
                                                    class="btn btn-outline-primary">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <form
                                                    action="{{ route('panel.home.testimonials.destroy', $testimonial->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-primary rounded-0"><i
                                                            class="fa-regular fa-trash-can"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            {{ $testimonials->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
