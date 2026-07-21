@extends('layouts.app')

@section('title', 'प्रयोगकर्ता व्यवस्थापन | ई-भेरिफाइ')

@section('content')

    <section class="py-5" style="background-color: var(--gov-gray); min-height: 70vh;">
        <div class="container">

            <div class="mb-4">
                <h2 class="fw-bold mb-1" style="color: var(--gov-blue-dark);">प्रयोगकर्ता व्यवस्थापन</h2>
                <p class="text-muted mb-0">Admin र Staff खाताहरू यहाँबाट मात्र सिर्जना गर्न सकिन्छ।</p>
            </div>

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="row g-4">

                <!-- Create User Form -->
                <div class="col-lg-5">
                    <div class="feature-card">
                        <h5 class="fw-bold mb-3"><i class="bi bi-person-plus"></i> नयाँ प्रयोगकर्ता थप्नुहोस्</h5>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0 ps-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">पूरा नाम</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">इमेल ठेगाना</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">भूमिका (Role)</label>
                                <select name="role" class="form-select" required>
                                    <option value="">-- छान्नुहोस् --</option>
                                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>एडमिन (Admin)</option>
                                    <option value="staff" {{ old('role') == 'staff' ? 'selected' : '' }}>कर्मचारी (Staff)</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">पासवर्ड</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">पासवर्ड पुष्टि गर्नुहोस्</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-gov-primary w-100">
                                <i class="bi bi-check-circle"></i> प्रयोगकर्ता सिर्जना गर्नुहोस्
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Existing Users List -->
                <div class="col-lg-7">
                    <div class="feature-card">
                        <h5 class="fw-bold mb-3"><i class="bi bi-people"></i> हालका प्रयोगकर्ताहरू</h5>

                        @if ($users->isEmpty())
                            <p class="text-muted mb-0">अहिलेसम्म कुनै Admin/Staff खाता थपिएको छैन।</p>
                        @else
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th>नाम</th>
                                            <th>इमेल</th>
                                            <th>भूमिका</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td><span class="badge" style="background-color: var(--gov-blue);">{{ $user->roleLabel() }}</span></td>
                                                <td class="text-end">
                                                    <form method="POST" action="{{ route('users.destroy', $user) }}"
                                                          onsubmit="return confirm('पक्का हटाउने हो?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
