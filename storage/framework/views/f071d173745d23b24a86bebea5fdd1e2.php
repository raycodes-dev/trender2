<?php
use Livewire\Component;
use Livewire\Attributes\Layout;
?>

<div>
    <!-- Stats Bar -->
    <section class="relative border-y border-white/5 bg-gray-900/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="stat-number text-3xl md:text-4xl font-bold gradient-text" data-target="50000">0</p>
                    <p class="text-sm text-gray-500 mt-1">Videos Created</p>
                </div>
                <div>
                    <p class="stat-number text-3xl md:text-4xl font-bold gradient-text" data-target="4">0</p>
                    <p class="text-sm text-gray-500 mt-1">Active Creators</p>
                </div>
                <div>
                    <p class="stat-number text-3xl md:text-4xl font-bold gradient-text" data-target="98">0</p>
                    <p class="text-sm text-gray-500 mt-1">Visitors</p>
                </div>
                <div>
                    <p class="stat-number text-3xl md:text-4xl font-bold gradient-text" data-target="10">10+</p>
                    <p class="text-sm text-gray-500 mt-1">AI Models</p>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    const counters = document.querySelectorAll('.stat-number');

    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');

        // Control speed here 👇
        const duration = 2000; // total animation time in ms (2s)
        const increment = target / (duration / 16); // 60fps-ish

        let current = 0;

        const updateCounter = () => {
            current += increment;

            if (current < target) {
                counter.innerText = Math.floor(current).toLocaleString();
                requestAnimationFrame(updateCounter);
            } else {
                counter.innerText = target.toLocaleString();
            }
        };

        updateCounter();
    });
</script><?php /**PATH /Users/ray/Documents/Work/trendeer/trender/storage/framework/views/livewire/views/5668176d.blade.php ENDPATH**/ ?>