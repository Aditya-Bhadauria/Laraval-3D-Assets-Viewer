@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 px-4">
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
        <div class="bg-blue-600 text-white px-6 py-4">
            <h2 class="text-2xl font-semibold">Enter Room Details</h2>
        </div>

        @php
            // Extract room names and unique styles from the designs array
            $designs = [
                ['name' => 'Modern Sofa Set', 'style' => 'Modern'],
                ['name' => 'Classic Dining Table', 'style' => 'Classic'],
                ['name' => 'Modern Coffee Table', 'style' => 'Modern'],
                ['name' => 'Classic Wardrobe', 'style' => 'Classic'],
                ['name' => 'Minimalist Bookshelf', 'style' => 'Minimalist'],
                ['name' => 'Luxury Bed Frame', 'style' => 'Luxury'],
                ['name' => 'Scandinavian Armchair', 'style' => 'Scandinavian'],
                ['name' => 'Contemporary TV Unit', 'style' => 'Contemporary'],
                ['name' => 'Rustic Dining Bench', 'style' => 'Rustic'],
                ['name' => 'Modern Study Desk', 'style' => 'Modern'],
                ['name' => 'Industrial Shelf Unit', 'style' => 'Industrial'],
                ['name' => 'Vintage Mirror Frame', 'style' => 'Vintage'],
                ['name' => 'Luxury Nightstand', 'style' => 'Luxury'],
                ['name' => 'Modern Sideboard', 'style' => 'Modern'],
                ['name' => 'Bohemian Floor Lamp', 'style' => 'Bohemian'],
                ['name' => 'Classic Rocking Chair', 'style' => 'Classic'],
                ['name' => 'Rustic Coffee Table', 'style' => 'Rustic'],
                ['name' => 'Modern Wall Shelf', 'style' => 'Modern'],
                ['name' => 'Scandinavian Dresser', 'style' => 'Scandinavian'],
                ['name' => 'Minimalist Wall Art', 'style' => 'Minimalist'],
            ];

            $roomNames = array_unique(array_column($designs, 'name'));
            $styles = array_unique(array_column($designs, 'style'));
        @endphp

        <div class="p-6">
            <form method="POST" action="{{ route('rooms.store') }}">
                @csrf

                {{-- Room Name Dropdown --}}
                <div class="mb-5">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Room Name</label>
                    <select name="name" id="name" required
                        class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">Select a Room Name</option>
                        @foreach($roomNames as $roomName)
                            <option value="{{ $roomName }}">{{ $roomName }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-5">
                    <div>
                        <label for="length" class="block text-sm font-medium text-gray-700 mb-1">Length (m)</label>
                        <input type="number" step="0.1" name="length" id="length" required
                            class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <div>
                        <label for="width" class="block text-sm font-medium text-gray-700 mb-1">Width (m)</label>
                        <input type="number" step="0.1" name="width" id="width" required
                            class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <div>
                        <label for="height" class="block text-sm font-medium text-gray-700 mb-1">Height (m)</label>
                        <input type="number" step="0.1" name="height" id="height" required
                            class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                </div>

                {{-- Preferred Style Dropdown --}}
                <div class="mb-5">
                    <label for="style" class="block text-sm font-medium text-gray-700 mb-1">Preferred Style</label>
                    <select name="style" id="style" required
                        class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">Select a Style</option>
                        @foreach($styles as $style)
                            <option value="{{ $style }}">{{ $style }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-6">
                    <label for="budget" class="block text-sm font-medium text-gray-700 mb-1">Budget ($)</label>
                    <input type="number" step="0.01" name="budget" id="budget" required
                        class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition">
                        Submit Room Details
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
