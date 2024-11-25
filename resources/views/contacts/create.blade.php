<x-layout>
    <h1 class="text-3xl font-bold text-green-600 mb-4 text-center">
        Create New Contact
    </h1>
    <form action="{{ route('contacts.store') }}" method="POST" class="p-4 md:p-6 lg:p-8 bg-white rounded-lg shadow-md max-w-md mx-auto">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input
                type="text"
                name="name"
                class="mt-1 w-full md:w-96 rounded-lg border border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600"
                required
            >
            @error('name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input
                type="email"
                name="email"
                class="mt-1 w-full md:w-96 rounded-lg border border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600"
                required
            >
            @error('email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Phone Number -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Phone Number</label>
            <input
                type="text"
                name="phone"
                class="mt-1 w-full md:w-96 rounded-lg border border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600"
                required
            >
            @error('phone')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Address -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Address</label>
            <input
                type="text"
                name="address"
                class="mt-1 w-full md:w-96 rounded-lg border border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600"
                required
            >
            @error('address')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <button
            type="submit"
            class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
        >
            Create
        </button>
    </form>
</x-layout>
