<div class="carousel w-full h-screen relative group" id="autoCarousel">
  <!-- Slide 1 -->
  <div id="slide1" class="carousel-item relative w-full h-full transition-all duration-700">
    <img src="{{ asset('assets/image.png') }}" class="w-full h-full object-cover brightness-50" />
    
  </div>

  <!-- Slide 2 -->
  <div id="slide2" class="carousel-item relative w-full h-full transition-all duration-700">
    <img src="{{ asset('assets/image3.jpg') }}" class="w-full h-full object-cover brightness-50" />
   
  </div>

  <!-- Slide 3 -->
  <div id="slide3" class="carousel-item relative w-full h-full transition-all duration-700">
    <img src="{{ asset('assets/image222.jpg') }}" class="w-full h-full object-cover brightness-50" />
   
  </div>

  <!-- Slide 4 -->
  <div id="slide4" class="carousel-item relative w-full h-full transition-all duration-700">
    <img src="{{ asset('assets/image4.jpg') }}" class="w-full h-full object-cover brightness-50" />
    
  </div>
</div>

<script>
  let currentSlide = 1;
  const totalSlides = 4;
  const carousel = document.getElementById('autoCarousel');
  const intervalTime = 3000; 
  let slideInterval;

  function startAutoPlay() {
    slideInterval = setInterval(() => {
      currentSlide = currentSlide >= totalSlides ? 1 : currentSlide + 1;
      location.hash = '#slide' + currentSlide;
    }, intervalTime);
  }

  function stopAutoPlay() {
    clearInterval(slideInterval);
  }

  
  startAutoPlay();

   
  carousel.addEventListener('mouseenter', stopAutoPlay);
  carousel.addEventListener('mouseleave', startAutoPlay);
</script>
