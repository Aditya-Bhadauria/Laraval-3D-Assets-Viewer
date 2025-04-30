<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interior Design Planner</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</head>
<body class="font-['Roboto'] bg-[url('/storage/FurnitureWallpaper.jpg')] bg-cover bg-center bg-no-repeat min-h-screen">

    <!-- Navigation Bar -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-800">AR based Furniture Viewer</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li>
                        <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('designs.ShowAll') }}" class="text-gray-700 hover:text-blue-600 transition">All Furniture Designs</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container mx-auto px-4 py-6 bg-opacity-80 rounded-lg shadow-lg">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t mt-10 bg-opacity-90">
        <div class="container mx-auto px-4 py-3 flex flex-col md:flex-row items-center justify-between">
            <p class="text-gray-600">&copy; 2025 Interior Design Planner. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
