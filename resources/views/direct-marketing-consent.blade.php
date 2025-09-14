@extends('layouts.app')

@section('content')
<x-header />

<section class="bg-gray-100 px-4 md:px-14 py-[60px] md:py-[120px]">
    <div class="max-w-[870px] mx-auto">
        <h1 class="text-black-100 text-[32px] md:text-[40px] font-bold leading-[42px] md:leading-[48px] tracking-[-1.4px] mb-6">
            Sutikimas dėl tiesioginės rinkodaros
        </h1>
        <div class="space-y-6 text-black-100 text-base leading-6">
           <p>
           Pažymėdamas(-a) žemiau esantį langelį, sutinku, kad UAB Baltijos technologijų institutas tvarkytų mano asmens duomenis (vardą, pavardę, el. pašto adresą, telefono numerį, paskyros vardą, slaptažodį ir kt.) tiesioginės rinkodaros tikslais, įskaitant naujienlaiškių, pasiūlymų, informacijos apie kursus, renginius ar nuolaidų siuntimą el. paštu, SMS žinutėmis ir (arba) telefonu. 
           </p>
           <p>
            Jūs galite bet kada atsisakyti šių pranešimų, paspausdami atsisakymo nuorodą pranešimo apačioje arba susisiekdami su mumis el. paštu <a href="mailto:karolina.s@bit.lt" class="font-medium">karolina.s@bit.lt</a>. </p>
           </p>
        </div>
    </div>
    
</section>

<x-footer />
@endsection


