<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite('resources/css/app.css')
        <link rel="icon" href="https://img.icons8.com/doodle/48/wood--v1.png" >
      <script src="https://kit.fontawesome.com/a22a5a415c.js" crossorigin="anonymous"></script>
       <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>TOLISHub - @yield('title')</title>
        
    </head>
<body class="bg-gray-100">

  <!--Main Nav -->
    <nav class="nav-color p-4 flex items-center justify-between">
    <div>
        
    <h1 class="text-white text-xl font-semibold dflex-acenter">
            <a href='/'>
                <img src="https://img.icons8.com/doodle/48/wood--v1.png" class="mr-10"> 
            </a> 
            <span>TOLISHub</span>
    </h1>
    </div>
  </nav>
<div class="container">
  <!--Menu -->
  <aside class="bg-gray-800 text-white w-64 min-h-screen p-4">
    <nav>
      <ul class="space-y-2">
        <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between p-2 hover:bg-gray-700">
            <div class="flex items-center">
                <i class="fa-solid fa-shop mr-2"></i>
              <span>Products</span>
            </div>
            <i class="fas fa-chevron-down text-xs"></i>
          </div>
          <ul class="desplegable ml-4 hidden">
            <li>
              <a href="/marketplace" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fa-solid fa-tags mr-2 text-xs"></i>
                Marketplace
              </a>
            </li>
          </ul>
        </li>
        <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between p-2 hover:bg-gray-700">
            <div class="flex items-center">
              <i class="fa-solid fa-user-shield mr-2"></i>
              <span>Admin Section</span>
            </div>
            <i class="fas fa-chevron-down text-xs"></i>
          </div>
          <ul class="desplegable ml-4 hidden">
            <li>
              <a href="/treatments" class="block p-2 hover:bg-gray-700 flex items-center">
               <i class="fa-solid fa-brush mr-2 text-xs"></i>
                    Treatments
              </a>
            </li>
            <li>
              <a href="/drying-methods" class="block p-2 hover:bg-gray-700 flex items-center">
              <i class="fa-solid fa-leaf mr-2 text-xs"></i>
                Drying methods
              </a>
            </li>
             <li>
              <a href="/species" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fa-solid fa-tree mr-2 text-xs"></i>
                Species
              </a>
            </li>
            <li>
              <a href="/grading-systems" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fa-regular fa-pen-to-square mr-2 text-xs"></i>
                 Grading Systems
              </a>
            </li>
            <li>
              <a href="/grades" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fa-solid fa-table-list mr-2 text-xs"></i>
                Grades
              </a>
            </li>
           
          </ul>
        </li>
      </ul>
    </nav>
  </aside>
  <!-- Main Content -->
  <main class="container mx-auto p-4">
    @yield('content')
  </main>
</div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const opcionesConDesplegable = document.querySelectorAll(".opcion-con-desplegable");

      opcionesConDesplegable.forEach(function (opcion) {
        opcion.addEventListener("click", function () {
          const desplegable = opcion.querySelector(".desplegable");

          desplegable.classList.toggle("hidden");
        });
      });
    });
  </script>
</body>
</html>