<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="text-2xl font-semibold tracking-tight">
        {{ $job['title'] }}
    </h2>
    <p>This job pays {{ $job['salary'] }} per year.</p>
</x-layout>