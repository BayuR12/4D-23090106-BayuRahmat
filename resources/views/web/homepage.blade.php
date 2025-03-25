<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <!-- Alert -->
    <x-alert></x-alert>

    <div class="d-flex gap-3">
        <x-card />
        <x-card />
        <x-card />
    </div>
</x-layout>