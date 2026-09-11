<section id="pricing" class="max-w-7xl mx-auto px-6 py-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-white font-mono">Simple, Transparent Pricing</h2>
        <p class="text-gray-400 mt-2">
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        <x-pricing-card plan="Starter" price="₱499" :features="['Basic parts catalog access', 'Standard delivery', 'Email support']" />
        <x-pricing-card plan="Professional" price="₱999" :highlighted="true" :features="[
            'Full catalog + exclusive deals',
            'Priority delivery',
            '24/7 chat support',
            'Free PC build consultation',
        ]" />
        <x-pricing-card plan="Enterprise" price="₱2,499" :features="['Bulk order discounts', 'Dedicated account manager', 'Same-day delivery', 'Extended warranty']" />
    </div>
</section>
