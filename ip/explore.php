<?php
// Array of menu items
$menuItems = [
    [
        "title" => "Non-Veg Starters",
        "image" => "https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/em-ginger-fried-img.png",
        "link" => "nonveg.php"
    ],
    [
        "title" => "Veg Starters",
        "image" => "https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/em-veg-starters-img.png",
        "link" => "Veg Starters.php"
    ],
    [
        "title" => "Soups",
        "image" => "https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/em-soup-img.png",
        "link" => "Soups.php"
    ],
    [
        "title" => "Fish & Sea food",
        "image" => "https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/em-grilled-seafood-img.png",
        "link" => "Fish & Sea food.php"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .explore-menu-section {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }
        .menu-section-heading {
            text-align: center;
            margin-bottom: 2rem;
        }
        .menu-item-card {
            transition: transform 0.2s;
        }
        .menu-item-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="explore-menu-section" id="exploreMenuSection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="menu-section-heading">Explore Menu</h1>
                </div>
                <?php foreach ($menuItems as $item): ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="shadow menu-item-card p-3 mb-3">
                            <img src="<?php echo $item['image']; ?>" class="menu-item-image w-100" alt="<?php echo $item['title']; ?>" />
                            <h1 class="menu-card-title"><?php echo $item['title']; ?></h1>
                            <a href="<?php echo $item['link']; ?>" class="menu-item-link">
                                ORDER NOW
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>
