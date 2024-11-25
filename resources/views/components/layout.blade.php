<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>


    <x-navbar />

    <div class="max-w-6xl mx-auto">
    {{ $slot }}
</div>
<footer class="footer bg-gray-900 text-gray-200 p-8">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/4 xl:w-1/4 p-4">
                    <h5 class="text-xl font-bold mb-4">ContactCloud</h5>
                    <ul>
                        <li class="mb-2"><a href="{{ route('login') }}" class="text-gray-200 hover:text-white">Contacts</a></li>
                        <li class="mb-2"><a href="{{ route('register') }}" class="text-gray-200 hover:text-white">Add New Contact</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 xl:w-1/4 p-4">
                    <h5 class="text-xl font-bold mb-4">Support</h5>
                    <ul>
                        <li class="mb-2"><a href="#" class="text-gray-200 hover:text-white">FAQs</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-200 hover:text-white">Contact Us</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 xl:w-1/4 p-4">
                    <h5 class="text-xl font-bold mb-4">Social Media</h5>
                    <ul>
                        <li class="mb-2"><a href="#" class="text-gray-200 hover:text-white">Twitter</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-200 hover:text-white">Facebook</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-200 hover:text-white">Instagram</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 xl:w-1/4 p-4">
                    <h5 class="text-xl font-bold mb-4">Newsletter</h5>
                    <p class="text-gray-200">Stay updated with our latest news.</p>
                    <form>
                        <input type="email" placeholder="Email address" class="w-full p-2 mb-2 rounded">
                        <button type="submit" class="bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="text-center p-4">
                <p>&copy; {{ date('Y') }} ContactCloud. All rights reserved.</p>
            </div>
        </div>

    </footer>
</body>
</html>
