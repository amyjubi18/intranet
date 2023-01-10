<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Buscar datos en tiempo real con PHP, MySQL y AJAX">
    <meta name="author" content="Marco Robles">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">


</head>
<style>
    #lbl-total{
        font-size: x-large;
        text-align: center;
        margin-top: 20px;
        margin-top: 20px;
    }
        
    
</style>
<body>
<br>
    <main>
        <div class=" max-w-fit	p-8 my-10 sm:p-4 ">
            <h1 class="text-center text-5xl	 ">Archivos</h1>

            <div class=" max-w-fit	p-8 my-6  border-4 ">
            
            
            <form class=" w-full max-w-sm m-auto w-50 mt-4 mb-2 " action="" method="POST" enctype="multipart/form-data">
            
            
            <div class="flex space-x-2 justify-center">
            <span class="text-xs inline-block py-1 px-5 leading-none text-center whitespace-nowrap align-baseline ">

            <label for="num_registros" class=" text-gray-700  mt-2 text-2xl	">Mostrar: </label>

            </span>
            <span class="text-lg inline-block  py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline ">
                
            <select name="num_registros" id="num_registros" class=" ml-2 w-fit bg-white mt-2 border-4 border-blue-400  rounded-lg cursor-pointer hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight">
                        <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="10">10</option>
                        <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="25">25</option>
                        <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="50">50</option>
                        <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="100">100</option>
                    </select>
            </span>
            <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline ">

            <button class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg><a href="archivo-empleados.php">Cargar Archivos</a></button>

            </span>
            <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline rounded">
            <label for="campo" class="ml-2  text-gray-700 mt-2 text-2xl">Buscar: </label>
            </span>
            <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline  rounded">
                
            <input type="text" name="campo" id="campo" class="border-4 border-blue-400 ml-2 mt-2 rounded-lg px-4 py-2 focus:border-blue-500">
            </span>
            
                                </div>
            </form>
            
            

             
            <div class="row py-4">
                <div class="columns-1">
                    <table class='table w-full text-gray-800 dark:text-gray-400 border-solid border-gray-600 sm:p-4'>
                        <thead class='text-xs text-gray-700 uppercase bg-blue-200 dark:bg-gray-700 dark:text-gray-400'>
                            <tr class=" border-4 border-blue-400">
                            <th class=' border-4 border-blue-400 py-4 px-6 text-center'>#</th>
                            <th class=' border-4 border-blue-400 py-4 px-6 text-center'>Número del Expediente</th>
                            <th class=' border-4 border-blue-400 py-4 px-6 text-center'>Descripción</th>
                            <th class=' border-4 border-blue-400 py-4 px-6 text-center'>Archivo</th>
                            <th class=' border-4 border-blue-400 py-4 px-6 text-center'>Fecha</th>
                            <th class=' border-4 border-blue-400 py-4 px-6 text-center'>Categoría</th>
                            
                            <th>Acción</th>
                        </thead>

                        <!-- El id del cuerpo de la tabla. -->
                        <tbody id="content" class="text-center">

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mb-3">
                <div >
                    <label id="lbl-total" ></label>
                </div>

                <div class="inline-flex items-center -space-x-px" id="nav-paginacion"></div>
            </div>
        </div>
    </main>

    <script>
        let paginaActual = 1
        /* Llamando a la función getData() */
        getData(paginaActual)

        /* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
        document.getElementById("campo").addEventListener("keyup", function() {
            getData(1)
        }, false)
        document.getElementById("num_registros").addEventListener("change", function() {
            getData(paginaActual)
        }, false)


        /* Peticion AJAX */
        function getData(pagina) {
            let input = document.getElementById("campo").value
            let num_registros = document.getElementById("num_registros").value
            let content = document.getElementById("content")

            if (pagina != null) {
                paginaActual = pagina
            }

            let url = "./load.php"
            let formaData = new FormData()
            formaData.append('campo', input)
            formaData.append('registros', num_registros)
            formaData.append('pagina', paginaActual)

            fetch(url, {
                    method: "POST",
                    body: formaData
                }).then(response => response.json())
                .then(data => {
                    content.innerHTML = data.data
                    document.getElementById("lbl-total").innerHTML = 'Mostrando ' + data.totalFiltro +
                        ' de ' + data.totalRegistros + ' registros'
                    document.getElementById("nav-paginacion").innerHTML = data.paginacion
                }).catch(err => console.log(err))
        }
    </script>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
