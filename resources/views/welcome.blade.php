<x-layout>
    <!-- Hero Section -->
    <div class="hero-section bg-gray-100 py-10" style="background-image: url('{{ asset('images/hero-background.jpg') }}'); background-size: cover;">
        <div class="max-w-screen-xl mx-auto p-4">
            <h1 class="text-5xl font-bold text-green-600 mb-1">ContactCloud</h1>
            <p class="text-xl text-gray-600 mb-4">Manage your contacts effortlessly</p>
            <a href="{{ route('register') }}" class="bg-green-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                View Contacts
            </a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="features-section bg-white-100">
        <div class="max-w-screen-xl mx-auto p-4">
            <h2 class="text-3xl font-bold text-green-600 mb-4">Features</h2>
            <div class="flex flex-wrap justify-center">
                <div class="feature-card w-full md:w-1/3 xl:w-1/4 p-4">
                    <img src="{{ asset('images/contact.jpeg') }}" class="w-12 h-12 mb-2" />
                    <h3 class="text-xl font-bold text-gray-600 mb-2">Contact List</h3>
                    <p class="text-gray-600">View and manage all your contacts in one place</p>
                </div>
                <div class="feature-card w-full md:w-1/3 xl:w-1/4 p-4">
                    <img src="{{ asset('images/contact2.jpeg') }}" class="w-12 h-12 mb-2" />
                    <h3 class="text-xl font-bold text-gray-600 mb-2">Add New Contacts</h3>
                    <p class="text-gray-600">Easily add new contacts with our simple form</p>
                </div>
                <div class="feature-card w-full md:w-1/3 xl:w-1/4 p-4">
                    <img src="{{ asset('images/contact 3.jpeg') }}" class="w-12 h-12 mb-2" />
                    <h3 class="text-xl font-bold text-gray-600 mb-2">Search & Filter</h3>
                    <p class="text-gray-600">Quickly find specific contacts using our search and filter features</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="cta-section bg-gray-100 py-20" style="background-image: url('{{ asset('images/cta-background.jpg') }}'); background-size: cover;">
        <div class="max-w-screen-xl mx-auto p-4">
            <h2 class="text-3xl font-bold text-green-600 mb-4">Get Started</h2>
            <p class="text-xl text-gray-600 mb-8">Start managing your contacts today!</p>
            <a href="{{ route('register') }}" class="bg-green-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                Add New Contact
            </a>
        </div>
    </div>
</x-layout>
