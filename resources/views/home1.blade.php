@extends('parent.master')

@section('contenu')

<div style="background-color: #0a58ca">


       <div class="row m-5 jumbotron" style="background-color: #0c5460">
           <div class="col-lg-2 " style="background: green">
               <div class="list-group" style="font-size: 2rem">
                   @foreach($categories as $categorie)
                       <a href="{{ route('categorie',$categorie) }}">{{ $categorie->nom }}</a>
                   @endforeach
               </div>
           </div>

           <div class="img-fluid row col-lg-10">
               <div class="col-lg-5 img-fluid" style="object-position: top">
                   <img src="{{ asset('images/shopping.jpeg') }}" alt="" width="590px" height="600">
               </div>
               <div class="col-lg-5 img-fluid" style="opacity: inherit">
                   <img src="{{ asset('images/vetement.jpeg') }}" alt="" width="760" height="600">
               </div>
           </div>


       </div>

       <div class="container" style="background-color: darkcyan">
       <div class="row">
         @foreach($produits as $produit)
             <div class="col-lg-3 mt-4">
                 <a href="{{ route('produit', $produit->id) }}"><strong>{{$produit->nom}}</strong></a>
                 <div class="card img-fluid">
                     <img src="{{ asset('images/'.$produit->image )}}" alt="" width="220" height="200">
                 </div>
                 <div class="card-body">

                     <p> {{$produit->description}}</p>
                     <span class="text-primary" style="font-size: 1.5rem">Prix: {{$produit->prix}} FCFA</span>
                 </div>


                 <div  class="textt-center" >
                    <a href="{{ route('produits.edit', $produit->id) }}">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                    </a>
                </div>


             </div>
           @endforeach

       </div>



   </div>



<div class="mt-2">
    <footer class="bg-primary text-white text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Footer Content</h5>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-0">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>


 </div>

</div>



@endsection
