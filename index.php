<!DOCTYPE html>
<html lang="en">

<head>
    <script src="script/app.js" defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KS Cards Randomizer</title>
    <link rel="shortcut icon" href="img/ks_logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/ks_logo.webp" alt="" width="60" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="docs.php">Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="raffle.php">Raffle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://kpopsource.com">Back to KS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-md">
        <div id="generateCard">
            <div id="rarity">
                <h1 id="error" hidden>Can't fetch data...</h1>
                <div>
                    <span class="deck" hidden></span>
                    <h1 id="cardName"></h1>
                </div>
                <button class="btn">Generate</button>
            </div>
            <div class="common type">
                <p>KOREAN COMMONS</p>
                <div class="buttons">
                    <button class="btn" data-deck="korCommon">General</button>
                    <button class="btn" data-deck="korDeck1">Deck 1</button>
                    <button class="btn" data-deck="korDeck2">Deck 2</button>
                    <br>
                    <button class="btn" data-deck="korBatch1">Batch 1</button>
                    <button class="btn" data-deck="korBatch11">Batch 1.1</button>
                    <button class="btn" data-deck="korBatch12">Batch 1.2</button>
                    <button class="btn" data-deck="korBatch2">Batch 2</button>
                    <button class="btn" data-deck="korBatch3">Batch 3</button>
                    <button class="btn" data-deck="korBatch4">Batch 4</button>
                    <button class="btn" data-deck="korBatch5">Batch 5</button>
                    <button class="btn" data-deck="korBatch6">Batch 6</button>
                    <button class="btn" data-deck="korBatch7">Batch 7</button>
                </div>
            </div>

            <div class="rare type">
                <p>KOREAN RARES</p>
                <div class="buttons">
                    <button class="btn" data-deck="korRare">General</button>
                    <button class="btn" data-deck="korRare_1">Deck 1</button>
                    <button class="btn" data-deck="korRare_2">Deck 2</button>
                    <button class="btn" data-deck="korRare_3">Deck 3</button>
                </div>
            </div>

            <div class="commmon type">
                <p>INTERNATIONAL</p>
                <div class="buttons">
                    <button class="btn" data-deck="intCommon">International Commons</button>
                    <button class="btn" data-deck="intRare">International Rares</button>
                </div>
            </div>

            <div class="commmon type">
                <p>ANIME/VG</p>
                <div class="buttons">
                    <button class="btn" data-deck="animeVg">Anime/VG</button>
                </div>
            </div>

            <div class="limited type">
                <p>LIMITED</p>
                <div class="buttons">
                    <button class="btn" data-deck="limitedAll">Limited All</button>
                    <button class="btn" data-deck="aprilFools">April Fools</button>
                    <button class="btn" data-deck="chuseok">Chuseok</button>
                    <button class="btn" data-deck="animals">Endangered Animals</button>
                    <button class="btn" data-deck="halloween">Halloween</button>
                    <button class="btn" data-deck="valentinesMixed">Valentines</button>
                    <button class="btn" data-deck="valentinesSolo">Valentines (Solo Artists)</button>
                </div>
            </div>

            <div class="commmon type">
                <p>MIXED COMMONS</p>
                <div class="buttons">
                    <button class="btn" data-deck="mixedAll">All Mixed</button>
                    <button class="btn" data-deck="mixedIdols">Mixed Idols</button>
                </div>
            </div>
        </div>
    </div>

    <footer>© Kpopsource <span id="year"></span></footer>
</body>

</html>