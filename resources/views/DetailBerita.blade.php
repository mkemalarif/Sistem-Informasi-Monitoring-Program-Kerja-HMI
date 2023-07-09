@extends('partial.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article class="article">
                    <h1 class="article__title">Detail Berita</h1>

                    <div class="article__image">
                        <img src="{{ asset('berita/'.$data->user_id.'_fotoberita_'.$data->id.'.jpg') }}" style="max-width: 100%" alt="Gambar Berita">
                    </div>

                    <div class="article__info">
                        <p class="article__category">Kategori: Berita Utama</p>
                        <p class="article__date">{{ $data->created_at->format('d M Y') }}</p>
                    </div>

                    <div class="article__content">
                        <h2 class="article__subtitle">{{ $data->judul }}</h2>
                        <p>
                            {!! $data->isiBerita !!}
                        </p>
                    </div>
                </article>
            
                @if(!auth()->check())
                {{-- <nav class="article__pagination" aria-label="Halaman">
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
                </nav> --}}
            </div>

            <div class="col-lg-4">
                <!-- Daftar Berita Terbaru -->
                <div class="latest-news">
                    <h2 class="latest-news__title">Berita Terbaru</h2>

                    <ul class="list-group">
                        @foreach($berita->take(5) as $item)
                        <li class="list-group-item">
                            <div class="latest-news__item">
                                <img src="{{ asset('berita/'.$item->user_id.'_fotoBerita_'.$item->id.'.jpg') }}" alt="Gambar Berita">
                                <div class="latest-news__content">
                                    <a href="/berita/{{ $item->id }}" class="latest-news__item-title" style="text-decoration: none">{{ $item->judul }}</a>
                                    <br>
                                    <a href="/berita/{{ $item->id }}" class="latest-news__item-date" style="text-decoration: none">{{ $item->created_at->format('d M Y') }}</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @elseif( auth()->check() && auth()->user()->jenisAkun === 'admin')
                <form method="POST" action="/admin/validasi-berita/{{ $data->id }}">
                    @csrf
                    @method('PUT')
                    
                    <button class="btn btn-success" type="submit"><i
                        class="fa fa-check"></i> Terima</button>
                    <a class="btn btn-danger" href="/admin/dashboard">Kembali</a>
                </form>
                @elseif(auth()->user()->jenisAkun === 'anggota')
                <a href="/anggota/edit-berita/{{ $data->id }}" class="btn btn-primary">Edit</a>
                <a class="btn btn-danger" href="/anggota/dashboard">Kembali</a>
            @endif
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
