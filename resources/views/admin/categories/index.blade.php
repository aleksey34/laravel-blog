@extends("admin.layouts.app_admin")

@section("content")

    @component("admin.components.breadclumb")

        @slot("title")  Список категорий  @endslot
        @slot("parent")  Главная @endslot
        @slot("active")  Категории @endslot

    @endcomponent

    <hr/>
    <a href="{{route("admin.category.create")}}" class="btn btn-primary float-right">
        <i class="fa fa-plus-square-o">Создать Категорию</i>
    </a>

    <table class="table table-striped">

        <thead>
        <th>Наименование</th>
        <th>Публикация</th>
        <th class="text-right">Действие</th>
        </thead>

        <tbody>
        @forelse($categories as $category)

            <tr>
                <td>{{$category->title}}</td>
                <td>{{$category->published}}</td>
                <td>
                    <a href="{{route("admin.categories.edit" , ["id"=>$category->id])}}">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
                <td></td>
                <td></td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
            </tr>
        @endforelse
        </tbody>

        <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                    {{$categories->links()}}
                    </ul>
                </td>
            </tr>
        </tfoot>

    </table>



@endsection