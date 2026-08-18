<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Pendaftaran — Pesantern Hidayatullah Kudus</title>
    <meta
      name="description"
      content="Pendaftaran santri baru T.A. 2026/2027."
    />
    <link rel="icon" href="assets/logo.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/styles.css" />
  </head>
  <body>
    <header class="site-header">
      <div class="container header-inner">
        <a href="index.html" class="logo">
          <img src="assets/logo1.png" alt="Logo hidayatullah" />
          <div>
            <div class="logo-text-main">Pesantren Hidayatullah</div>
            <div class="logo-text-sub">Kudus</div>
          </div>
        </a>
       <nav class="nav">
          <a href="index.html">Beranda</a>
          <a href="tentang.html">Tentang</a>
          <a href="program.html">Program</a>
          <a href="fasilitas.html">Fasilitas</a>
          <a href="pendaftaran.php">Pendaftaran</a>
          <a href="login.php">Login</a>
          <a href="kontak.html">Kontak</a>
        </nav>
        <button class="menu-toggle" aria-label="Menu" aria-expanded="false">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
          >
            <line x1="3" y1="6" x2="21" y2="6" />
            <line x1="3" y1="12" x2="21" y2="12" />
            <line x1="3" y1="18" x2="21" y2="18" />
          </svg>
        </button>
      </div>
    </header>

    <section class="page-hero">
      <div class="container">
        <span class="eyebrow">Pendaftaran</span>
        <h1>Bergabunglah Bersama Kami</h1>
        <p>
          Tahun Ajaran 2026/2027 — Gelombang 1 dibuka hingga 31 Desember 2026.
        </p>
      </div>
    </section>

    <section class="block">
      <div
        class="container"
        style="
          display: grid;
          gap: 3rem;
          grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        "
      >
        <div>
          <h2 style="font-size: 1.75rem">Alur Pendaftaran</h2>
          <p style="color: var(--muted-fg); margin-top: 0.5rem">
            Empat langkah mudah untuk menjadi bagian dari keluarga besar
            Pesantren Hidayatullah Kudus.
          </p>
          <ol class="steps">
            <li>
              <div class="num">01</div>
              <div>
                <h3>Isi Formulir Online</h3>
                <p>Lengkapi data calon santri pada formulir di samping.</p>
              </div>
            </li>
            <li>
              <div class="num">02</div>
              <div>
                <h3>Unggah Dokumen</h3>
                <p>Rapor 2 semester terakhir, akta lahir, pas foto, dan KK.</p>
              </div>
            </li>
            <li>
              <div class="num">03</div>
              <div>
                <h3>Tes Seleksi</h3>
                <p>
                  Tes akademik, baca tulis Al-Qur'an, dan wawancara orang tua.
                </p>
              </div>
            </li>
            <li>
              <div class="num">04</div>
              <div>
                <h3>Pengumuman</h3>
                <p>
                  Hasil seleksi diumumkan 7 hari setelah tes, lalu daftar ulang.
                </p>
              </div>
            </li>
          </ol>
        </div>
        <form class="form-card" action="php/proses_daftar.php" method="POST">
          <h3>Formulir Pendaftaran</h3>
          <p class="sub">Isi data di bawah ini.</p>
          <div
            id="daftar-success"
            class="form-success"
            hidden
            style="
              background: rgba(212, 162, 58, 0.15);
              color: var(--gold);
              border-color: rgba(212, 162, 58, 0.4);
            "
          >
            ✓ Pendaftaran terkirim! Tim kami akan menghubungi Anda 1–2 hari
            kerja.
          </div>
          <label class="field"
            ><span>Nama Lengkap Calon Santri</span><input required name="nama"
          /></label>
          <label class="field"
            ><span>Email Orang Tua</span
            ><input required type="email" name="email"
          /></label>
          <label class="field"
            ><span>No. WhatsApp</span><input required name="wa"
          /></label>
          <div class="field-row">
            <label class="field"
              ><span>Asal Sekolah</span><input required name="sekolah"
            /></label>
            <label class="field"
              ><span>Jenjang Tujuan</span>
              <select required name="jenjang">
                <option value="">Pilih...</option>
                <option>SMP</option>
                <option>SMK</option>
                <option>PPTQ</option>
              </select>
            </label>
          </div>
          <button
            type="password"
            class="btn btn-gold"
          >
            Kirim Pendaftaran
          </button>
        </form>
      </div>
    </section>

    <footer class="site-footer">
      <div class="container footer-grid">
        <div>
          <h3>PonPes Hidayatullah Kudus</h3>
          <p style="margin-top: 0.75rem; max-width: 420px">
            Membentuk generasi Qur'ani yang cerdas, berakhlak mulia, dan siap
            menjadi pemimpin masa depan dengan pendidikan terpadu berstandar
            internasional.
          </p>
          <div class="socials">
            <a href="#" aria-label="Instagram"
              ><svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
              >
                <rect x="2" y="2" width="20" height="20" rx="5" />
                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" /></svg
            ></a>
            <a href="#" aria-label="Facebook"
              ><svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
                /></svg
            ></a>
            <a href="#" aria-label="Youtube"
              ><svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"
                />
                <polygon
                  points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"
                /></svg
            ></a>
          </div>
        </div>
        <div>
          <h4>Tautan</h4>
          <ul>
            <li><a href="tentang.html">Tentang Kami</a></li>
            <li><a href="program.html">Program Pendidikan</a></li>
            <li><a href="fasilitas.html">Fasilitas</a></li>
            <li><a href="pendaftaran.php">Pendaftaran</a></li>
             <li><a href="login.php">Login</a></li>
          </ul>
        </div>
        <div>
          <h4>Kontak</h4>
          <ul class="contact-list">
            <li>
              <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
              >
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" /></svg
              >Jl. Raya Kudus - Jepara No.KM.5, Kedungdowo, Kec. Kaliwungu, Kabupaten Kudus, Jawa Tengah 59332
            </li>
            <li>
              <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
                /></svg
              >+62 251 123 4567
            </li>
            <li>
              <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                />
                <polyline points="22,6 12,13 2,6" /></svg
              >www.elhaku.com
            </li>
          </ul>
        </div>
      </div>
      <div class="copy">
        © <span id="year"></span> PonPEs Hidayatullah Kudus. Semua hak
        dilindungi.
      </div>
    </footer>
    <script src="js/main.js"></script>
    <div id="toast-success" class="toast">
  ✅ Pendaftaran berhasil dikirim!
</div>
<script>
  const urlParams = new URLSearchParams(window.location.search);
  const toast = document.getElementById("toast-success");

  if (toast && urlParams.get('success') === '1') {
    toast.classList.add("show");

    setTimeout(() => {
      toast.classList.remove("show");
    }, 3000);

    // hapus ?success=1 dari URL
    window.history.replaceState({}, document.title, window.location.pathname);
  }
</script>
  </body>
</html>
