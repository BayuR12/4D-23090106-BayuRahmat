<x-layout>
    @if($category)
        <h1>{{ $category['name'] }}</h1>
        <hr>
        <p>{{ $category['description'] }}</p>
    @else
        <p class="text-danger">Kategori tidak ditemukan.</p>
    @endif
</x-layout>
