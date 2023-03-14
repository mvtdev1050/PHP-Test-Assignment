@extends('layouts.app', ['title' => 'books'])

@section('content')

<div class="container mx-auto mt-10 mb-10">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <a href="{{ route('book.create') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Create book</a>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Book Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Release Date
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $book['id']}}
                    </th>
                    <td class="px-6 py-4">
                        {{$book['title']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$book['release_date']}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection