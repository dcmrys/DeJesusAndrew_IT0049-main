<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?> | Storefront POS</title>
    <style>
        :root { --navy: #132238; --blue: #2563eb; --pale: #eff6ff; --ink: #172033; --muted: #64748b; --line: #e2e8f0; }
        * { box-sizing: border-box; }
        body { margin: 0; color: var(--ink); background: #f8fafc; font: 16px/1.6 system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
        header { background: var(--navy); color: white; }
        .nav { width: min(1100px, calc(100% - 40px)); min-height: 72px; margin: auto; display: flex; align-items: center; justify-content: space-between; gap: 28px; }
        .brand { color: white; font-size: 1.18rem; font-weight: 800; text-decoration: none; letter-spacing: -.02em; }
        nav { display: flex; flex-wrap: wrap; gap: 6px; }
        nav a { padding: 8px 12px; border-radius: 8px; color: #cbd5e1; text-decoration: none; font-size: .92rem; }
        nav a:hover, nav a.active { color: white; background: rgba(255,255,255,.12); }
        main { width: min(1100px, calc(100% - 40px)); margin: 48px auto; }
        .eyebrow { color: var(--blue); font-size: .78rem; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; }
        h1 { max-width: 760px; margin: 8px 0 14px; font-size: clamp(2rem, 5vw, 3.6rem); line-height: 1.08; letter-spacing: -.045em; }
        h2 { margin: 0 0 8px; }
        .lead { max-width: 680px; color: var(--muted); font-size: 1.08rem; }
        .actions, .cards { display: flex; flex-wrap: wrap; gap: 16px; margin-top: 30px; }
        .button { display: inline-block; padding: 11px 18px; border: 1px solid var(--blue); border-radius: 9px; color: white; background: var(--blue); font-weight: 700; text-decoration: none; }
        .button.secondary { color: var(--blue); background: white; }
        .card { flex: 1 1 250px; padding: 24px; border: 1px solid var(--line); border-radius: 14px; background: white; box-shadow: 0 8px 30px rgba(15,23,42,.05); }
        .card p { margin-bottom: 0; color: var(--muted); }
        .table-wrap { margin-top: 28px; overflow-x: auto; border: 1px solid var(--line); border-radius: 14px; background: white; box-shadow: 0 8px 30px rgba(15,23,42,.05); }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 15px 18px; border-bottom: 1px solid var(--line); text-align: left; }
        th { color: #475569; background: #f8fafc; font-size: .76rem; letter-spacing: .06em; text-transform: uppercase; }
        tbody tr:last-child td { border-bottom: 0; }
        tbody tr:hover { background: var(--pale); }
        .badge { display: inline-block; padding: 3px 9px; border-radius: 999px; color: #1d4ed8; background: #dbeafe; font-size: .78rem; font-weight: 700; }
        footer { width: min(1100px, calc(100% - 40px)); margin: 60px auto 24px; color: var(--muted); font-size: .86rem; }
        @media (max-width: 700px) { .nav { padding: 16px 0; align-items: flex-start; flex-direction: column; gap: 10px; } main { margin-top: 34px; } }
    </style>
</head>
<body>
<header>
    <div class="nav">
        <a class="brand" href="<?= base_url() ?>">Storefront POS</a>
        <nav aria-label="Main navigation">
            <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="<?= base_url() ?>">Home</a>
            <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="<?= base_url('about') ?>">About</a>
            <a class="<?= $activePage === 'customers' ? 'active' : '' ?>" href="<?= base_url('customers') ?>">Customers</a>
            <a class="<?= $activePage === 'users' ? 'active' : '' ?>" href="<?= base_url('users') ?>">Users</a>
        </nav>
    </div>
</header>

<main><?= $this->renderSection('content') ?></main>

<footer>&copy; <?= date('Y') ?> Storefront POS &middot; CodeIgniter 4</footer>
</body>
</html>
