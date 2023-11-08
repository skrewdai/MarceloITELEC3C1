<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">User Id</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp
                    @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$category->category_name}}</td>
                        <td>{{$category->user_id}}</td>
                        <td>{{$category->created_at->diffForHumans()}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</x-app-layout>