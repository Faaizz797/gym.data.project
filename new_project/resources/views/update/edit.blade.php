@extends('layouts.main')

@section('navbar')
<head>
    <title>Edit || Page</title>
</head>
<body>
    <form action="/update/{{ $person->id }}" method="POST">
        @csrf
        @method('put')
        <div class="flex justify-center items-center">
            <div class=" w-full max-w-xs">
                <label class="block form-control">
                    <div class="label">
                        <span class="label-text text-lg font-bold text-white">Name :</span>
                    </div>
                    <input type="text" placeholder="e.g Mr.Johny"
                        class="input text-white input-bordered input-warning w-full max-w-xs" name="name" value="{{ $person->name }}" required />
                </label>

                <label class="block form-control">
                    <div class="label">
                        <span class="label-text text-lg font-bold text-white">Address :</span>
                    </div>
                    <input type="text" placeholder="e.g 00 Zero Street"
                        class="input text-white input-bordered input-warning w-full max-w-xs" name="address" value="{{ $person->address }}" required />
                </label>

                <label class="block form-control">
                    <div class="label">
                        <span class="label-text text-lg font-bold text-white">Gym ID :</span>
                    </div>
                    <input type="text" placeholder="e.g 1011011"
                        class="input text-white input-bordered input-warning w-full max-w-xs" name="gym_id" value="{{ $person->gym_id }}" required />
                </label>

                <label class="block form-control">
                    <div class="label">
                        <span class="label-text text-lg font-bold text-white">Membership :</span>
                    </div>
                    <input type="text" placeholder="e.g 5x/Month"
                        class="input text-white input-bordered input-warning w-full max-w-xs" name="membership" value="{{ $person->membership }}" required />
                </label>
                <button type="submit" class="btn btn-outline btn-success mt-5">Save</button>

            </div>
        </div>
    </form>
</body>
    
@endsection