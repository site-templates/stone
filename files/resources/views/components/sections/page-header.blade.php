@props([
    'eyebrow' => 'Page',
    'heading' => 'Page heading',
    'body' => '',
])
<!--
    The shared opener for interior pages — eyebrow, serif headline, and an
    optional line of context. Each page passes its own copy on the section tag.
-->
<section class="relative overflow-hidden pt-32 pb-6 sm:pt-44 sm:pb-8">
    <div class="warm-glow pointer-events-none absolute inset-x-0 top-0 h-[24rem]"></div>

    <div class="relative mx-auto w-full max-w-6xl px-6">
        <p class="font-mono text-[11px] font-medium tracking-widest text-accent uppercase" data-reveal>{{ $eyebrow }}</p>
        <h1 class="reveal-1 mt-4 max-w-[18ch] font-display text-4xl leading-[1.08] font-medium tracking-tight text-balance sm:text-6xl" data-reveal>{{ $heading }}</h1>
        @if ($body)
            <p class="reveal-2 mt-6 max-w-[54ch] text-lg/8 text-pretty text-muted" data-reveal>{{ $body }}</p>
        @endif
    </div>
</section>
