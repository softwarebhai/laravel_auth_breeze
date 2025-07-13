<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Add New User</h5>
            </div>
            <div class="card-body p-10">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf 

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                        @error('name') <div class="text-danger">{{ $message }} </div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        @error('email') <div class="text-danger">{{ $message }} </div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
                        @error('phone') <div class="text-danger">{{ $message }} </div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" required>
                        @error('password') <div class="text-danger">{{ $message }} </div> @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Create User</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>

                </form>
            </div>
        </div>

    </div>
</x-app-layout>
