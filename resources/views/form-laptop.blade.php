<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Laptop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body
    class="min-h-screen bg-gradient-to-br from-indigo-100 via-white to-purple-100 flex items-center justify-center p-6">

    <div class="w-full max-w-lg bg-white rounded-2xl shadow-xl p-8">

        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800">Create Laptop</h1>
            <p class="mt-2 text-sm text-gray-500">Isi data laptop di bawah ini</p>
        </div>

        <form method="POST" action="{{ route('save-laptop') }}">
            @csrf
            <div class="flex flex-col space-y-1">
                <label for="brand" class="text-sm font-medium text-gray-700">Brand</label>
                <input type="text" name="brand" id="brand" required placeholder="contoh: Asus"
                    class="px-4 py-2 rounded-lg border border-gray-300 bg-gray-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
            </div>

            <div class="flex flex-col space-y-1">
                <label for="model" class="text-sm font-medium text-gray-700">Model</label>
                <input type="text" name="model" id="model" required placeholder="contoh: ROG Zephyrus G14"
                    class="px-4 py-2 rounded-lg border border-gray-300 bg-gray-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
            </div>

            <div class="flex flex-col space-y-1">
                <label for="processor" class="text-sm font-medium text-gray-700">Processor</label>
                <input type="text" name="processor" id="processor" required placeholder="contoh: AMD Ryzen 9 7940HS"
                    class="px-4 py-2 rounded-lg border border-gray-300 bg-gray-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
            </div>

            <div class="flex flex-col space-y-1">
                <label for="ram" class="text-sm font-medium text-gray-700">RAM</label>
                <input type="text" name="ram" id="ram" required placeholder="contoh: 16GB DDR5"
                    class="px-4 py-2 rounded-lg border border-gray-300 bg-gray-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
            </div>

            <button type="submit"
                class="w-full mt-4 py-3 rounded-lg bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold shadow-md hover:shadow-lg hover:from-indigo-600 hover:to-purple-700 transform hover:-translate-y-0.5 transition duration-200">
                Create Laptop
            </button>
        </form>

    </div>

</body>

</html>