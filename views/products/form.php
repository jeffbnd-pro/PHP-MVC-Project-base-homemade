<div style="max-width: 500px; margin: 20px auto; font-family: sans-serif; padding: 20px; border: 1px solid #ddd; border-radius: 10px; background-color: #f9f9f9;">
    <h2 style="color: #333; border-bottom: 2px solid #007BFF; padding-bottom: 10px;">Créer un Produit</h2>

    <form action="/products/store" method="POST" style="display: flex; flex-direction: column; gap: 10px;">

        <label style="font-weight: bold;">Nom :</label>
        <input type="text" name="name" required style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <label style="font-weight: bold;">Marque :</label>
        <input type="text" name="brand" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <label style="font-weight: bold;">Référence :</label>
        <input type="text" name="reference" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <div style="display: flex; gap: 10px;">
            <div style="flex: 1;">
                <label style="font-weight: bold; display: block;">Quantité :</label>
                <input type="number" name="quantity" value="0" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
            </div>
            <div style="flex: 1;">
                <label style="font-weight: bold; display: block;">Prix :</label>
                <input type="number" step="0.01" name="price" value="0.00" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
            </div>
        </div>

        <div style="display: flex; align-items: center; gap: 10px; padding: 10px 0;">
            <input type="checkbox" name="availability" id="availability" style="width: 18px; height: 18px;">
            <label for="availability" style="font-weight: bold;">Disponible ?</label>
        </div>

        <label style="font-weight: bold;">Catégorie :</label>
        <select name="category_id" required style="padding: 8px; border-radius: 4px; border: 1px solid #ccc; background: white;">
            <option value="">-- Choisir une catégorie --</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id'] ?>"><?= htmlspecialchars($category['name']) ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit" style="margin-top: 10px; padding: 12px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
            Ajouter le produit
        </button>
    </form>
</div>