@props([
    'eyebrow' => 'The team',
    'heading' => 'The people you’ll actually work with',
    'body' => 'No account managers, no hand-offs. These are the specialists who answer your messages and ship your product.',
    'items',
])
<!--
    The team grid from resources/data/collections/team.json — portrait,
    name, and role. Swap the photos and names there.
-->
<section id="team" class="py-20 sm:py-28">
    <div class="mx-auto w-full max-w-6xl px-6">

        <div class="max-w-2xl" data-reveal>
            <p class="font-mono text-[11px] font-medium tracking-widest text-accent uppercase">{{ $eyebrow }}</p>
            <h2 class="mt-4 font-display text-3xl font-medium tracking-tight text-balance sm:text-[2.75rem] sm:leading-[1.12]">{{ $heading }}</h2>
            <p class="mt-4 text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>

        <ul role="list" class="stagger mt-14 grid grid-cols-2 gap-4 sm:gap-6 lg:grid-cols-3">
            @foreach ($items as $member)
                <li class="group" data-reveal>
                    <div class="overflow-hidden rounded-3xl outline-1 -outline-offset-1 outline-ink/10">
                        <img src="{{ $member->avatar }}" alt="Portrait of {{ $member->name }}" class="aspect-square w-full object-cover transition-transform duration-500 ease-out group-hover:scale-[1.03]" loading="lazy">
                    </div>
                    <h3 class="mt-4 text-base font-semibold tracking-tight sm:text-lg">{{ $member->name }}</h3>
                    <p class="text-sm text-muted">{{ $member->role }}</p>
                </li>
            @endforeach
        </ul>

    </div>
</section>
