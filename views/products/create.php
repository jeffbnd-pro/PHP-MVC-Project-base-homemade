<?php
// Ta logique PHP ici
?>

<div
    style="max-width: 500px; margin: 20px auto; font-family: sans-serif; padding: 20px; border: 1px solid #ddd; border-radius: 10px; background-color: #f9f9f9;">
    <h2 style="color: #333; border-bottom: 2px solid #007BFF; padding-bottom: 10px;">Créer un Produit</h2>

    <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 10px;">

        <label style="font-weight: bold;">Name :</label>
        <input type="text" name="name" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <label style="font-weight: bold;">Brand :</label>
        <input type="text" name="brand" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <label style="font-weight: bold;">Reference :</label>
        <input type="text" name="reference" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <div style="display: flex; gap: 10px;">
            <div style="flex: 1;">
                <label style="font-weight: bold; display: block;">Quantity :</label>
                <input type="number" name="quantity"
                    style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
            </div>
            <div style="flex: 1;">
                <label style="font-weight: bold; display: block;">Price :</label>
                <input type="number" step="0.01" name="price"
                    style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
            </div>
        </div>

        <div style="display: flex; align-items: center; gap: 10px; padding: 10px 0;">
            <input type="checkbox" name="availability" id="availability" style="width: 18px; height: 18px;">
            <label for="availability" style="font-weight: bold;">Available ?</label>
        </div>

        <label style="font-weight: bold;">Choose category :</label>
        <select name="category-list"
            style="padding: 8px; border-radius: 4px; border: 1px solid #ccc; background: white;">
            <option value="">--Please choose an option--</option>
            <option value="dog">Faire boucle des options dispos en BDD</option>
        </select>

        <label style="font-weight: bold;">User :</label>
        <select name="user-list" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc; background: white;">
            <option value="">--Please choose an option--</option>
            <option value="dog">Faire boucle des options dispos en BDD</option>
        </select>

        <button type="submit"
            style="margin-top: 10px; padding: 12px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
            Ajouter le produit
        </button>
    </form>
</div>