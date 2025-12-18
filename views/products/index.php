<h2>Produits</h2>

<p><a href="/products/create">+ Ajouter</a></p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Marque</th>
            <th>Prix</th>
            <th>Qté</th>
            <th>Dispo</th>
            <th>Catégorie</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $produit): ?>
            <tr>
                <td><?= (int) $produit['id'] ?></td>
                <td><?= htmlspecialchars($produit['name']) ?></td>
                <td><?= htmlspecialchars((string) ($produit['brand'] ?? '')) ?></td>
                <td><?= number_format((float) $produit['price'], 2, ',', ' ') ?> €</td>
                <td><?= (int) $produit['quantity'] ?></td>
                <td><?= ((int) $produit['availability'] === 1) ? 'Oui' : 'Non' ?></td>
                <td><?= htmlspecialchars((string) ($produit['category_name'] ?? '')) ?></td>
                <td>
                    <a href="/products/show?id=<?= (int) $produit['id'] ?>">Voir</a> |
                    <a href="/products/edit?id=<?= (int) $produit['id'] ?>">Éditer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>