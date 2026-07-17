@props([
    'eyebrow' => 'The brief',
    'heading' => 'Tell us about your project',
    'body' => 'A few honest lines are plenty — where the product is today, where it needs to be, and when. We read everything and reply to every enquiry within two business days.',
    'buttonText' => 'Send message',
])
<!--
    The enquiry form. This template ships as a static site, so the form is
    presentation only — wire the form tag up to your form service of choice
    (or a mailto:) when you are ready to receive messages.
-->
<section id="contact-form" class="py-16 sm:py-24">
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="grid gap-12 lg:grid-cols-[1fr_1.3fr] lg:gap-20">

            <div class="lg:sticky lg:top-28 lg:self-start" data-reveal>
                <p class="font-mono text-[11px] font-medium tracking-widest text-accent uppercase">{{ $eyebrow }}</p>
                <h2 class="mt-4 font-display text-3xl font-medium tracking-tight text-balance sm:text-[2.75rem] sm:leading-[1.12]">{{ $heading }}</h2>
                <p class="mt-4 max-w-[48ch] text-base/7 text-pretty text-muted">{{ $body }}</p>
            </div>

            <form action="#" method="post" class="reveal-1 flex flex-col gap-6 rounded-3xl border border-line bg-panel p-8 sm:p-10" data-reveal>
                <div class="grid gap-6 sm:grid-cols-2">
                    <div class="flex flex-col gap-2">
                        <label for="full-name" class="text-sm font-medium text-ink">Full name</label>
                        <input type="text" name="full-name" id="full-name" autocomplete="name" placeholder="Jordan Smith" class="w-full rounded-xl border border-line bg-canvas px-4 py-3 text-[15px] text-ink placeholder:text-faint transition-colors duration-200 hover:border-faint focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/20">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="email" class="text-sm font-medium text-ink">Email</label>
                        <input type="email" name="email" id="email" autocomplete="email" placeholder="jordan@company.com" class="w-full rounded-xl border border-line bg-canvas px-4 py-3 text-[15px] text-ink placeholder:text-faint transition-colors duration-200 hover:border-faint focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/20">
                    </div>
                </div>

                <div class="grid gap-6 sm:grid-cols-2">
                    <div class="flex flex-col gap-2">
                        <label for="company" class="text-sm font-medium text-ink">Company <span class="font-normal text-faint">(optional)</span></label>
                        <input type="text" name="company" id="company" autocomplete="organization" placeholder="Company name" class="w-full rounded-xl border border-line bg-canvas px-4 py-3 text-[15px] text-ink placeholder:text-faint transition-colors duration-200 hover:border-faint focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/20">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="budget" class="text-sm font-medium text-ink">Budget</label>
                        <select name="budget" id="budget" class="w-full appearance-none rounded-xl border border-line bg-canvas px-4 py-3 text-[15px] text-ink transition-colors duration-200 hover:border-faint focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/20">
                            <option>Under $25k</option>
                            <option>$25k – $75k</option>
                            <option>$75k – $150k</option>
                            <option>$150k and up</option>
                            <option>Not sure yet</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="message" class="text-sm font-medium text-ink">About the project</label>
                    <textarea name="message" id="message" rows="5" placeholder="What are you building, and what should it feel like when it works?" class="w-full resize-y rounded-xl border border-line bg-canvas px-4 py-3 text-[15px] text-ink placeholder:text-faint transition-colors duration-200 hover:border-faint focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/20"></textarea>
                </div>

                <div class="flex flex-wrap items-center justify-between gap-4 pt-2">
                    <button type="submit" class="rounded-full bg-ink px-7 py-3.5 text-[15px] font-medium text-canvas transition-colors duration-200 hover:bg-accent">{{ $buttonText }}</button>
                    <p class="text-[13px] text-faint">No newsletters, no follow-up sequence. Just a reply.</p>
                </div>
            </form>

        </div>
    </div>
</section>
