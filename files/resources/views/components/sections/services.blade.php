@props([
    'eyebrow' => 'Services',
    'heading' => 'Everything a launch needs, in one team',
    'body' => 'Three phases, one accountable partner — the people who design your product are the people who build and keep it.',
    'items',
])
<!--
    The three numbered service cards. The cards themselves live in
    resources/data/collections/services.json — edit that file to change the
    steps, names, and descriptions.
-->
<section id="services" class="py-20 sm:py-28">
    <div class="mx-auto w-full max-w-6xl px-6">

        <div class="max-w-2xl" data-reveal>
            <p class="font-mono text-[11px] font-medium tracking-widest text-accent uppercase">{{ $eyebrow }}</p>
            <h2 class="mt-4 font-display text-3xl font-medium tracking-tight text-balance sm:text-[2.75rem] sm:leading-[1.12]">{{ $heading }}</h2>
            <p class="mt-4 text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>

        <div class="stagger mt-14 grid gap-4 lg:grid-cols-3">
            @foreach ($items as $service)
                <div class="group flex flex-col rounded-3xl border border-line bg-panel p-8 transition-colors duration-300 hover:border-faint" data-reveal>
                    <p class="font-mono text-sm text-faint transition-colors duration-300 group-hover:text-accent">{{ $service->step }}</p>
                    <h3 class="mt-16 font-display text-2xl font-medium tracking-tight sm:mt-20">{{ $service->name }}</h3>
                    <p class="mt-3 text-[15px]/7 text-pretty text-muted">{{ $service->description }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>
