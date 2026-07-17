<!--
    Pricing — served at "/pricing". The plans live in
    resources/data/collections/pricing.json and the questions in faq.json.
-->
<x-layouts.main title="Pricing" description="Simple plans with lifetime access and free updates — Basic for small projects, Pro for scale, and Team for organizations. No surprises.">

    <x-sections.page-header
        eyebrow="Pricing"
        heading="Plans that scale with the work"
        body="Choose the plan that best suits your needs. Every one includes lifetime access to what you build — and if you are unsure, we will recommend honestly." />

    <x-sections.pricing :items="$pricing" />

    <x-sections.faq :items="$faq" />

    <x-sections.cta
        heading="Still have questions?"
        body="Describe your case and we will point you to the right plan — no pitch, just a straight answer."
        buttonText="Contact us"
        buttonLink="/contact" />

</x-layouts.main>
