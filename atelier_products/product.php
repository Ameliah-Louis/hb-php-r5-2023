<?php
// Vérification d'erreur
// Pour pouvoir interrompre le script au plus tôt
if (!isset($_GET['id'])) {
  http_response_code(400);
  echo "L'id est requis dans l'URL";
  exit;
}

$urlId = intval($_GET['id']);

if ($urlId === 0) {
  http_response_code(400);
  echo "L'id est incorrect";
  exit;
}

require_once 'data/products.php';
require_once 'layout/header.php';

// $urlId = $_GET['id'] ?? null;
// $urlId = array_key_exists('id', $_GET) ? $_GET['id'] : null;

// J'isole les ID des produits dans un tableau
// Ce tableau est donc indexé de la même façon que l'original
// Les ID sont positionnés dans $productsIds comme les produits dans $products
$productsIds = array_column($products, 'id');
// Je cherche donc la position du produit dont l'ID m'a été passé dans l'URL
$productKey = array_search($urlId, $productsIds);

// Clé non trouvée => array_search renvoie false
if ($productKey === false) {
  http_response_code(404);
  echo "Produit non trouvé";
  exit;
}

// On est comme dans le dernier "else" d'une chaîne de if :
// Si on arrive là, c'est qu'on a évacué tous les scénarios d'erreur
// qu'on avait prévus.
// Donc notre produit existe, et on peut l'afficher.
// var_dump($products[$productKey]);
$product = $products[$productKey];

// foreach ($products as $el) {
//   if ($el['id'] === $urlId) {
//     var_dump($el);
//     exit;
//   }
//   // $el['id'] == $urlId && $product = $el;
// }


// if (!isset($product)) {
//   echo "Aucun produit correspondant";
// } else {
//   var_dump($product);
// }
?>

<p style="text-align: center;" class="mt-2">
  <a href="index.php">
    <img src="assets/arrow-left.svg" alt="Back" class="icon" />
  </a>
</p>

<h1><?php echo $product['name']; ?></h1>

<div class="product-container">
  <div class="cover">
    <img src="<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>" />
    <div class="price">
      <?php echo $product['price']; ?> €
    </div>
  </div>
  <div class="tags center mt-2">
    <?php foreach ($product['tags'] as $tagIndex) { ?>
      <div class="tag" style="background-color: <?php echo $tags[$tagIndex]['color']; ?>">
        <?php echo $tags[$tagIndex]['name']; ?>
      </div>
    <?php } ?>
  </div>
  <div class="content">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, deserunt dolores possimus facere quidem fuga? Repudiandae, tempora? Nulla animi blanditiis nisi architecto, esse neque aliquam, et officia possimus, iusto dignissimos.</p>
    <p>Fuga corrupti labore quos. Facere autem at praesentium id reiciendis placeat temporibus blanditiis beatae nam ad quidem fuga, molestias, unde ipsum eum exercitationem et architecto laudantium! Asperiores voluptatum sit nostrum.</p>
    <p>Id sapiente commodi distinctio aliquid deserunt veritatis vitae repellendus accusantium amet assumenda officia, iure placeat qui, ad delectus nostrum. Aspernatur nam voluptatibus odit aut ipsam vitae pariatur autem quod earum!</p>
    <p>Accusamus dolores labore, suscipit dignissimos fugit accusantium. Animi ut quos alias eaque aperiam dicta magni aspernatur ab omnis deleniti repellendus accusantium in dolorum dolore sunt, expedita neque sit illum quo.</p>
    <p>Voluptatem facere eligendi dolores excepturi dicta, deserunt animi quos, voluptas, voluptatibus repellat tempora. Illum dignissimos amet quis eum tenetur accusamus placeat dolorem? Beatae, animi aspernatur qui veritatis pariatur ad hic.</p>
  </div>
</div>

<?php require_once 'layout/footer.php';
