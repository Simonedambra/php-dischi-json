<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>disc stile json</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /bootstrap -->
</head>

<body>
    <div id="app">

        <h1>home page</h1>
        <div class="container-fluid d-flex flex-wrap justify-content-center">
            <div v-for="index in disc" class="col-2 m-5 bg-dark-subtle rounded-4" style="height: 300px;">
                <div class=" col-12 h-75 ">
                    <img class=" w-100 h-100 object-fit-cover rounded-top-4" :src="index.img" :alt="img">
                </div>




                {{index.title}}

            </div>
        </div>




    </div>

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- /Vue -->
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- /axios -->
    <!-- javascript -->
    <script src="./src/main.js"></script>
    <!-- javascript -->
</body>

</html>