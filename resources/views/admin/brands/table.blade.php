@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Brands List</h3>
            <a type="button" class="btn btn-success" href="{{ route('admin.brands.create') }}">Add New Brand</a>
            <table class="table align-items-center mb-0">
                <thead>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <td class="align-middle text-center">
                                {{ $brand->id }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $brand->name }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $brand->created_at }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $brand->updated_at }}
                            </td>
                            <td>
                                <a style="color: red" href="#">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $brands->links() }}
        </div>
    </div>
@endsection