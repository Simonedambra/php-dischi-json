<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>disc stile json</title>

    <link rel="stylesheet" href="style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /bootstrap -->
</head>

<body>
    <div id="app">
        <header class="container-fluid gray d-flex">
            <img id="logo" class=" object-fit-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8UxSH3V2ihjiZD01nG0qeSv-EyXmIP3vOYQ&s" alt="logo">
            <h1 class="color-white py-3">spotify premium</h1>
        </header>

        <main class="container-fluid d-flex flex-wrap justify-content-center ">
            <div v-for="index in disc" class="col-2 m-5 gray rounded-1" style="height: 300px;">
                <div class=" col-12 h-75 d-flex justify-content-center mt-3">
                    <img class=" w-75 h-75 object-fit-cover rounded-2" :src="index.img" :alt="img">
                </div>



                <div class=" text-center color-white">{{index.title}}</div>


            </div>
        </main>




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