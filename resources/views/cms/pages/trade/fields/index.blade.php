@extends('cms._layout.app')

@section('content')
    <div id="tableHover" class="col-lg-12 col-12 layout-spacing layout-top-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>اداراة مجالات العقارات</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mb-4">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>الوصف</th>
                                <th class="text-center">الأدوات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fields as $field)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $field->title_ar }}</td>
                                    <td>{{ \Str::words(strip_tags($field->description_ar), 50, '...') }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a href="{{ route('panel.trade.fields.edit', $field->id) }}"
                                                class="btn btn-outline-primary">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{ route('panel.trade.fields.show', $field->id) }}"
                                                class="btn btn-outline-primary">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                            <form action="{{ route('panel.trade.fields.destroy', $field->id) }}"
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
                        {{ $fields->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
