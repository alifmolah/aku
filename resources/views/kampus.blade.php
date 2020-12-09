@extends('layout.main')

@section('title', 'Lokasi Kampus - Departemen Teknik Sipil')

@section('container')
        <div class="row mb-5 pl-5">
            <div class="col-10">
                <h1>Lokasi Kampus</h1>
                <div class="row">
                    <div class="col mt-4 posisi-peta">
                    <iframe class="border border-primary" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.2048441939805!2d119.50093547700565!3d-5.230487162416676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd7dee51dfbd964ea!2sTeknik%20Sipil%20Unhas!5e0!3m2!1sid!2sid!4v1607360884292!5m2!1sid!2sid" 
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <p class="ml-2 mt-4 text-center">Civil Engineering Building
                                    Fakultas Teknik, Kampus Gowa
                                    Jl. Poros Malino KM 6,
                                    Bontomarannu, Gowa.</p>
                    </div>
                </div>
            </div>
        </div>
@endsection