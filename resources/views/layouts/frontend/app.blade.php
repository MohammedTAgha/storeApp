@include('layouts.frontend.partials.header')
@include('layouts.frontend.partials.navbar')

<main>
    <!-- hero slider section start -->
    <section class="hero-slider">
        <div class="container">
            @yield('content')

        </div>
    </section>
</main>

@include('layouts.frontend.partials.footer')
