<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-large">
        {{ $job->title }}
    </h2>

    <p>
        This job pay {{ $job->salary }} per year.
    </p>

    @can('edit', $job)
        <p class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </p>
    @endcan
</x-layout>
