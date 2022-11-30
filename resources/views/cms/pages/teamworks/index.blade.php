@extends('cms._layout.app')

@section('content')
    <div id="tableHover" class="col-lg-12 col-12 layout-spacing layout-top-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>إدارة فريق العمل</h4>
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
                                <th class="text-center">الأدوات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teamWorks as $teamWork)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td><img class="img-circle img-bordered-sm" src="{{ Storage::url($teamWork->photo) }}"
                                            width="80" alt="Team Work Image"></td>
                                    <td>{{ $teamWork->title_ar }}</td>
                                    <td>{{ $teamWork->career_title_ar }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a href="{{ route('panel.teamworks.edit', $teamWork->id) }}"
                                                class="btn btn-outline-primary">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </a>
                                            <form action="{{ route('panel.teamworks.destroy', $teamWork->id) }}"
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
                        {{ $teamWorks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
