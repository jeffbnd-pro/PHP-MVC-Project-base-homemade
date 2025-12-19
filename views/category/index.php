<h2>Catégorie</h2>

<p><a href="/category/create">+ Ajouter</a></p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($category as $c): ?>
            <tr>
                <td><?= (int) $c['id'] ?></td>
                <td><?= htmlspecialchars($c['name']) ?></td>
                <td><?= htmlspecialchars((string) ($c['description'] ?? '')) ?></td>
                <td>
                    <a href="/category/edit?id=<?= (int) $c['id'] ?>">Éditer</a>
                    <form action="/category/delete" method="POST"
                        onsubmit="return confirm('Voulez vous vraiment supprimer cette catégorie ?')">
                        <input type="hidden" name="id" value="<?= (int) $c['id'] ?>">
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>