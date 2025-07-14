<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>


    <ul class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue text-sm">{{ $job->employer->name }}</div>

                <strong>{{$job['title']}}: </strong>  Pays {{$job['salary']}} per


            </a>
        @endforeach
    </ul>

    <div class="mt-8">
        {{ $jobs->links() }}
    </div>
</x-layout>
