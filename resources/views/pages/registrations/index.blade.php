<!-- resources/views/admin/registrations/index.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="max-w-6xl mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Registration List</h2>

        @if(session('success_message'))
            <div id="successPopup" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <p class="text-xl text-green-600 mb-4">{{ session('success_message') }}</p>
                    <button id="closePopup" class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded-md">Close</button>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('successPopup').classList.remove('hidden');
                });

                document.getElementById('closePopup').addEventListener('click', function() {
                    document.getElementById('successPopup').classList.add('hidden');
                });
            </script>
        @endif

        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-sm">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border-b p-4 text-left">Name</th>
                    <th class="border-b p-4 text-left">Email</th>
                    <th class="border-b p-4 text-left">Phone</th>
                    <th class="border-b p-4 text-left">Organization</th>
                    <th class="border-b p-4 text-left">Status</th>
                    <th class="border-b p-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registrations as $registration)
                    <tr class="hover:bg-gray-100">
                        <td class="border-b p-4">{{ $registration->name }}</td>
                        <td class="border-b p-4">{{ $registration->email }}</td>
                        <td class="border-b p-4">{{ $registration->phone }}</td>
                        <td class="border-b p-4">{{ $registration->organization }}</td>
                        <td class="border-b p-4">{{ $registration->status }}</td>
                        <td class="border-b p-4">
                            @if($registration->status == 'pending')
                                <form action="{{ route('admin.registrations.approve', $registration->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="text-green-500 hover:underline">Approve</button>
                                </form>
                            @else
                                <span class="text-gray-500">Approved</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
