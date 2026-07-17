# Analisis Framework & Tech Stack Project (Wifi PTI Project)

Berdasarkan analisis file dan struktur direktori, project ini merupakan aplikasi berbasis web (Single Page Application - SPA) yang dibangun menggunakan ekosistem **Laravel (PHP)** untuk backend dan **React (JavaScript)** dengan **Inertia.js** untuk frontend.

Berikut adalah rincian lengkap dari tech stack yang digunakan:

## 1. Backend (Server-Side)
- **Framework Utama:** Laravel Framework (Versi 10.x)
- **Bahasa Pemrograman:** PHP (Minimum versi 8.2)
- **Manajemen Dependensi:** Composer
- **Routing & Jembatan ke Frontend:** Inertia.js (`inertiajs/inertia-laravel` v0.6.3)
- **Autentikasi & API Security:** Laravel Sanctum (`laravel/sanctum` v3.2)
- **Helper & Utilitas Tambahan:** 
  - `tightenco/ziggy` (v1.0) untuk penggunaan rute Laravel di JavaScript/Frontend.
  - `emir/laravel-webartisan` (v2.0) kemungkinan untuk menjalankan command artisan melalui web UI.
  - `guzzlehttp/guzzle` (v7.2) untuk melakukan HTTP request eksternal.
  - `doctrine/dbal` (v3.10) untuk manipulasi skema database lanjutan dan introspeksi database.

## 2. Frontend (Client-Side)
- **Library Utama:** React.js (`react` & `react-dom` v18.2.0)
- **Framework Penghubung:** Inertia.js untuk React (`@inertiajs/react` v1.0.0)
- **Build Tool:** Vite (`vite` v8.1.5, `laravel-vite-plugin` v1.0.2, `@vitejs/plugin-react` v4.2.0)
- **Manajemen Package:** npm (dengan `package.json` & `package-lock.json`)

### 2.1. Styling & UI Components
- **Framework CSS:** Tailwind CSS (`tailwindcss` v3.4.4)
- **Tailwind Plugins:** `@tailwindcss/forms` v0.5.10, `tailwindcss-animate` v1.0.7
- **CSS Preprocessor/Postprocessor:** PostCSS (`postcss` v8.4.38, `autoprefixer` v10.4.19)
- **Komponen UI Primitives (Headless UI):**
  - `@headlessui/react` v1.4.2
  - Radix UI (`@radix-ui/react-accordion` v1.2.12, `@radix-ui/react-slot` v1.2.3)
  - Pendukung styling dinamis untuk komponen (Sering digunakan bersama **shadcn/ui**): `class-variance-authority` v0.7.1, `clsx` v2.1.1, `tailwind-merge` v2.3.0
- **Iconography:** Lucide React (`lucide-react` v0.547.0)

### 2.2. Interaktivitas & Utilitas Frontend
- **Animasi:** Framer Motion (`framer-motion` v10.12.16)
- **HTTP Client:** Axios (`axios` v1.18.1)
- **Manipulasi Waktu & Tanggal:** Moment.js (`moment` v2.30.1)
- **Alert / Dialog:** SweetAlert2 (`sweetalert2` v11.26.4)
- **Generate PDF/Gambar dari DOM:** 
  - `html2canvas` v1.4.1
  - `jspdf` v4.2.1
- **Utility Functions:** Lodash (`lodash` v4.17.19)

## 3. Database
- Terlihat adanya direktori `database/migrations` (contoh: *add_id_paket_to_pembayaran_table*), menunjukkan project ini menggunakan Relational Database (Sangat mungkin **MySQL** atau **MariaDB** mengingat ini adalah standar ekosistem Laravel) dengan Eloquent ORM.

## 4. Testing & Development Tools
- **Testing:** PHPUnit (`phpunit/phpunit` v10.0), Mockery (`mockery/mockery` v1.4.4)
- **Development Environment (Docker):** Laravel Sail (`laravel/sail` v1.18) untuk pengembangan lokal berbasis container.
- **Starter Kit / Scaffolding:** Laravel Breeze (`laravel/breeze` v1.20) kemungkinan digunakan sebagai kerangka dasar autentikasi sebelum dimodifikasi.
- **Debugging:** Spatie Laravel Ignition (`spatie/laravel-ignition` v2.0), Nuno Maduro Collision (`nunomaduro/collision` v7.0)
- **Data Faking:** FakerPHP (`fakerphp/faker` v1.9.1) untuk pembuatan data dummy/seeder.
- **Transpiler JS:** Babel (`@babel/preset-react` v7.28.5, `@babel/preset-env`)

## Kesimpulan Arsitektur
Project ini mengadopsi arsitektur **Monolith Modern (Inertia.js)**, di mana Laravel berperan sebagai backend yang mengatur routing, database, dan logika bisnis, sedangkan React digunakan untuk membangun antarmuka pengguna (UI) yang reaktif layaknya Single Page Application (SPA), tanpa perlu membangun API terpisah (REST/GraphQL) untuk diakses frontend. Project ini sangat kaya dengan fitur UI modern dengan integrasi Tailwind CSS, animasi Framer Motion, dan Radix UI.
