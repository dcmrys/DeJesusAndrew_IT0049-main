<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<span class="eyebrow">About the project</span>
<h1>A practical foundation for a complete POS.</h1>
<p class="lead">Storefront POS is a starter CodeIgniter 4 application built to demonstrate controllers, routes, reusable views, and server-rendered data tables.</p>

<div class="cards">
    <article class="card"><h2>Version 1 scope</h2><p>Four connected pages with customer and user account listings.</p></article>
    <article class="card"><h2>Temporary data</h2><p>Sample records live in PHP arrays, so no database is required yet.</p></article>
    <article class="card"><h2>Next milestone</h2><p>Move records into models and a database, then add authentication and checkout.</p></article>
</div>
<?= $this->endSection() ?>
