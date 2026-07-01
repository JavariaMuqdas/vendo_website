 <?php

    use App\Models\Cart;

    $total = Cart::cartItem();


    ?>

 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2F6B4F">
     <div class="container-fluid">
         <!-- Navbar toggler (for mobile) -->
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
             data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
             aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <!-- Full navbar content -->
         <div class="collapse navbar-collapse" id="navbarContent">

             <!-- Centered Menu (Home, Orders, Search) -->
             <ul class="navbar-nav text-amber-50  mb-2 mb-lg-0 align-items-center">
                 <div class="logo">
                     <span class="logo-icon">
                         <svg width="23" height="23" viewBox="0 0 24 24" fill="aliceblue" stroke="currentColor" stroke-width="2">
                             <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                             <line x1="3" y1="6" x2="21" y2="6" />
                             <path d="M16 10a4 4 0 0 1-8 0" />
                         </svg>
                     </span>
                 
                 </div>
                 <li class="nav-item">

                     <a class="navbar-brand nav-link " style="font-family: Sora;" href="/">Vendo</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="/">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="myorder">Orders</a>
                 </li>
                 <li class="nav-item">
                     <form action="/search" class="d-flex mx-2" role="search">
                         <input class="form-control me-2 search-box" type="search" name="query"
                             placeholder="Search" aria-label="Search" />
                         <button class="btn btn-outline-light" type="submit">Search</button>
                     </form>
                 </li>
             </ul>

             <!-- Right Side (Cart + Login/Logout) -->
             <ul class="navbar-nav ms-auto align-items-center">
                 <li class="nav-item">
                     <a href="/cartlist" class="nav-link text-white">🛒 Cart ({{ $total }})</a>
                 </li>

                 <li class="nav-item mx-2">
                     @if(Session::has('user'))
                     <div class="dropdown">
                         <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                             aria-expanded="false">
                             {{ Session::get('user')['name'] }}
                         </button>
                         <ul class="dropdown-menu dropdown-menu-end">
                             <li><a class="dropdown-item" href="/logout">Logout</a></li>
                         </ul>
                     </div>
                     @else
                     <a href="/login"><button type="button" class="btn btn-success">Login</button></a>
                     <a href="/register"><button type="button" class="btn btn-success">Register</button></a>
                     @endif
                 </li>
             </ul>

         </div>
     </div>
 </nav>