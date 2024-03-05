@extends('layouts.main')

@section('navbar')
    @php
        $no = 1;
    @endphp

    <head>
        <title>Table || Page</title>
    </head>

    <body>
        <a href="/input"><button class="btn btn-outline btn-success mb-5 ml-3">Add Membership</button></a>
        {{-- Table Start --}}
        <div class="overflow-x-auto">
            <table class="table table-zebra">
                <!-- head -->
                <thead class="text-lg">
                    <tr class="text-white">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Gym ID</th>
                        <th>Membership</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    @foreach ($person as $p)
                     <tr>
                        <th>{{ $no }}</th>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->address }}</td>
                        <td>{{ $p->gym_id }}</td>
                        <td>{{ $p->membership }}</td>
                        <td class="flex">
                            <a href="/{{ $p->id }}/edit">
                                <button class="btn btn-outline btn-warning mr-2">Edit</button>
                            </a>
                            <form action="/update/{{ $p->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline btn-error mr-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
@endsection
