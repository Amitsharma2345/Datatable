<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <img class="img-detail" src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80">
                </div>
                <div class="col-sm-6">
                    <h2 class="font-set">{{ $data['name'] }}</h2>
                    <h3 class="font-set">Price : {{ $data['price'] }}</h3>
                    <h4 class="font-set">Details: {{ $data['description'] }}</h4>
                    <h4 class="font-set">category: {{ $data['category'] }}</h4>

                    <br><br>

                    <a href="/">Go Back</a>
                    <br><br>

                    <button type="button" class="btn btn-success text-dark">Order Now</button>
                    </a>
                </div>
            </div>
</x-app-layout>
