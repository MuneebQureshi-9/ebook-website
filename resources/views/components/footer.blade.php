<footer class="site-footer">
    <div class="container site-footer__grid">
        <section class="reveal" data-reveal>
            <p class="section-kicker">About</p>
            <h2>Done-for-you publishing that feels calm, clear, and professional.</h2>
            <p>We help authors turn ideas into published books with a process that feels guided from the first call to the final launch.</p>
        </section>

        <section class="reveal" data-reveal>
            <h2>Services</h2>
            <ul>
                @foreach (config('ebook.service_links') as $slug => $label)
                    <li><a href="{{ route('services.show', $slug) }}">{{ $label }}</a></li>
                @endforeach
            </ul>
        </section>

        <section class="reveal" data-reveal>
            <h2>Quick Links</h2>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
            </ul>
        </section>

        <section class="reveal" data-reveal>
            <h2>Contact</h2>
            <ul>
                <li>{{ config('ebook.contact_email') }}</li>
                <li>{{ config('ebook.contact_phone') }}</li>
                <li>{{ config('ebook.locations') }}</li>
            </ul>
            <div class="footer-cta">
                @include('components.cta-button', ['href' => route('contact'), 'label' => 'Book free Strategy Call'])
            </div>
        </section>
    </div>

    <div class="container site-footer__legal">
        <span>Terms & Conditions</span>
        <span>Privacy Policy</span>
        <span>Refund Policy</span>
    </div>
</footer>