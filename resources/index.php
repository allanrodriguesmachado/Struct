<!doctype html>
<html lang="en">
<head>
    <?php include __DIR__ . '/views/partials/head.php'; ?>
</head>
<body>

<body class="h-full">
<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex items-center justify-start gap-4 h-16">
                <a href="/"
                   class="text-white py-2 px-3 leading-lg rounded-md hover:bg-gray-900 transition transition-all duration-[0.5s]">
                    Home
                </a>

                <a href="/products"
                   class="text-white py-2 px-3 leading-lg rounded-md hover:bg-gray-900 transition transition-all duration-[0.5s]">
                    Products
                </a>

                <a href="/contact"
                   class="text-white py-2 px-3 leading-lg rounded-md hover:bg-gray-900 transition transition-all duration-[0.5s]">
                    Contact
                </a>
            </div>
        </div>
    </nav>


    <header class="bg-white">
        <div class="mx-auto max-w-7xl py-6 px-8">
            <h1 class="text-3xl leading-9 font-bold text-gray-900">Home</h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl py-6 px-8">
            My main content here
        </div>
    </main>

    <?= include_once __DIR__ . '/views/partials/footer.php' ?>
</div>
</body>
</html>