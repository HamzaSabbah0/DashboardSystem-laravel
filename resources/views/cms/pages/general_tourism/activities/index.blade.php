@extends('cms._layout.app')

@section('content')

    <div id="tableHover" class="col-lg-12 col-12 layout-spacing layout-top-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>إدارة الأنشطة</h4>
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
                                <th>العنوان</th>
                                <th>الوصف</th>
                                <th class="text-center">الأدوات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activities as $activity)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <img src= {{$activity->photo}} alt='new' width='80'>
                                    </td>
                                    <td>{{ $activity->title_ar }}</td>
                                    <td>{{ \Str::words(strip_tags($activity->description_ar), 50, '...') }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a href="{{ route('panel.general.tourism.activities.edit', $activity->id) }}"
                                                class="btn btn-outline-primary">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{ route('panel.general.tourism.activities.show', $activity->id) }}"
                                                class="btn btn-outline-primary">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                            <form action="{{ route('panel.general.tourism.activities.destroy', $activity->id) }}"
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
                        {{ $activities->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
