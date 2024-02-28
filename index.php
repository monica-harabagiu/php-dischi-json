<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi JSON</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>

    <div id="app">
        <header class="py-3 ">
            <div class="container">
                <figure class="m-0">
                    <img src="./assets/img/Spotify_logo.png" alt="Spotify Logo">
                </figure>
            </div>
        </header>

        <main class="py-5">
            <div class="container">
                <div class="row">
                    <div class="cards d-flex flex-wrap">
                        <div v-for="(element, index) in allDisks" :key="index"
                            class="card py-4 px-5 text-center d-flex flex-column gap-2">
                            <figure>
                                <img :src="element.poster" :alt="element.title">
                            </figure>
                            <h5 class="fw-bold ">{{ element.title }}</h5>
                            <h6>{{ element.author }}</h6>
                            <h5 class="fw-bold">{{ element.year}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>





    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>

</body>

</html>