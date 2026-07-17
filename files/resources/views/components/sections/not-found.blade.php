@props([
    'code' => '404',
    'heading' => 'This page wandered off',
    'body' => 'The address may have changed, or the page may never have existed. Check the URL in the address bar, or head back to solid ground.',
    'buttonText' => 'Go back home',
    'buttonLink' => '/',
])
<!--
    The not-found message — shown when a visitor reaches a URL that
    doesn't exist.
-->
<section id="not-found" class="relative overflow-hidden pt-36 pb-24 sm:pt-48 sm:pb-32">
    <div class="warm-glow pointer-events-none absolute inset-x-0 top-0 h-[26rem]"></div>
    <div class="dot-grid pointer-events-none absolute inset-x-0 top-0 h-[22rem] text-ink"></div>

    <div class="relative mx-auto w-full max-w-6xl px-6 text-center">
        <p class="font-mono text-sm tracking-widest text-accent" data-reveal>{{ $code }}</p>
        <h1 class="reveal-1 mx-auto mt-4 max-w-[16ch] font-display text-5xl leading-[1.04] font-medium tracking-tight text-balance sm:text-7xl" data-reveal>{{ $heading }}</h1>
        <p class="reveal-2 mx-auto mt-6 max-w-[44ch] text-lg/8 text-pretty text-muted" data-reveal>{{ $body }}</p>
        <div class="reveal-3 mt-10" data-reveal>
            <a href="{{ $buttonLink }}" class="inline-flex rounded-full bg-ink px-7 py-3.5 text-[15px] font-medium text-canvas transition-colors duration-200 hover:bg-accent">{{ $buttonText }}</a>
        </div>
    </div>
</section>
