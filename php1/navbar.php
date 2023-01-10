<nav class="navbar navbar-default" role="navigation">
<div class="m-10 p-10 pt-12">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    
    <a class="navbar-brand" href="./"><b>MYAPP</b></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a href="./editar-usuario.php">VER</a></li>
    </ul>
    <form class="flex w-full items-center mt-2 sm:mt-8 sm:flex sm:justify-center lg:justify-start" role="search" action="./buscar.php">   
    <label for="simple-search" class="sr-only">Buscar</label>
    <div class="relative w-44">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-auto">
            
        </div>
        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" required name="s">
    </div>
    <button type="submit" class="px-2 bg-blue-900 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >&nbsp;
        <svg class="w-6 h-6  mx-2 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>

        
        <span class="sr-only">Search</span>
    </button>
    
</form>

  </div><!-- /.navbar-collapse -->
</div>
</nav>