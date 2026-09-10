<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<span class="eyebrow">Directory</span>
<h1>Customer Accounts</h1>
<p class="lead">Current customer contact records. This version reads the data from a temporary PHP array.</p>

<div class="table-wrap">
    <table>
        <thead><tr><th>Full name</th><th>Email address</th><th>Phone number</th></tr></thead>
        <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><strong><?= esc($customer['full_name']) ?></strong></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
