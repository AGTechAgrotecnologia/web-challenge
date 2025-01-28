<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('shoppings') }}
        </h2>
    </x-slot>

    <x-nav-link href="{{ route('shoppings.create') }}">
        New
    </x-nav-link>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>shopping</th>
                            <th>Quantity</th>
                            <th>Price (R$)</th>
                            <th>Total (R$)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($shoppings as $shopping)
                        <tr>
                            <td>{{ $shopping->id }}</td>
                            <td>{{ $shopping->bought_at }}</td>
                            <td>{{ $shopping->name }}</td>
                            <td>{{ $shopping->quantity }}</td>
                            <td>{{ $shopping->price }}</td>
                            <td>{{ $shopping->total }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>