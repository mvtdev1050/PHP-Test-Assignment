@extends('layouts.app', ['title' => 'Autdors'])

@section('content')

<div class="container mx-auto mt-10 mb-10">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @if(count($author['books']) == 0)
        <form class="mt-8 space-y-6" action="{{ route('author.destroy', $author['id']) }}" method="POST">
            @method('delete')
            @csrf
            <button type="submit" class="group relative flex w-full justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Delete Author
            </button>
        </form>
        @endif
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <tbody>
                <tr>
                    <td scope="col" class="px-6 py-3">
                        Autdor Id
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $author['id']}}
                    </td>
                </tr>
                <tr>
                    <td scope="col" class="px-6 py-3">
                        First Name
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $author['first_name']}}
                    </td>
                </tr>
                <tr>
                    <td scope="col" class="px-6 py-3">
                        Last Name
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $author['last_name']}}
                    </td>
                </tr>
                <tr>
                    <td scope="col" class="px-6 py-3">
                        Books
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ count($author['books']) }}
                    </td>
                </tr>
                <tr>
                <td scope="col" class="px-6 py-3"  colspan="2">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Author Id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        No. of pages
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($author['books'] as $book)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $book['id']}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$book['title']}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$book['description']}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$book['number_of_pages']}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <form class="mt-8 space-y-6" action="{{ route('book.destroy', $book['id']) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="group relative flex w-full justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                Delete Book
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                @endforelse

                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection