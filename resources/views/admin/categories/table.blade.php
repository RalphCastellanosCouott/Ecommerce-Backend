@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Categories List</h3>
            @if (session('success'))
                <div class="alert alert-success text-white">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger text-white">
                    {{ session('error') }}
                </div>
            @endif
            <a type="button" class="btn btn-success" href="{{ route('admin.categories.create') }}">Add New Category</a>
            <table class="table align-items-center mb-0">
                <thead>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="align-middle text-center">
                                {{ $category->id }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $category->name }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $category->created_at }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $category->updated_at }}
                            </td>
                            <td class="align-middle text-center">
                                <form action="{{ route('admin.categories.delete', $category->id) }}" method="POST"
                                    onsubmit="return confirm('¿Estás seguro de eliminar esta marca?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger p-0 m-0"
                                        style="font-size: 14px;">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>
@endsection
