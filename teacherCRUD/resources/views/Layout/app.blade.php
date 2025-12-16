<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Teacher CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    {{-- Header/Title Section (now serves as the main application title) --}}
    <header class="bg-white border-bottom mb-4">
        <div class="container py-3">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <span class="me-2 text-primary" style="font-size: 1.25rem; font-weight: 700;">Teacher CRUD</span>
                    <span class="text-muted small">Manage teachers efficiently</span>
                </div>
                <div>
                    {{-- Optional quick actions or secondary links can go here --}}
                </div>
            </div>
        </div>
    </header>

    {{-- Main Content Area --}}
    <main class="container mb-5">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="text-center py-4 text-muted border-top bg-white">
        <div class="container">
            {{-- date('Y') is a PHP function; this will display the current year --}}
            © {{ date('Y') }} Your Company. All rights reserved.
        </div>
    </footer>

    {{-- Bootstrap JavaScript Bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>