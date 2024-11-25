<x-layout>
    <h1 class="text-3xl font-bold text-green-600 text-center mb-3">
        Welcome to Contact Page
      </h1>
    <nav>

<div class="mx-auto text-center mb-3">

            <a href="{{ route('contacts.create') }}">
                {{-- <a href="{{ route('contacts.show') }}"> Show Contact</a>
                <a href="{{ route('contacts.edit') }}"> Update Contact</a> --}}

                <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add Contact</button></a>
        </div>

    </nav>





<div class="bg-green-500">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    View
                </th>
            </tr>
        </thead>  <div class="bg-green-500">
        <tbody>
@foreach ($contacts as $contact )
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

    <td class="px-6 py-4">
        {{ $contact->name }}
    </td>
    <td class="px-6 py-4">
        {{ $contact->email }}
    </td>
    <td class="px-6 py-4">
        <a href="{{ route('contacts.show',$contact->id) }}"><button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">read more</button></a>
    </td>

</tr>

@endforeach


        </tbody>
    </table>
</div>

</x-layout>
