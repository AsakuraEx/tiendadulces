@extends('layouts.main')

@section('title', 'Tienda Sarita')

@section('main')
    <section class="section mt-4">

        <img class="w-[90%] max-w-md aspect-square" src="images/site-images/index-img.svg" alt="Chica solicitando un pedido">

        <article class="grid grid-cols-1 gap-2 max-w-lg">
            <h2 class="text-3xl font-bold md:text-4xl">Bienvenido a mi dulceria</h2>
            <p class="font-light text-justify">
                En esta pagina web puedes visualizar todos los productos que tengo a la venta para ti. Ademas
                podras solicitarme los dulces que quieras y yo te los ire a entregar a donde me indiques.
            </p>
            <a class="button-primary" href="">Hacer un pedido</a>

            <img src="/public/images/site-icons/menu.svg" alt="">
        </article>


    </section>

    <section class="mt-8 border-t">
        <article class="text-center py-12">
            <h2 class="text-3xl font-bold">Contactame 👇🤩</h2>
            
            <div class="flex flex-col gap-4 py-8 md:flex-row md:justify-center md:space-x-24">
                <div class="flex flex-col-reverse gap-4 py-8 items-center mx-4">
                    <h2 class="text-2xl">Facebook</h2>
                    <a href="#">
                        <img class="w-[170px] t-blue-800" src="images/site-icons/facebook.svg" alt="Logo de Facebook">
                    </a>
                </div>

                <div class="flex flex-col-reverse gap-4 py-8 items-center mx-4">
                    <h2 class="text-2xl">Instagram</h2>
                    <a href="#">
                        <img class="w-[170px] t-blue-800" src="images/site-icons/instagram.svg" alt="Logo de Instagram">
                    </a>
                </div>

                <div class="flex flex-col-reverse gap-4 py-8 items-center mx-4">
                    <h2 class="text-2xl">WhatsApp</h2>
                    <a href="#">
                        <img class="w-[170px] t-blue-800" src="images/site-icons/whatsapp.svg" alt="Logo de WhatsApp">
                    </a>
                </div>

            </div>

        </article>
    </section>
@endsection

@section('footer')
    Este es el footer
@endsection