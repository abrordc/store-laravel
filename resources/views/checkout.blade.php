<x-layout>
    <x-slot:title>{{ $title }}</x-slot:tit>
    <div class="container">
        <p>checkout gasss</p>
        <div class="card">
            @foreach ($data as $d)
            <div class="card-items">
                <img src="" alt="">
                <h1>{{ $d }}</h1>
                <p>penjelsan detail</p>
                <x-button>beli</x-button>
            </div>
            @endforeach


        </div>
        <a href="/dashboard">kembali ke dashboard</a>
    </div>
</x-layout>