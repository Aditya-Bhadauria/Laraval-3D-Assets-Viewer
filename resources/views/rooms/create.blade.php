@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 px-4">
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-red-100">
        <div class="bg-red-500 text-white px-6 py-5">
            <h2 class="text-3xl font-semibold">Enter Room Details</h2>
        </div>

        @php
            $designs = [
                ['name' => 'Sofa Set', 'style' => 'Modern'],
                ['name' => 'Dining Table', 'style' => 'Classic'],
                ['name' => 'Coffee Table', 'style' => 'Modern'],
                ['name' => 'Wardrobe', 'style' => 'Classic'],
                ['name' => 'Bookshelf', 'style' => 'Minimalist'],
                ['name' => 'Bed Frame', 'style' => 'Luxury'],
                ['name' => 'Armchair', 'style' => 'Scandinavian'],
                ['name' => 'TV Unit', 'style' => 'Contemporary'],
                ['name' => 'Dining Bench', 'style' => 'Rustic'],
                ['name' => 'Study Desk', 'style' => 'Modern'],
                ['name' => 'Shelf Unit', 'style' => 'Industrial'],
                ['name' => 'Mirror Frame', 'style' => 'Vintage'],
                ['name' => 'Nightstand', 'style' => 'Luxury'],
                ['name' => 'Sideboard', 'style' => 'Modern'],
                ['name' => 'Floor Lamp', 'style' => 'Bohemian'],
                ['name' => 'Rocking Chair', 'style' => 'Classic'],
                ['name' => 'Coffee Table', 'style' => 'Rustic'],
                ['name' => 'Wall Shelf', 'style' => 'Modern'],
                ['name' => 'Dresser', 'style' => 'Scandinavian'],
                ['name' => 'Wall Art', 'style' => 'Minimalist'],
            ];

            $roomNames = array_unique(array_column($designs, 'name'));
            $styles = array_unique(array_column($designs, 'style'));
        @endphp

        <div class="p-6 bg-red-50">
            <form method="POST" action="{{ route('rooms.store') }}">
                @csrf

                {{-- Room Name Dropdown --}}
                <div class="mb-5">
                    <label for="name" class="block text-sm font-semibold text-red-800 mb-2">Room Name</label>
                    <select name="name" id="name" required
                        class="w-full px-4 py-3 border border-red-300 rounded-xl focus:ring-2 focus:ring-red-400 focus:outline-none bg-white">
                        <option value="">Select a Room Name</option>
                        @foreach($roomNames as $roomName)
                            <option value="{{ $roomName }}">{{ $roomName }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Dimensions --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-5">
                    <div>
                        <label for="length" class="block text-sm font-semibold text-red-800 mb-2">Length (m)</label>
                        <input type="number" step="0.1" name="length" id="length" required
                            class="w-full px-4 py-3 border border-red-300 rounded-xl focus:ring-2 focus:ring-red-400 focus:outline-none bg-white">
                    </div>

                    <div>
                        <label for="width" class="block text-sm font-semibold text-red-800 mb-2">Width (m)</label>
                        <input type="number" step="0.1" name="width" id="width" required
                            class="w-full px-4 py-3 border border-red-300 rounded-xl focus:ring-2 focus:ring-red-400 focus:outline-none bg-white">
                    </div>

                    <div>
                        <label for="height" class="block text-sm font-semibold text-red-800 mb-2">Height (m)</label>
                        <input type="number" step="0.1" name="height" id="height" required
                            class="w-full px-4 py-3 border border-red-300 rounded-xl focus:ring-2 focus:ring-red-400 focus:outline-none bg-white">
                    </div>
                </div>

                {{-- Preferred Style Dropdown --}}
                <div class="mb-5">
                    <label for="style" class="block text-sm font-semibold text-red-800 mb-2">Preferred Style</label>
                    <select name="style" id="style" required
                        class="w-full px-4 py-3 border border-red-300 rounded-xl focus:ring-2 focus:ring-red-400 focus:outline-none bg-white">
                        <option value="">Select a Style</option>
                        @foreach($styles as $style)
                            <option value="{{ $style }}">{{ $style }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Budget --}}
                <div class="mb-6">
                    <label for="budget" class="block text-sm font-semibold text-red-800 mb-2">Budget ($)</label>
                    <input type="number" step="0.01" name="budget" id="budget" required
                        class="w-full px-4 py-3 border border-red-300 rounded-xl focus:ring-2 focus:ring-red-400 focus:outline-none bg-white">
                </div>

                {{-- Submit --}}
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-3 bg-red-500 text-white font-semibold rounded-full hover:bg-red-600 transition duration-200 shadow-md hover:shadow-lg">
                        Submit Room Details
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
