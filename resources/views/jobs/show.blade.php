<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-large">
        {{ $job['title'] }}
    </h2>

    <p>
        This job pay {{ $job['salary'] }} per year.
    </p>
</x-layout>
