@extends('partial.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article class="article">
                    <h1 class="article__title">Detail Berita</h1>

                    <div class="article__image">
                        <img src="https://dummyimage.com/600x400/000/fff" alt="Gambar Berita">
                    </div>

                    <div class="article__info">
                        <p class="article__category">Kategori: Berita Utama</p>
                        <p class="article__date">19 Juni 2023</p>
                    </div>

                    <div class="article__content">
                        <h2 class="article__subtitle">Judul Berita</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate risus non sem
                            sollicitudin finibus. Integer quis elit lectus. Mauris sed ipsum ac arcu facilisis rhoncus.
                            Morbi non dapibus nisi. Nullam sed lacinia nisi. Ut consectetur euismod magna, a lobortis
                            risus suscipit vel. Aenean sed ante id odio interdum ullamcorper. Proin tincidunt nibh
                            velit, id venenatis orci tristique vitae. Ut malesuada leo mauris, eget hendrerit velit
                            eleifend nec.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate risus non sem
                            sollicitudin finibus. Integer quis elit lectus. Mauris sed ipsum ac arcu facilisis rhoncus.
                            Morbi non dapibus nisi. Nullam sed lacinia nisi. Ut consectetur euismod magna, a lobortis
                            risus suscipit vel. Aenean sed ante id odio interdum ullamcorper. Proin tincidunt nibh
                            velit, id venenatis orci tristique vitae. Ut malesuada leo mauris, eget hendrerit velit
                            eleifend nec.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate risus non sem
                            sollicitudin finibus. Integer quis elit lectus. Mauris sed ipsum ac arcu facilisis rhoncus.
                            Morbi non dapibus nisi. Nullam sed lacinia nisi. Ut consectetur euismod magna, a lobortis
                            risus suscipit vel. Aenean sed ante id odio interdum ullamcorper. Proin tincidunt nibh
                            velit, id venenatis orci tristique vitae. Ut malesuada leo mauris, eget hendrerit velit
                            eleifend nec.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate risus non sem
                            sollicitudin finibus. Integer quis elit lectus. Mauris sed ipsum ac arcu facilisis rhoncus.
                            Morbi non dapibus nisi. Nullam sed lacinia nisi. Ut consectetur euismod magna, a lobortis
                            risus suscipit vel. Aenean sed ante id odio interdum ullamcorper. Proin tincidunt nibh
                            velit, id venenatis orci tristique vitae. Ut malesuada leo mauris, eget hendrerit velit
                            eleifend nec.
                        </p>
                    </div>
                </article>

                <nav class="article__pagination" aria-label="Halaman">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <span class="page-link">Sebelumnya</span>
                        </li>
                        <li class="page-item active">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="/berita?page=2">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="/berita?page=3">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="/berita?page=2">Berikutnya</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-4">
                <!-- Daftar Berita Terbaru -->
                <div class="latest-news">
                    <h2 class="latest-news__title">Berita Terbaru</h2>

                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="latest-news__item">
                                <img src="https://dummyimage.com/100x100/000/fff" alt="Gambar Berita">
                                <div class="latest-news__content">
                                    <h3 class="latest-news__item-title">Judul Berita 1</h3>
                                    <p class="latest-news__item-date">19 Juni 2023</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="latest-news__item">
                                <img src="https://dummyimage.com/100x100/000/fff" alt="Gambar Berita">
                                <div class="latest-news__content">
                                    <h3 class="latest-news__item-title">Judul Berita 2</h3>
                                    <p class="latest-news__item-date">18 Juni 2023</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="latest-news__item">
                                <img src="https://dummyimage.com/100x100/000/fff" alt="Gambar Berita">
                                <div class="latest-news__content">
                                    <h3 class="latest-news__item-title">Judul Berita 3</h3>
                                    <p class="latest-news__item-date">17 Juni 2023</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* CSS Styles Go Here */

        .latest-news {
            margin-top: 30px;
        }

        .latest-news__title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .latest-news__item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .latest-news__item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 10px;
        }

        .latest-news__item-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .latest-news__item-date {
            font-size: 14px;
            color: #777;
        }
    </style>
@endsection
