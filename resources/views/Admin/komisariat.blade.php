@extends('layout.admin')
@section('container')

<div class="container">
  <div class="row mt-5">
    <h1 class="mb-4">Daftar Komisariat</h1>

    <div class="row" id="anggota-list">
      @foreach ($komisariat as $item)
      <div class="col-md-4 mb-4">
        <a class="card" href="/{{ auth()->user()->jenisAkun }}/data-anggota/{{ $item->id }}"
          style="text-decoration: none">
          <div class="card-body">
            <h5 class="card-title text-center">
              <i class="fas fa-users"></i>
              <span class="space-between-icon">{{ $item->namaKomisariat }}</span>
            </h5>

            <hr>
            <p class="card-text"><strong>Tahun Berdiri:</strong>{{ $item->tahunBerdiri }}
            </p>
            <p class="card-text"><strong>Status:</strong> <span
                class="badge @if ($item->status === 'Aktif') badge-success @elseif($item->status === 'Nonaktif') badge-danger @endif">{{
                $item->status }}</span>
            </p>
            <p class="card-text"><strong>Angkatan Kader:</strong>{{ $item->angkatan }}</p>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>


<style>
  .circle-bar {
    position: relative;
    display: inline-block;
  }

  .circle-bar .circle {
    fill: none;
    stroke-width: 6px;
    stroke: #f1f1f1;
  }

  .circle-bar .bar {
    fill: none;
    stroke-width: 6px;
    stroke-linecap: round;
    stroke: #00b0f0;
    transform-origin: 50% 50%;
    transform: rotate(-90deg);
    animation: circle-bar-progress 1s linear forwards;
  }

  .circle-bar .progress {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 18px;
    font-weight: bold;
    color: #333;
    overflow: visible;
  }

  .divider {
    height: 100%;
    border-left: 1px solid #ccc;
    margin: 0 10px;
  }

  .card {
    border-radius: 8px;
    background-color: #ffffff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    transform: scale(1);
    overflow: hidden;
  }

  .card.expanded {
    transform: scale(1.2);
    z-index: 999;
    transform-origin: center center;
    grid-column: span;
  }

  .card.expanded .card-text.description .short-description {
    max-height: unset;
    overflow: visible;
  }

  .card.expanded .card-text.description .full-description {
    display: block;
  }

  .card-text.description .short-description {
    max-height: 70px;
    overflow: hidden;
    transition: max-height 0.2s ease-in-out;
  }

  .card-text.description .full-description {
    display: none;
  }

  .card.expanded .card-text.description .full-description {
    max-height: unset;
    overflow: visible;
  }

  .popup {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
  }

  .popup-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
    position: relative;
  }

  .popup-content .close {
    color: #aaa;
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
  }

  @keyframes circle-bar-progress {
    0% {
      stroke-dasharray: 0;
    }

    100% {
      stroke-dasharray: calc(226.08 * {
            {
            $item->progressAgenda
          }
        }

        / 100) 226.08;
    }
  }

  .circle-bar.blue .bar {
    stroke: #00b0f0;
  }

  .card {
    border-radius: 8px;
    background-color: #ffffff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
  }

  .card:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  }

  .card-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333333;
  }

  .card-body hr {
    margin-top: 10px;
    margin-bottom: 10px;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
  }

  .card-text {
    font-size: 16px;
    margin-bottom: 6px;
    color: #777777;
  }

  .badge {
    padding: 6px 10px;
    font-size: 14px;
    font-weight: bold;
    border-radius: 20px;
  }

  .badge-success {
    background-color: #28a745;
    color: #ffffff;
  }

  .badge-danger {
    background-color: #dc3545;
    color: #ffffff;
  }

  .row {
    justify-content: center;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    grid-gap: 20px;
  }

  .mt-5 {
    margin-top: 50px;
  }

  .mb-4 {
    margin-bottom: 30px;
  }

  h1 {
    text-align: center;
    font-size: 36px;
    font-weight: bold;
    color: #333333;
  }
</style>


@endsection