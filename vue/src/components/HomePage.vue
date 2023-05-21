<template>
    <div id="homepage">
      <NavBarView /> <!-- Gunakan komponen NavBarView di sini -->

      <section id="berita" class="section">
        <h2>Berita</h2>
        <div class="carousel">
          <div class="carousel-inner">
            <div
              v-for="berita in daftarBerita"
              :key="berita.id"
              class="carousel-slide"
            >
              <img :src="berita.image" :alt="berita.title" class="slide-image" />
              <div class="slide-content">
                <h3>{{ berita.title }}</h3>
                <p>{{ berita.description }}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </template>

  <script>
  import NavBarView from "@/components/NavBarView"; // Import komponen NavBarView

  export default {
    name: "HomePage",
    components: {
      NavBarView // Daftarkan komponen NavBarView di sini
    },
    data() {
      return {
        daftarBerita: [
          {
            id: 1,
            title: "Judul Berita 1",
            description: "Deskripsi Berita 1",
            image: require("../assets/images/berita1.jpg"),
          },
          {
            id: 2,
            title: "Judul Berita 2",
            description: "Deskripsi Berita 2",
            image: require("../assets/images/berita2.jpg"),
          },
          {
            id: 3,
            title: "Judul Berita 3",
            description: "Deskripsi Berita 3",
            image: require("../assets/images/berita3.jpeg"),
          },
        ],
      };
    },
    mounted() {
      this.initCarousel();
    },
    methods: {
      initCarousel() {
        const carouselInner = document.querySelector(".carousel-inner");
        const slides = document.querySelectorAll(".carousel-slide");
        const slideWidth = slides[0].offsetWidth;
        const totalSlides = slides.length;
        let currentPosition = 0;

        // Set initial position
        carouselInner.style.transform = `translateX(${currentPosition}px)`;

        function nextSlide() {
          currentPosition -= slideWidth;
          if (currentPosition < -slideWidth * (totalSlides - 1)) {
            currentPosition = 0;
          }
          carouselInner.style.transform = `translateX(${currentPosition}px)`;
        }

        setInterval(nextSlide, 3000); // Auto slide every 3 seconds
      },
    },
  };
  </script>

  <style scoped>
  @import "../assets/css/Header.css";

  /* Styling untuk HomePage */
  </style>
