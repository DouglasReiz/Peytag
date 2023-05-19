@extends('template.index')
@section('title', 'Usuários')
@section('body')

<div class="text-gray-600 text-5xl pb-4 text-center">
    <h1>Listagem de Usuários</h1>
</div>

<div class="grid justify-items-center">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3" scope="col">ID</th>
                    <th class="px-6 py-3" scope="col">Nome</th>
                    <th class="px-6 py-3" scope="col">Email</th>
                    <th class="px-6 py-3" scope="col">Telefone</th>
                    <th class="px-6 py-3" scope="col">Is admin</th>
                    <th class="px-6 py-3" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr onclick="window.location='#'" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <th class="px-6 py-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" scope="row">{{ $user->id }}</th>
                    <td class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $user->name }}</td>
                    <td class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $user->email }}</td>
                    <td class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $user->phone }}</td>
                    <td class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $user->is_admin }}</td>
                    <td class="btn-alert mr-1">
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection