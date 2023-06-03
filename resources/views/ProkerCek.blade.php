@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Oktober</h5>
                    <p class="card-text">Program Kerja</p>
                    <p class="card-text">Siapa yang kerja</p>
                    <div class="circle-bar blue">
                        <svg class="circle" width="100" height="100">
                            <circle class="bar" cx="50" cy="50" r="40"></circle>
                        </svg>
                        <span class="progress">22</span>
                    </div>
                    <p class="card-text">22 Oktober 2022</p>
                    <p class="card-text">Presentasi pengerjaan</p>
                    <p class="card-text">Status: Belum selesai, dalam progress</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">November</h5>
                    <p class="card-text">Program Kerja</p>
                    <p class="card-text">Siapa yang kerja</p>
                    <div class="circle-bar green">
                        <svg class="circle" width="100" height="100">
                            <circle class="bar" cx="50" cy="50" r="40"></circle>
                        </svg>
                        <span class="progress">50</span>
                    </div>
                    <p class="card-text">22 November 2022</p>
                    <p class="card-text">Presentasi pengerjaan</p>
                    <p class="card-text">Status: Belum selesai, dalam progress</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Desember</h5>
                    <p class="card-text">Program Kerja</p>
                    <p class="card-text">Siapa yang kerja</p>
                    <div class="circle-bar orange">
                        <svg class="circle" width="100" height="100">
                            <circle class="bar" cx="50" cy="50" r="40"></circle>
                        </svg>
                        <span class="progress">80</span>
                    </div>
                    <p class="card-text">22 Desember 2022</p>
                    <p class="card-text">Presentasi pengerjaan</p>
                    <p class="card-text">Status: Belum selesai, dalam progress</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const progressElements = document.querySelectorAll(".progress");
            const barElements = document.querySelectorAll(".bar");

            for (let i = 0; i < progressElements.length; i++) {
                const progressElement = progressElements[i];
                const barElement = barElements[i];

                const progress = parseInt(progressElement.innerText);
                const radius = parseInt(barElement.getAttribute("r"));
                const circumference = 2 * Math.PI * radius;

                const offset = circumference - (progress / 100) * circumference;
                barElement.style.strokeDasharray = `${circumference} ${circumference}`;
                barElement.style.strokeDashoffset = offset;
            }
        });
    </script>
@endsection
