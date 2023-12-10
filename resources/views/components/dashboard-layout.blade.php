<html>
  <head>
    <title>HISTORIA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preload" as="style" href="https://www.cinemation.develobe.id/build/assets/app-ef435afa.css" /><link rel="stylesheet" href="https://www.cinemation.develobe.id/build/assets/app-ef435afa.css" />  </head>
  <body>
    <div class="w-full h-auto min-h-screen flex flex-col">
    @include('header')
   {{$slot}}
  <!-- Footer -->
<footer>
        <div class="w-full bg-develobe-900 h-[320px] text-white flex flex-row pt-12">
        <div class="w-6/12 pl-28 flex flex-col">
        <span class="font-quicksand text-4xl font-bold">HISTORIA</span>
        <span class="font-inter text-lg mt-4">Menyelami Warisan, <br>Menjembatani Masa Lalu<br>dan Masa Depan</span>
        </div>

        <div class="w-3/12 flex flex-col">
        <span class="font-inter font-bold text-lg">Website</span>
        <a href="/" class="font-inter text-lg mt-4 hover:text-develobe-500 duration-200">Home</a>
        <a href="/movies" class="font-inter text-lg mt-4 hover:text-develobe-500 duration-200">Kategori</a>
        </div>

        <div class="w-3/12 flex flex-col">
        <span class="font-inter font-bold text-lg">Social</span>
        <a href="https://www.instagram.com/develobe.education" target="_blank" class="font-inter text-lg mt-4 hover:text-develobe-500 duration-200">Instagram</a>
        <a href="https://discord.gg/mCqP3WBXgB" target="_blank" class="font-inter text-lg mt-4 hover:text-develobe-500 duration-200">Facebook</a>
        </div>
        </div>
</footer>    
      </div>
        <!-- End Footer -->
       

    </body>
</html>