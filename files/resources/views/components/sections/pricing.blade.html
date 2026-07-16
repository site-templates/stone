@props([
    'eyebrow' => 'Plans',
    'heading' => 'Simple pricing, no surprises',
    'body' => 'Every plan includes lifetime access to what you build. Upgrade, downgrade, or cancel whenever you like.',
    'footnote' => 'Prices in USD. Annual billing saves two months on every plan.',
    'items',
])
<!--
    The pricing table from resources/data/collections/pricing.json. The plan
    with featured set to true becomes the ink-dark tier with its badge (in
    dark mode it inverts to paper, so it still leads the row); each plan's
    feature list is an array inside the collection item.
-->
<section id="pricing" class="py-16 sm:py-24">
    <div class="mx-auto w-full max-w-6xl px-6">

        <div class="mx-auto max-w-2xl text-center" data-reveal>
            <p class="font-mono text-[11px] font-medium tracking-widest text-accent uppercase">{{ $eyebrow }}</p>
            <h2 class="mt-4 font-display text-3xl font-medium tracking-tight text-balance sm:text-[2.75rem] sm:leading-[1.12]">{{ $heading }}</h2>
            <p class="mt-4 text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>

        <div class="stagger mt-14 grid items-start gap-4 lg:grid-cols-3">
            @foreach ($items as $plan)
                @if ($plan->featured)
                    <div class="relative overflow-hidden rounded-3xl bg-ink p-8 shadow-2xl shadow-ink/25 lg:-my-4 lg:p-10 dark:shadow-none" data-reveal>
                        <div class="pointer-events-none absolute inset-x-0 top-0 h-40 bg-[radial-gradient(ellipse_70%_100%_at_50%_0%,rgba(194,65,12,0.28),transparent_70%)] dark:bg-[radial-gradient(ellipse_70%_100%_at_50%_0%,rgba(194,65,12,0.14),transparent_70%)]"></div>

                        <div class="relative">
                            <div class="flex items-center justify-between gap-4">
                                <h3 class="font-display text-2xl font-medium tracking-tight text-canvas">{{ $plan->name }}</h3>
                                <span class="rounded-full bg-accent px-3 py-1 text-xs font-medium text-canvas dark:bg-accent-deep dark:text-ink">{{ $plan->badge }}</span>
                            </div>
                            <p class="mt-2 text-sm/6 text-canvas/70">{{ $plan->blurb }}</p>

                            <p class="mt-8 flex items-baseline gap-2">
                                <span class="font-display text-5xl font-medium tracking-tight text-canvas">{{ $plan->price }}</span>
                                <span class="text-sm text-canvas/60">{{ $plan->period }}</span>
                            </p>

                            <a href="{{ $plan->buttonLink }}" class="mt-8 flex justify-center rounded-full bg-canvas px-5 py-3 text-[15px] font-medium text-ink transition-colors duration-200 hover:bg-accent hover:text-canvas">{{ $plan->buttonText }}</a>

                            <ul role="list" class="mt-8 flex flex-col gap-3.5 border-t border-canvas/15 pt-7 text-sm text-canvas/80">
                                @foreach ($plan->features as $feature)
                                    <li class="flex items-start gap-3">
                                        <svg viewBox="0 0 20 20" class="mt-0.5 size-4 shrink-0 fill-accent dark:fill-accent-deep" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="rounded-3xl border border-line bg-panel p-8 transition-colors duration-300 hover:border-faint" data-reveal>
                        <h3 class="font-display text-2xl font-medium tracking-tight">{{ $plan->name }}</h3>
                        <p class="mt-2 text-sm/6 text-muted">{{ $plan->blurb }}</p>

                        <p class="mt-8 flex items-baseline gap-2">
                            <span class="font-display text-5xl font-medium tracking-tight">{{ $plan->price }}</span>
                            <span class="text-sm text-faint">{{ $plan->period }}</span>
                        </p>

                        <a href="{{ $plan->buttonLink }}" class="mt-8 flex justify-center rounded-full border border-line bg-canvas px-5 py-3 text-[15px] font-medium text-ink transition-colors duration-200 hover:border-faint">{{ $plan->buttonText }}</a>

                        <ul role="list" class="mt-8 flex flex-col gap-3.5 border-t border-line pt-7 text-sm text-muted">
                            @foreach ($plan->features as $feature)
                                <li class="flex items-start gap-3">
                                    <svg viewBox="0 0 20 20" class="mt-0.5 size-4 shrink-0 fill-faint" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            @endforeach
        </div>

        <p class="mt-10 text-center text-sm text-faint" data-reveal>{{ $footnote }}</p>

    </div>
</section>
