<footer class="bg-[#0f1012] text-white">
    <div class="max-w-6xl mx-auto px-6 py-12 lg:py-16 grid gap-10 lg:grid-cols-4">
        <div>
            <h2 class="text-xl font-semibold tracking-wide">Experience Udawalawa</h2>
            <p class="mt-3 text-sm text-white/70 leading-relaxed">
                Authentic roots and living stories from the heart of Sri Lanka. We craft stays that celebrate community, wildlife,
                and the rhythms of the countryside.
            </p>
        </div>

        <div>
            <h3 class="text-sm font-semibold uppercase tracking-[0.08em] text-white/80">Newsletter</h3>
            <p class="mt-3 text-sm text-white/70">Stay in the loop with seasonal experiences, dining events, and community updates.</p>
            <form action="#" method="post" class="mt-4 flex flex-col sm:flex-row sm:items-center gap-3">
                <label class="sr-only" for="footer-email">Email</label>
                <input
                    id="footer-email"
                    name="email"
                    type="email"
                    placeholder="you@example.com"
                    class="w-full sm:flex-1 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm placeholder-white/50 focus:border-[#fbae2e] focus:outline-none focus:ring-1 focus:ring-[#fbae2e]"
                >
                <button type="submit" class="inline-flex items-center justify-center rounded-full bg-[#fbae2e] px-5 py-2 text-sm font-semibold text-[#1b1b18] hover:bg-[#e09d27] focus:outline-none focus:ring-2 focus:ring-[#fbae2e] focus:ring-offset-2 focus:ring-offset-[#0f1012] transition">
                    Sign Up
                </button>
            </form>
        </div>

        <div>
            <h3 class="text-sm font-semibold uppercase tracking-[0.08em] text-white/80">Quick Links</h3>
            <ul class="mt-4 space-y-2 text-sm text-white/70">
                <li><a href="{{ route('experiences.index') }}" class="hover:text-brand-2 transition">Experiences</a></li>
                <li><a href="{{ route('dining') }}" class="hover:text-brand-2 transition">Dining</a></li>
                <li><a href="{{ route('stories.index') }}" class="hover:text-brand-2 transition">Stories</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-brand-2 transition">Contact &amp; Book</a></li>
                <li><a href="{{ route('faq') }}" class="hover:text-brand-2 transition">FAQs</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-sm font-semibold uppercase tracking-[0.08em] text-white/80">Contact</h3>
            <ul class="mt-4 space-y-3 text-sm text-white/70">
                <li>
                    <span class="block font-medium text-white">Visit</span>
                    235 Udawalawa Road<br>
                    Moneragala, Sri Lanka
                </li>
                <li>
                    <span class="block font-medium text-white">Call</span>
                    <a href="tel:+94112233445" class="hover:text-brand-2 transition">+94 11 223 3445</a>
                </li>
                <li>
                    <span class="block font-medium text-white">Write</span>
                    <a href="mailto:hello@experienceudawalawa.com" class="hover:text-brand-2 transition">hello@experienceudawalawa.com</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="border-t border-white/10">
        <div class="max-w-6xl mx-auto px-6 py-6 flex flex-col gap-3 text-xs text-white/50 sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ now()->year }} Experience Udawalawa. All rights reserved.</p>
            <div class="flex gap-4">
                <a href="#" class="hover:text-brand-2 transition">Privacy Policy</a>
                <a href="#" class="hover:text-brand-2 transition">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
