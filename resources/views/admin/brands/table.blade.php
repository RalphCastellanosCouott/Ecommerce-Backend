@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Brands List</h3>
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
                            <td class="align-middle text-center">
                                <form action="{{ route('admin.brands.delete', $brand->id) }}" method="POST"
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
            {{ $brands->links() }}
        </div>
    </div>
@endsection
