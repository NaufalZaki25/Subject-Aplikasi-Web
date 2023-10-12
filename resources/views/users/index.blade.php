<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{route('user.tambah')}}" class="btn btn-outline-primary">tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{route('user.lihat')}}" class="btn btn-danger">See</a>
                                <a href="{{route('user.edit')}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('user.hapus')}}" class="btn btn-success">Delete</a>
                                </div>
                                </td>
                            </tr>
                        @endforeach
                            
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
