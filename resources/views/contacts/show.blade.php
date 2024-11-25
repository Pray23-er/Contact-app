<x-layout>




<h1 class="text-3xl font-bold mb-4">Account Details</h1>

<div class="flex flex-col md:flex-row justify-center mb-8">
  <div class="md:w-1/2">
    <div class="card bg-white rounded-lg shadow-md p-4">
      <h2 class="text-lg font-bold mb-2">Account Information</h2>
      <p class="text-gray-600 mb-2">
        <span class="font-bold">Name:</span> {{ $contact->name }}
      </p>
      <p class="text-gray-600 mb-2">
        <span class="font-bold">Email:</span> {{ $contact->email }}
      </p>
      <p class="text-gray-600 mb-2">
        <span class="font-bold">Phone Number:</span> {{ $contact->phone }}
      </p>
      <p class="text-gray-600 mb-2">
        <span class="font-bold">Address:</span> {{ $contact->address }}
      </p>
    </div>
  </div>

  <div class="md:w-1/2 md:ml-4">
    <div class="card bg-white rounded-lg shadow-md p-4">
      <h2 class="text-lg font-bold mb-2">Account Creation</h2>
      <p class="text-gray-600">
        Your account was created on <b>{{ $contact->created_at }}</b>.
      </p>
    </div>
  </div>
</div>

<section class="mt-4 container mx-auto p-4 md:p-6 lg:p-8">
    <div class="flex justify-between items-center gap-4 md:gap-6 lg:gap-8">
        <a href="{{ route('contacts.edit', $contact->id) }}" class="inline-block">
            <button type="button" class="bg-green-700 hover:bg-green-800 text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700">
                EDIT
            </button>
        </a>

        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-700 hover:bg-red-800 text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700">
                Delete
            </button>
        </form>
    </div>
</section>

<br>


<!-- Comments Section -->
<div class="mb-5 p-4 md:p-6 lg:p-8 bg-white rounded-lg shadow-md">
    <h2 class="text-3xl font-bold text-green-600 text-center mb-5">Comments</h2>

    <!-- Comment List -->
    @foreach($comments as $comment)
        <div class="mb-4 p-4 bg-gray-50 rounded-lg">
            <div class="flex justify-between items-center mb-2">
                <strong>{{ $comment->user->name }}</strong>
                <small>{{ $comment->created_at->diffForHumans() }}</small>
            </div>
            <p>{{ $comment->comment }}</p>
        </div>
    @endforeach
</div>

<!-- Leave a Comment Form -->
<section class="mt-4">
    <div class="p-4 md:p-6 lg:p-8 bg-white rounded-lg shadow-md">
        <form method="POST" action="{{ route('contacts.comments.store', $contact->id) }}">
            @csrf
            <textarea
                name="comment"
                placeholder="Leave a comment"
                class="w-full p-2 mb-4 text-sm rounded-lg border border-gray-300 focus:border-green-600 focus:ring-green-600"
                rows="5"
            ></textarea>

            <button
                type="submit"
                class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
            >
                Comment
            </button>
        </form>
    </div>
</section>





<a
    href="{{ route('contacts.index') }}"
    class="bg-transparent hover:bg-green-600 text-green-600 hover:text-white border border-green-600 hover:border-transparent font-medium rounded-full text-sm px-5 py-2.5 transition duration-300 ease-in-out"
>
    Back to Homepage
</a>
</x-layout>
