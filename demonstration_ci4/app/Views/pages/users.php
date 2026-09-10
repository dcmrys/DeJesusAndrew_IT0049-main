<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<span class="eyebrow">Team access</span>
<h1>User Accounts</h1>
<p class="lead">Staff identities and responsibilities. This version reads the data from a temporary PHP array.</p>

<div class="table-wrap">
    <table>
        <thead><tr><th>Username</th><th>Full name</th><th>Role</th></tr></thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><strong><?= esc($user['username']) ?></strong></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><span class="badge"><?= esc($user['role']) ?></span></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
