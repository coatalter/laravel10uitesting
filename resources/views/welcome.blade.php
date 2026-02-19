<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: true, activeTab: 'all' }" :class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tailwind CSS 4 Showcase — Laravel 10</title>
    <meta name="description" content="Pushing Tailwind CSS 4 to its absolute limits with Laravel 10">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-surface-dark text-white font-[family-name:var(--font-display)] antialiased overflow-x-hidden">

    <!-- ░░░ FLOATING NAV ░░░ -->
    <nav
        class="fixed top-4 left-1/2 -translate-x-1/2 z-50 glass-strong rounded-full px-6 py-3 flex items-center gap-6 text-sm font-medium">
        <a href="#hero" class="text-neon-cyan hover:text-white transition-colors">Home</a>
        <a href="#glass" class="text-white/60 hover:text-white transition-colors">Glass</a>
        <a href="#neon" class="text-white/60 hover:text-white transition-colors">Neon</a>
        <a href="#3d" class="text-white/60 hover:text-white transition-colors">3D</a>
        <a href="#container" class="text-white/60 hover:text-white transition-colors">Container</a>
        <a href="#gradients" class="text-white/60 hover:text-white transition-colors">Gradients</a>
        <a href="#colors" class="text-white/60 hover:text-white transition-colors">Colors</a>
        <a href="#animations" class="text-white/60 hover:text-white transition-colors">Animate</a>
        <a href="#forms" class="text-white/60 hover:text-white transition-colors">Forms</a>
        <button @click="darkMode = !darkMode"
            class="ml-2 w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition">
            <span x-show="darkMode" class="text-lg">🌙</span>
            <span x-show="!darkMode" class="text-lg">☀️</span>
        </button>
    </nav>

    <!-- ╔═══════════════════════════════════════╗
     ║  SECTION 1 — HERO                    ║
     ╚═══════════════════════════════════════╝ -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center bg-mesh overflow-hidden">
        <!-- Animated orbs -->
        <div class="absolute top-20 left-20 w-72 h-72 rounded-full bg-neon-purple/20 blur-3xl animate-float"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 rounded-full bg-neon-cyan/15 blur-3xl animate-float"
            style="animation-delay:-3s"></div>
        <div class="absolute top-1/2 left-1/3 w-64 h-64 animate-morph bg-neon-pink/10 blur-2xl"></div>

        <div class="relative text-center max-w-5xl mx-auto px-6 animate-fade-in">
            <div
                class="inline-block mb-6 px-4 py-1.5 rounded-full glass text-xs font-medium tracking-widest uppercase text-neon-cyan">
                🚀 Laravel 10 × Tailwind CSS 4.0
            </div>
            <h1 class="text-6xl md:text-8xl lg:text-9xl font-black tracking-tight leading-none mb-8">
                <span class="text-gradient">Pushing</span><br>
                <span class="text-white">The Limits</span>
            </h1>
            <p class="text-xl md:text-2xl text-white/50 max-w-2xl mx-auto mb-12 font-light">
                A showcase of every cutting-edge feature in Tailwind CSS 4 — OKLCH colors, 3D transforms, container
                queries, neon effects, and more.
            </p>
            <div class="flex gap-4 justify-center">
                <a href="#glass"
                    class="px-8 py-4 rounded-full bg-gradient-to-r from-neon-pink to-neon-purple text-white font-semibold hover:scale-105 transition-transform shadow-lg shadow-neon-pink/25">
                    Explore Showcase ↓
                </a>
                <a href="#forms" class="px-8 py-4 rounded-full glass font-semibold hover:bg-white/10 transition">
                    Interactive Demo
                </a>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce-soft">
            <div class="w-6 h-10 rounded-full border-2 border-white/30 flex justify-center pt-2">
                <div class="w-1 h-3 rounded-full bg-white/50 animate-slide-up"></div>
            </div>
        </div>
    </section>

    <!-- ╔═══════════════════════════════════════╗
     ║  SECTION 2 — GLASSMORPHISM           ║
     ╚═══════════════════════════════════════╝ -->
    <section id="glass" class="relative py-32 px-6 bg-mesh overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-surface-dark via-transparent to-surface-dark"></div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center mb-20 animate-slide-up">
                <span class="text-neon-cyan text-sm font-mono tracking-widest uppercase">Section 02</span>
                <h2 class="text-5xl md:text-7xl font-black mt-4 text-gradient">Glassmorphism</h2>
                <p class="text-white/40 mt-4 text-lg max-w-xl mx-auto">Frosted glass effects with backdrop-blur and
                    translucent surfaces</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Glass Card 1 -->
                <div
                    class="glass rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 group animate-slide-up stagger-1">
                    <div
                        class="w-14 h-14 rounded-2xl bg-gradient-to-br from-neon-pink to-neon-purple flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        ⚡</div>
                    <h3 class="text-2xl font-bold mb-3">Oxide Engine</h3>
                    <p class="text-white/50 leading-relaxed">Built with Rust for 5× faster builds and 100× faster
                        incremental rebuilds. Zero-config content detection.</p>
                    <div class="mt-6 flex gap-2">
                        <span
                            class="px-3 py-1 rounded-full text-xs bg-neon-pink/10 text-neon-pink border border-neon-pink/20">Rust</span>
                        <span
                            class="px-3 py-1 rounded-full text-xs bg-neon-cyan/10 text-neon-cyan border border-neon-cyan/20">5×
                            Speed</span>
                    </div>
                </div>
                <!-- Glass Card 2 -->
                <div
                    class="glass-strong rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 group animate-slide-up stagger-3">
                    <div
                        class="w-14 h-14 rounded-2xl bg-gradient-to-br from-neon-cyan to-neon-green flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        🎨</div>
                    <h3 class="text-2xl font-bold mb-3">CSS-First Config</h3>
                    <p class="text-white/50 leading-relaxed">Use the @theme directive for configuration directly in CSS.
                        No more tailwind.config.js files needed.</p>
                    <div class="mt-6 flex gap-2">
                        <span
                            class="px-3 py-1 rounded-full text-xs bg-neon-green/10 text-neon-green border border-neon-green/20">@theme</span>
                        <span
                            class="px-3 py-1 rounded-full text-xs bg-neon-cyan/10 text-neon-cyan border border-neon-cyan/20">CSS
                            Vars</span>
                    </div>
                </div>
                <!-- Glass Card 3 -->
                <div
                    class="glass rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 group neon-border animate-slide-up stagger-5">
                    <div
                        class="w-14 h-14 rounded-2xl bg-gradient-to-br from-neon-orange to-neon-yellow flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        🔮</div>
                    <h3 class="text-2xl font-bold mb-3">P3 Wide Gamut</h3>
                    <p class="text-white/50 leading-relaxed">OKLCH color palette with P3 gamut support. More vibrant,
                        perceptually uniform colors across displays.</p>
                    <div class="mt-6 flex gap-2">
                        <span
                            class="px-3 py-1 rounded-full text-xs bg-neon-orange/10 text-neon-orange border border-neon-orange/20">OKLCH</span>
                        <span
                            class="px-3 py-1 rounded-full text-xs bg-neon-yellow/10 text-neon-yellow border border-neon-yellow/20">P3</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ╔═══════════════════════════════════════╗
     ║  SECTION 3 — NEON GLOW               ║
     ╚═══════════════════════════════════════╝ -->
    <section id="neon" class="py-32 px-6 bg-surface-dark relative">
        <div class="max-w-7xl mx-auto text-center">
            <span class="text-neon-pink text-sm font-mono tracking-widest uppercase">Section 03</span>
            <h2 class="text-5xl md:text-7xl font-black mt-4 mb-6">
                <span class="neon-text-pink text-neon-pink">Neon</span>
                <span class="neon-text-cyan text-neon-cyan">Glow</span>
                <span class="neon-text-green text-neon-green">Effects</span>
            </h2>
            <p class="text-white/40 text-lg mb-16 max-w-xl mx-auto">Custom text-shadow and box-shadow powered neon
                effects using OKLCH colors</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="rounded-2xl p-6 bg-surface-card neon-border animate-glow-pulse hover:scale-105 transition-transform">
                    <div class="text-5xl font-black neon-text-pink text-neon-pink mb-2">01</div>
                    <p class="text-white/50 text-sm">Pink Glow</p>
                </div>
                <div class="rounded-2xl p-6 bg-surface-card neon-border-cyan hover:scale-105 transition-transform"
                    style="animation: glow-pulse 2s ease-in-out infinite 0.5s">
                    <div class="text-5xl font-black neon-text-cyan text-neon-cyan mb-2">02</div>
                    <p class="text-white/50 text-sm">Cyan Glow</p>
                </div>
                <div class="rounded-2xl p-6 bg-surface-card hover:scale-105 transition-transform"
                    style="box-shadow: 0 0 15px oklch(0.8 0.3 145/0.3); border:1px solid oklch(0.8 0.3 145/0.5)">
                    <div class="text-5xl font-black neon-text-green text-neon-green mb-2">03</div>
                    <p class="text-white/50 text-sm">Green Glow</p>
                </div>
                <div class="rounded-2xl p-6 bg-surface-card hover:scale-105 transition-transform"
                    style="box-shadow: 0 0 15px oklch(0.75 0.25 55/0.3); border:1px solid oklch(0.75 0.25 55/0.5)">
                    <div class="text-5xl font-black text-neon-orange mb-2"
                        style="text-shadow:0 0 10px oklch(0.75 0.25 55/0.8),0 0 30px oklch(0.75 0.25 55/0.4)">04</div>
                    <p class="text-white/50 text-sm">Orange Glow</p>
                </div>
            </div>

            <!-- Neon sign -->
            <div class="mt-20 py-12 rounded-3xl bg-surface-card/50 border border-white/5">
                <p
                    class="text-6xl md:text-8xl font-black neon-text-pink text-neon-pink animate-glow-pulse tracking-tighter">
                    TAILWIND 4</p>
            </div>
        </div>
    </section>

    <!-- ╔═══════════════════════════════════════╗
     ║  SECTION 4 — 3D TRANSFORMS           ║
     ╚═══════════════════════════════════════╝ -->
    <section id="3d" class="py-32 px-6 bg-mesh relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-surface-dark via-transparent to-surface-dark"></div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <span class="text-neon-green text-sm font-mono tracking-widest uppercase">Section 04</span>
                <h2 class="text-5xl md:text-7xl font-black mt-4 text-gradient-warm">3D Transforms</h2>
                <p class="text-white/40 mt-4 text-lg">perspective, rotateX, rotateY — hover each card</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 perspective-container">
                <div class="card-3d rounded-3xl p-8 bg-surface-card border border-white/5 cursor-pointer">
                    <div class="text-4xl mb-4">🎲</div>
                    <h3 class="text-xl font-bold mb-2">Rotate Y + X</h3>
                    <p class="text-white/40 text-sm">Hover to see 15° Y-axis rotation with X tilt and scale.</p>
                </div>
                <div class="card-3d rounded-3xl p-8 bg-gradient-to-br from-neon-purple/20 to-neon-pink/10 border border-neon-purple/20 cursor-pointer"
                    style="transition-delay:0.1s">
                    <div class="text-4xl mb-4">💎</div>
                    <h3 class="text-xl font-bold mb-2">Gradient + 3D</h3>
                    <p class="text-white/40 text-sm">Combining gradient backgrounds with 3D perspective transformations.
                    </p>
                </div>
                <div class="card-3d rounded-3xl p-8 glass neon-border-cyan cursor-pointer"
                    style="transition-delay:0.2s">
                    <div class="text-4xl mb-4">✨</div>
                    <h3 class="text-xl font-bold mb-2">Glass + 3D</h3>
                    <p class="text-white/40 text-sm">Glassmorphism meets 3D transforms for a layered depth effect.</p>
                </div>
            </div>

            <!-- Flip cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12 perspective-container">
                <div class="card-3d-flip h-56 cursor-pointer relative">
                    <div
                        class="absolute inset-0 rounded-3xl bg-gradient-to-br from-neon-cyan/20 to-neon-green/10 border border-neon-cyan/20 flex items-center justify-center backface-hidden">
                        <div class="text-center">
                            <div class="text-4xl mb-2">🔄</div>
                            <p class="text-xl font-bold">Hover to Flip</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-neon-pink to-neon-purple flex items-center justify-center"
                        style="backface-visibility:hidden;transform:rotateY(180deg)">
                        <div class="text-center">
                            <div class="text-4xl mb-2">🎉</div>
                            <p class="text-xl font-bold">Back Side!</p>
                        </div>
                    </div>
                </div>
                <div class="card-3d-flip h-56 cursor-pointer relative" style="transition-delay:0.15s">
                    <div
                        class="absolute inset-0 rounded-3xl bg-gradient-to-br from-neon-orange/20 to-neon-yellow/10 border border-neon-orange/20 flex items-center justify-center backface-hidden">
                        <div class="text-center">
                            <div class="text-4xl mb-2">🃏</div>
                            <p class="text-xl font-bold">Flip Card</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-neon-green to-neon-cyan flex items-center justify-center"
                        style="backface-visibility:hidden;transform:rotateY(180deg)">
                        <div class="text-center">
                            <div class="text-4xl mb-2">🌟</div>
                            <p class="text-xl font-bold">Revealed!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ╔═══════════════════════════════════════╗
     ║  SECTION 5 — CONTAINER QUERIES       ║
     ╚═══════════════════════════════════════╝ -->
    <section id="container" class="py-32 px-6 bg-surface-dark">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <span class="text-neon-orange text-sm font-mono tracking-widest uppercase">Section 05</span>
                <h2 class="text-5xl md:text-7xl font-black mt-4 text-gradient">Container Queries</h2>
                <p class="text-white/40 mt-4 text-lg">Cards that adapt based on their container size, not viewport</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6" x-data="{ layout: 'default' }">
                <div class="md:col-span-4 @container">
                    <div
                        class="rounded-3xl bg-surface-card border border-white/5 p-6 @sm:p-8 @md:flex @md:gap-6 @md:items-center transition-all">
                        <div
                            class="w-12 h-12 @md:w-16 @md:h-16 rounded-2xl bg-gradient-to-br from-neon-pink to-neon-purple flex items-center justify-center text-xl @md:text-2xl shrink-0 mb-4 @md:mb-0">
                            📦</div>
                        <div>
                            <h3 class="font-bold @md:text-xl">Small Container</h3>
                            <p class="text-white/40 text-sm mt-1">Adapts layout at @sm and @md breakpoints.</p>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-8 @container">
                    <div
                        class="rounded-3xl bg-surface-card border border-white/5 p-6 @sm:p-8 @lg:flex @lg:gap-8 @lg:items-center transition-all">
                        <div
                            class="w-12 h-12 @lg:w-20 @lg:h-20 rounded-2xl bg-gradient-to-br from-neon-cyan to-neon-green flex items-center justify-center text-xl @lg:text-3xl shrink-0 mb-4 @lg:mb-0">
                            📐</div>
                        <div>
                            <h3 class="font-bold @lg:text-2xl">Large Container</h3>
                            <p class="text-white/40 text-sm @lg:text-base mt-1">This container has more space, so it
                                uses @lg queries to create a horizontal layout with larger elements.</p>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-12 @container">
                    <div class="rounded-3xl bg-surface-card border border-white/5 p-6 @sm:p-8 @lg:p-10 transition-all">
                        <div class="@lg:flex @lg:items-center @lg:justify-between">
                            <div class="flex items-center gap-4 mb-4 @lg:mb-0">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-gradient-to-br from-neon-orange to-neon-yellow flex items-center justify-center text-2xl">
                                    🖥️</div>
                                <div>
                                    <h3 class="font-bold text-xl">Full Width Container</h3>
                                    <p class="text-white/40 text-sm">Using @lg for full-width responsive adaptation</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <span
                                    class="px-4 py-2 rounded-full bg-neon-cyan/10 text-neon-cyan text-sm font-medium border border-neon-cyan/20">@container</span>
                                <span
                                    class="px-4 py-2 rounded-full bg-neon-green/10 text-neon-green text-sm font-medium border border-neon-green/20">@lg</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ╔═══════════════════════════════════════╗
     ║  SECTION 6 — ADVANCED GRADIENTS      ║
     ╚═══════════════════════════════════════╝ -->
    <section id="gradients" class="py-32 px-6 bg-mesh relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-surface-dark via-transparent to-surface-dark"></div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <span class="text-neon-purple text-sm font-mono tracking-widest uppercase">Section 06</span>
                <h2 class="text-5xl md:text-7xl font-black mt-4 text-gradient-warm">Advanced Gradients</h2>
                <p class="text-white/40 mt-4 text-lg">Linear, radial, conic — every gradient type in Tailwind 4</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="h-48 rounded-3xl bg-linear-to-r from-neon-pink via-neon-purple to-neon-cyan flex items-end p-6">
                    <span class="glass px-3 py-1 rounded-full text-xs font-mono">bg-linear-to-r</span>
                </div>
                <div
                    class="h-48 rounded-3xl bg-linear-to-br from-neon-green via-neon-cyan to-neon-purple flex items-end p-6">
                    <span class="glass px-3 py-1 rounded-full text-xs font-mono">bg-linear-to-br</span>
                </div>
                <div class="h-48 rounded-3xl flex items-end p-6"
                    style="background:radial-gradient(circle at 30% 40%, oklch(0.7 0.32 350), oklch(0.6 0.35 305), oklch(0.15 0.02 270))">
                    <span class="glass px-3 py-1 rounded-full text-xs font-mono">radial-gradient</span>
                </div>
                <div class="h-48 rounded-3xl flex items-end p-6"
                    style="background:conic-gradient(from 0deg, oklch(0.7 0.32 350), oklch(0.8 0.2 195), oklch(0.8 0.3 145), oklch(0.6 0.35 305), oklch(0.75 0.25 55), oklch(0.7 0.32 350))">
                    <span class="glass px-3 py-1 rounded-full text-xs font-mono">conic-gradient</span>
                </div>
                <div class="h-48 rounded-3xl flex items-end p-6 animate-gradient-shift"
                    style="background:linear-gradient(270deg, oklch(0.7 0.32 350), oklch(0.8 0.2 195), oklch(0.6 0.35 305), oklch(0.7 0.32 350)); background-size:600% 600%">
                    <span class="glass px-3 py-1 rounded-full text-xs font-mono">animated gradient</span>
                </div>
                <div class="h-48 rounded-3xl flex items-end p-6"
                    style="background:repeating-conic-gradient(oklch(0.2 0.02 270) 0% 25%, oklch(0.25 0.02 270) 0% 50%); background-size:40px 40px">
                    <span class="glass px-3 py-1 rounded-full text-xs font-mono">repeating-conic</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ╔═══════════════════════════════════════╗
     ║  SECTION 7 — COLOR MIX & P3          ║
     ╚═══════════════════════════════════════╝ -->
    <section id="colors" class="py-32 px-6 bg-surface-dark">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <span class="text-neon-yellow text-sm font-mono tracking-widest uppercase">Section 07</span>
                <h2 class="text-5xl md:text-7xl font-black mt-4 text-gradient">Color-Mix & P3</h2>
                <p class="text-white/40 mt-4 text-lg">OKLCH perceptual colors and color-mix() blending</p>
            </div>
            <!-- OKLCH Swatches -->
            <div class="grid grid-cols-3 md:grid-cols-6 gap-4 mb-12">
                <div class="aspect-square rounded-2xl bg-neon-pink flex items-end p-3"><span
                        class="text-xs font-mono text-white/80 bg-black/30 px-2 py-0.5 rounded">neon-pink</span></div>
                <div class="aspect-square rounded-2xl bg-neon-cyan flex items-end p-3"><span
                        class="text-xs font-mono text-white/80 bg-black/30 px-2 py-0.5 rounded">neon-cyan</span></div>
                <div class="aspect-square rounded-2xl bg-neon-green flex items-end p-3"><span
                        class="text-xs font-mono text-white/80 bg-black/30 px-2 py-0.5 rounded">neon-green</span></div>
                <div class="aspect-square rounded-2xl bg-neon-purple flex items-end p-3"><span
                        class="text-xs font-mono text-white/80 bg-black/30 px-2 py-0.5 rounded">neon-purple</span></div>
                <div class="aspect-square rounded-2xl bg-neon-orange flex items-end p-3"><span
                        class="text-xs font-mono text-white/80 bg-black/30 px-2 py-0.5 rounded">neon-orange</span></div>
                <div class="aspect-square rounded-2xl bg-neon-yellow flex items-end p-3"><span
                        class="text-xs font-mono text-black/60 bg-white/30 px-2 py-0.5 rounded">neon-yellow</span></div>
            </div>
            <!-- Opacity modifiers -->
            <h3 class="text-xl font-bold mb-4">Opacity Modifiers</h3>
            <div class="flex gap-2 mb-12 flex-wrap">
                <div class="w-20 h-20 rounded-xl bg-neon-pink/100 flex items-center justify-center text-xs font-mono">
                    100%</div>
                <div class="w-20 h-20 rounded-xl bg-neon-pink/80 flex items-center justify-center text-xs font-mono">80%
                </div>
                <div class="w-20 h-20 rounded-xl bg-neon-pink/60 flex items-center justify-center text-xs font-mono">60%
                </div>
                <div class="w-20 h-20 rounded-xl bg-neon-pink/40 flex items-center justify-center text-xs font-mono">40%
                </div>
                <div class="w-20 h-20 rounded-xl bg-neon-pink/20 flex items-center justify-center text-xs font-mono">20%
                </div>
                <div class="w-20 h-20 rounded-xl bg-neon-pink/10 flex items-center justify-center text-xs font-mono">10%
                </div>
            </div>
            <!-- Color Mix Demo -->
            <h3 class="text-xl font-bold mb-4">color-mix() Blending</h3>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                <div class="h-24 rounded-2xl flex items-end p-3"
                    style="background:color-mix(in oklch, oklch(0.7 0.32 350), oklch(0.8 0.2 195) 20%)"><span
                        class="text-xs font-mono bg-black/30 px-2 py-0.5 rounded">pink 80 / cyan 20</span></div>
                <div class="h-24 rounded-2xl flex items-end p-3"
                    style="background:color-mix(in oklch, oklch(0.7 0.32 350), oklch(0.8 0.2 195) 40%)"><span
                        class="text-xs font-mono bg-black/30 px-2 py-0.5 rounded">pink 60 / cyan 40</span></div>
                <div class="h-24 rounded-2xl flex items-end p-3"
                    style="background:color-mix(in oklch, oklch(0.7 0.32 350), oklch(0.8 0.2 195) 50%)"><span
                        class="text-xs font-mono bg-black/30 px-2 py-0.5 rounded">pink 50 / cyan 50</span></div>
                <div class="h-24 rounded-2xl flex items-end p-3"
                    style="background:color-mix(in oklch, oklch(0.7 0.32 350), oklch(0.8 0.2 195) 60%)"><span
                        class="text-xs font-mono bg-black/30 px-2 py-0.5 rounded">pink 40 / cyan 60</span></div>
                <div class="h-24 rounded-2xl flex items-end p-3"
                    style="background:color-mix(in oklch, oklch(0.7 0.32 350), oklch(0.8 0.2 195) 80%)"><span
                        class="text-xs font-mono bg-black/30 px-2 py-0.5 rounded">pink 20 / cyan 80</span></div>
            </div>
        </div>
    </section>

    <!-- ╔═══════════════════════════════════════╗
     ║  SECTION 8 — ANIMATIONS              ║
     ╚═══════════════════════════════════════╝ -->
    <section id="animations" class="py-32 px-6 bg-mesh relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-surface-dark via-transparent to-surface-dark"></div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <span class="text-neon-cyan text-sm font-mono tracking-widest uppercase">Section 08</span>
                <h2 class="text-5xl md:text-7xl font-black mt-4 text-gradient">Animations</h2>
                <p class="text-white/40 mt-4 text-lg">Custom keyframes, stagger delays, and morphing shapes</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex flex-col items-center gap-4">
                    <div class="w-24 h-24 rounded-2xl bg-gradient-to-br from-neon-pink to-neon-purple animate-float">
                    </div>
                    <span class="text-xs font-mono text-white/40">animate-float</span>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div
                        class="w-24 h-24 rounded-2xl bg-gradient-to-br from-neon-cyan to-neon-green animate-bounce-soft">
                    </div>
                    <span class="text-xs font-mono text-white/40">animate-bounce-soft</span>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div
                        class="w-24 h-24 rounded-full bg-gradient-to-br from-neon-orange to-neon-yellow animate-spin-slow">
                    </div>
                    <span class="text-xs font-mono text-white/40">animate-spin-slow</span>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div class="w-24 h-24 bg-gradient-to-br from-neon-purple to-neon-pink animate-morph"></div>
                    <span class="text-xs font-mono text-white/40">animate-morph</span>
                </div>
            </div>
            <!-- Shimmer bar -->
            <div class="mt-16 h-2 rounded-full overflow-hidden bg-surface-card">
                <div class="h-full w-1/2 rounded-full animate-shimmer"
                    style="background:linear-gradient(90deg, transparent, oklch(0.7 0.32 350), oklch(0.8 0.2 195), transparent); background-size:200% 100%">
                </div>
            </div>
            <!-- Stagger demo -->
            <div class="mt-16 flex justify-center gap-3">
                <div class="w-4 h-16 rounded-full bg-neon-pink animate-bounce-soft stagger-1"></div>
                <div class="w-4 h-20 rounded-full bg-neon-cyan animate-bounce-soft stagger-2"></div>
                <div class="w-4 h-24 rounded-full bg-neon-green animate-bounce-soft stagger-3"></div>
                <div class="w-4 h-20 rounded-full bg-neon-purple animate-bounce-soft stagger-4"></div>
                <div class="w-4 h-16 rounded-full bg-neon-orange animate-bounce-soft stagger-5"></div>
                <div class="w-4 h-20 rounded-full bg-neon-yellow animate-bounce-soft stagger-6"></div>
                <div class="w-4 h-24 rounded-full bg-neon-pink animate-bounce-soft stagger-7"></div>
                <div class="w-4 h-16 rounded-full bg-neon-cyan animate-bounce-soft stagger-8"></div>
            </div>
        </div>
    </section>

    <!-- ╔═══════════════════════════════════════╗
     ║  SECTION 9 — DARK MODE               ║
     ╚═══════════════════════════════════════╝ -->
    <section class="py-32 px-6 bg-surface-dark dark:bg-surface-dark">
        <div class="max-w-4xl mx-auto text-center">
            <span class="text-neon-green text-sm font-mono tracking-widest uppercase">Section 09</span>
            <h2 class="text-5xl md:text-7xl font-black mt-4 text-gradient-warm">Dark Mode</h2>
            <p class="text-white/40 mt-4 text-lg mb-12">Toggle via the nav button — uses Tailwind 4 dark: variant</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div
                    class="rounded-3xl p-8 bg-white/5 dark:bg-white/5 border border-white/10 dark:border-white/10 text-left transition-all duration-500">
                    <div class="text-3xl mb-4">🌙</div>
                    <h3 class="text-xl font-bold dark:text-white text-white mb-2">Dark Theme</h3>
                    <p class="dark:text-white/50 text-white/50 text-sm">Native dark mode support with smooth transitions
                        between themes using CSS custom properties.</p>
                </div>
                <div
                    class="rounded-3xl p-8 bg-white/5 dark:bg-white/5 border border-white/10 dark:border-white/10 text-left transition-all duration-500">
                    <div class="text-3xl mb-4">☀️</div>
                    <h3 class="text-xl font-bold dark:text-white text-white mb-2">Light Theme</h3>
                    <p class="dark:text-white/50 text-white/50 text-sm">Toggle the switch in the navigation bar to see
                        the dark: variant transition smoothly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ╔═══════════════════════════════════════╗
     ║  SECTION 10 — INTERACTIVE FORMS      ║
     ╚═══════════════════════════════════════╝ -->
    <section id="forms" class="py-32 px-6 bg-mesh relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-surface-dark via-transparent to-surface-dark"></div>
        <div class="relative max-w-3xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-neon-pink text-sm font-mono tracking-widest uppercase">Section 10</span>
                <h2 class="text-5xl md:text-7xl font-black mt-4 text-gradient">Interactive Forms</h2>
                <p class="text-white/40 mt-4 text-lg">Focus rings, validation states, group hover effects</p>
            </div>

            <form class="glass-strong rounded-3xl p-8 md:p-12 space-y-6" @submit.prevent>
                <div class="group">
                    <label
                        class="block text-sm font-medium text-white/60 mb-2 group-focus-within:text-neon-cyan transition-colors">Full
                        Name</label>
                    <input type="text" placeholder="John Doe"
                        class="w-full px-5 py-4 rounded-2xl bg-white/5 border border-white/10 text-white placeholder:text-white/20 focus:outline-none focus:ring-2 focus:ring-neon-cyan/50 focus:border-neon-cyan/50 transition-all duration-300">
                </div>
                <div class="group">
                    <label
                        class="block text-sm font-medium text-white/60 mb-2 group-focus-within:text-neon-pink transition-colors">Email
                        Address</label>
                    <input type="email" placeholder="john@example.com"
                        class="w-full px-5 py-4 rounded-2xl bg-white/5 border border-white/10 text-white placeholder:text-white/20 focus:outline-none focus:ring-2 focus:ring-neon-pink/50 focus:border-neon-pink/50 transition-all duration-300 invalid:ring-2 invalid:ring-red-500/50 invalid:border-red-500/50">
                </div>
                <div class="group">
                    <label
                        class="block text-sm font-medium text-white/60 mb-2 group-focus-within:text-neon-green transition-colors">Message</label>
                    <textarea rows="4" placeholder="Tell us something amazing..."
                        class="w-full px-5 py-4 rounded-2xl bg-white/5 border border-white/10 text-white placeholder:text-white/20 focus:outline-none focus:ring-2 focus:ring-neon-green/50 focus:border-neon-green/50 transition-all duration-300 resize-none"></textarea>
                </div>
                <div class="flex items-center gap-3 group cursor-pointer" x-data="{ checked: false }"
                    @click="checked = !checked">
                    <div class="w-6 h-6 rounded-lg border-2 border-white/20 flex items-center justify-center transition-all duration-300"
                        :class="checked ? 'bg-neon-cyan border-neon-cyan' : 'group-hover:border-white/40'">
                        <svg x-show="checked" class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                    </div>
                    <span class="text-sm text-white/50 group-hover:text-white/70 transition-colors">I agree to push
                        Tailwind to the limit</span>
                </div>
                <button type="submit"
                    class="w-full py-4 rounded-2xl bg-gradient-to-r from-neon-pink via-neon-purple to-neon-cyan text-white font-bold text-lg hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 shadow-lg shadow-neon-purple/25 hover:shadow-neon-purple/40">
                    Submit Form ✨
                </button>
            </form>
        </div>
    </section>

    <!-- ░░░ FOOTER ░░░ -->
    <footer class="py-16 px-6 bg-surface-dark border-t border-white/5">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-3xl font-black text-gradient mb-4">Built with ❤️</p>
            <p class="text-white/30 text-sm">Laravel 10 × Tailwind CSS 4.0 × Alpine.js — Pushing every limit</p>
            <div class="flex justify-center gap-4 mt-6">
                <span class="px-3 py-1 rounded-full text-xs glass text-white/50">OKLCH</span>
                <span class="px-3 py-1 rounded-full text-xs glass text-white/50">P3 Gamut</span>
                <span class="px-3 py-1 rounded-full text-xs glass text-white/50">Container Queries</span>
                <span class="px-3 py-1 rounded-full text-xs glass text-white/50">3D Transforms</span>
                <span class="px-3 py-1 rounded-full text-xs glass text-white/50">Glassmorphism</span>
            </div>
        </div>
    </footer>

</body>

</html>