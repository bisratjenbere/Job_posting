@php
    $job = (object) [
        'employer' => (object) ['name' => 'TechCorp', 'logo' => 'https://via.placeholder.com/42'],
        'title' => 'Senior Software Engineer',
        'url' => 'https://example.com/job/senior-software-engineer',
        'salary' => '$120,000 - $150,000',
        'tags' => [(object) ['name' => 'PHP'], (object) ['name' => 'Laravel'], (object) ['name' => 'Full-Stack']],
    ];
@endphp

<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-3">
                <x-job-card :job="$job" />
                <x-job-card :job="$job" />
                <x-job-card :job="$job" />
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>

            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-3">
                <x-job-card-wide :job="$job" />
            </div>
        </section>
    </div>
</x-layout>
