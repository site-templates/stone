@props([
    'heading' => 'Let’s make something amazing together',
    'body' => 'Tell us where your product needs to go. We will tell you, honestly, what it will take to get there.',
    'buttonText' => 'Start the conversation',
    'buttonLink' => '/contact',
])
<!--
    The closing move: an ink-dark panel on the warm canvas with a single
    action — in dark mode it inverts to a paper panel on basalt, so it
    always stands apart. Reused on several pages — each page can pass its
    own copy on the section tag.
-->
<section id="cta" class="py-20 sm:py-28">
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="relative overflow-hidden rounded-3xl bg-ink px-8 py-16 text-center sm:px-16 sm:py-24" data-reveal>
            <div class="dot-grid pointer-events-none absolute inset-0 text-canvas"></div>
            <div class="pointer-events-none absolute inset-x-0 top-0 h-56 bg-[radial-gradient(ellipse_60%_100%_at_50%_0%,rgba(194,65,12,0.22),transparent_70%)] dark:bg-[radial-gradient(ellipse_60%_100%_at_50%_0%,rgba(194,65,12,0.12),transparent_70%)]"></div>

            <div class="relative">
                <p class="font-sans text-2xl/none font-bold tracking-tight text-canvas lowercase" aria-hidden="true">stone<span class="text-accent dark:text-accent-deep">.</span></p>

                <h2 class="mx-auto mt-8 max-w-[20ch] font-display text-3xl font-medium tracking-tight text-balance text-canvas sm:text-[2.75rem] sm:leading-[1.12]">{{ $heading }}</h2>
                <p class="mx-auto mt-4 max-w-[46ch] text-lg/8 text-pretty text-canvas/70">{{ $body }}</p>

                <a href="{{ $buttonLink }}" class="mt-10 inline-flex rounded-full bg-canvas px-7 py-3.5 text-[15px] font-medium text-ink transition-colors duration-200 hover:bg-accent hover:text-canvas">{{ $buttonText }}</a>
            </div>
        </div>
    </div>
</section>
