<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<span class="eyebrow">Simple retail management</span>
<h1>Your store, organized in one clear place.</h1>
<p class="lead">This first POS release provides quick access to customer and staff account records while establishing a clean foundation for future sales and inventory features.</p>

<div class="actions">
    <a class="button" href="<?= base_url('customers') ?>">View customers</a>
    <a class="button secondary" href="<?= base_url('users') ?>">View staff</a>
</div>

<div class="cards">
    <article class="card"><h2>Customer Accounts</h2><p>Review customer names and contact information.</p></article>
    <article class="card"><h2>User Accounts</h2><p>See staff usernames, names, and assigned roles.</p></article>
    <article class="card"><h2>Ready to grow</h2><p>Add products, transactions, and database storage next.</p></article>
</div>
<?= $this->endSection() ?>
