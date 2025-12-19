<div>
    <label style="font-weight: bold;">Nom *</label><br>
    <input type="text" name="name"
           value="<?= htmlspecialchars($product['name'] ?? '') ?>" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;" required>
</div>

<div>
    <label style="font-weight: bold;">Marque</label><br>
    <input type="text" name="brand" value="<?= htmlspecialchars($product['brand'] ?? '') ?>" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
</div>

<div>
    <label style="font-weight: bold;">Référence</label><br>
    <input type="text" name="reference" value="<?= htmlspecialchars($product['reference'] ?? '') ?>" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
</div>

<div>
    <label style="font-weight: bold;">Prix</label><br>
    <input type="number" step="0.01" name="price" value="<?= htmlspecialchars((string) ($product['price'] ?? '0')) ?>" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
</div>

<div>
    <label style="font-weight: bold;">Quantité</label><br>
    <input type="number" name="quantity" value="<?= (int) ($product['quantity'] ?? 0) ?>" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
</div>

<div>
    <label style="font-weight: bold;">Disponible</label>
    <input type="checkbox" name="availability" value="1" <?= !empty($product['availability']) ? 'checked' : '' ?> style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
</div>

<div>
    <label style="font-weight: bold;">Catégorie</label><br>
    <select name="category_id" required>
        <?php foreach ($categories as $c): ?>
            <option value="<?= (int) $c['id'] ?>" <?= isset($product) && $product['category_id'] == $c['id'] ? 'selected' : '' ?> style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                <?= htmlspecialchars($c['name']) ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>