<div style="max-width: 500px; margin: 20px auto; font-family: sans-serif; padding: 20px; border: 1px solid #ddd; border-radius: 10px; background-color: #f9f9f9;">
    <h2 style="color: #333; border-bottom: 2px solid #007BFF; padding-bottom: 10px;">
        Créer un Produit
    </h2>

    <form action="/products/store" method="POST" style="display: flex; flex-direction: column; gap: 10px;">
        <?php
            require __DIR__ . '/form.php';
        ?>
        <button type="submit" style="margin-top: 10px; padding: 12px; background-color: color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
            Ajouter le produit  
        </button>
    </form>
</div>





