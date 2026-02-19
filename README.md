# 🚀 Tailwind CSS 4 Showcase — Laravel 10

> **Pushing Tailwind CSS 4 to its absolute limits** — A stunning single-page UI showcase built on Laravel 10 demonstrating every cutting-edge feature of Tailwind CSS 4.0.

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Tailwind](https://img.shields.io/badge/Tailwind_CSS-4.0-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![Alpine.js](https://img.shields.io/badge/Alpine.js-3.x-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-6.x-646CFF?style=for-the-badge&logo=vite&logoColor=white)

---

## 🎯 Features Showcase

| Section | Feature | Tailwind 4 Capability |
|---------|---------|----------------------|
| 🏠 Hero | Animated orbs, gradient text | P3 OKLCH gradients, `@starting-style`, morphing blobs |
| 🪟 Glassmorphism | Frosted glass cards | `backdrop-blur`, `bg-white/10`, translucent borders |
| 💡 Neon Glow | Neon text & box shadows | Custom `text-shadow`, `box-shadow`, OKLCH colors |
| 🎲 3D Transforms | Tilt & flip cards | `perspective`, `rotateX/Y`, `transform-3d`, `backface-hidden` |
| 📦 Container Queries | Adaptive card layouts | `@container`, `@sm:`, `@md:`, `@lg:` |
| 🌈 Gradients | 6 gradient types | Linear, radial, conic, animated, repeating |
| 🎨 Color-Mix & P3 | Color blending swatches | `color-mix()`, `oklch()`, opacity modifiers |
| ✨ Animations | 8 custom animations | Float, morph, shimmer, bounce, spin, stagger delays |
| 🌙 Dark Mode | Theme toggle | `dark:` variant, Alpine.js toggle, smooth transitions |
| 📝 Forms | Interactive inputs | Focus rings, validation, `group-focus-within`, `invalid:` |

---

## 📋 Prerequisites

Pastikan kamu sudah menginstall software berikut:

| Software | Versi Minimum | Cek Versi |
|----------|--------------|-----------|
| **PHP** | 8.1+ | `php --version` |
| **Composer** | 2.x | `composer --version` |
| **Node.js** | 18+ | `node --version` |
| **npm** | 9+ | `npm --version` |

---

## 🛠️ Instalasi Laravel 10 (Step-by-Step)

### 1️⃣ Install Laravel 10 via Composer

```bash
# Buat project Laravel 10 baru (jika belum ada)
composer create-project laravel/laravel:^10.0 laravel10

# Atau jika sudah clone repo ini:
cd laravel10
composer install
```

### 2️⃣ Setup Environment

```bash
# Copy file environment
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 3️⃣ Install Node.js Dependencies

```bash
# Install semua package (Tailwind CSS 4, Vite, Alpine.js)
npm install
```

### 4️⃣ Jalankan Development Server

Buka **2 terminal** secara bersamaan:

**Terminal 1 — Laravel Server:**
```bash
php artisan serve
```
> Server akan berjalan di `http://localhost:8000`

**Terminal 2 — Vite Dev Server (untuk Tailwind CSS):**
```bash
npm run dev
```
> Vite akan compile CSS & JS secara real-time

### 5️⃣ Buka di Browser

```
http://localhost:8000
```

---

## 📦 Production Build

```bash
# Build CSS & JS untuk production
npm run build

# Optimasi Laravel
php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 🏗️ Struktur Project

```
laravel10/
├── app/
│   └── Providers/
│       └── AppServiceProvider.php
├── resources/
│   ├── css/
│   │   └── app.css              ← Tailwind 4 @theme config + custom utilities
│   ├── js/
│   │   └── app.js               ← Alpine.js setup
│   └── views/
│       └── welcome.blade.php    ← 🎨 Main showcase page (10 sections)
├── routes/
│   └── web.php                  ← Single route → showcase
├── composer.json                ← Laravel 10 dependencies
├── package.json                 ← Tailwind 4 + Vite + Alpine.js
├── vite.config.js               ← Vite + @tailwindcss/vite plugin
├── .env.example                 ← Environment template
└── README.md                   ← 📄 This file
```

---

## ⚡ Tech Stack

- **Laravel 10** — PHP framework for routing & Blade templating
- **Tailwind CSS 4.0** — Utility-first CSS with Oxide engine (Rust)
- **Vite 6** — Lightning-fast build tool with HMR
- **Alpine.js 3** — Lightweight JS for dark mode toggle & interactivity
- **@tailwindcss/vite** — First-party Vite plugin for Tailwind 4

---

## 🎨 Tailwind CSS 4 Features Yang Digunakan

### CSS-First Configuration
```css
@import "tailwindcss";

@theme {
    --color-neon-pink: oklch(0.7 0.32 350);
    --color-neon-cyan: oklch(0.8 0.2 195);
    --animate-float: float 6s ease-in-out infinite;
}
```

### OKLCH Colors (P3 Wide Gamut)
Semua custom color menggunakan format `oklch()` untuk dukungan P3 gamut — warna lebih vibrant di monitor modern.

### Container Queries
```html
<div class="@container">
    <div class="@sm:flex @md:gap-6 @lg:text-2xl">
        <!-- Adapts based on container, not viewport -->
    </div>
</div>
```

### 3D Transforms
```css
.card-3d:hover {
    transform: rotateY(15deg) rotateX(-5deg) scale(1.05);
}
```

### color-mix() Blending
```css
background: color-mix(in oklch, oklch(0.7 0.32 350), oklch(0.8 0.2 195) 50%);
```

---

## 📝 Catatan

- Project ini menggunakan **CDN-free setup** — semua assets di-bundle via Vite
- Pastikan menjalankan `npm run dev` **bersamaan** dengan `php artisan serve`
- Untuk production, jalankan `npm run build` terlebih dahulu
- Semua animasi custom didefinisikan di `resources/css/app.css`

---

## 📄 License

MIT License — Feel free to use, modify, and share!
