# 🚀 Tailwind CSS 4 Showcase — Laravel 10

> **Pushing Tailwind CSS 4 to its absolute limits** — A stunning single-page UI showcase built on Laravel 10 demonstrating every cutting-edge feature of Tailwind CSS 4.0.

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Tailwind](https://img.shields.io/badge/Tailwind_CSS-4.0-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![Alpine.js](https://img.shields.io/badge/Alpine.js-3.x-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-6.x-646CFF?style=for-the-badge&logo=vite&logoColor=white)

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



## 📄 License

MIT License — Feel free to use, modify, and share!
