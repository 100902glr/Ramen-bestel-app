<?php
include '../menu.php';
$totaal = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../js/index.js"></script>
  <link rel="stylesheet" href="../css/index.css" />
</head>

<body>
  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <!-- Logo Section -->
      <div class="flex lg:flex-1">
        <a href="../index.php" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="../media/ramen.png" alt="" />
        </a>
      </div>

      <!-- Hamburger Menu Button (Visible on Mobile) -->
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-red-900">
          <span class="sr-only">Open main menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>

      <!-- Desktop Navigation Links -->
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="../index.php" class="text-sm/6 font-semibold text-red-900">Home</a>
        <a href="menuItems.php" class="text-sm/6 font-semibold text-red-900">Menu</a>
        <a href="team.html" class="text-sm/6 font-semibold text-red-900">Team</a>
        <a href="contact.html" class="text-sm/6 font-semibold text-red-900">Contact</a>
        <a href="winkelwagen.php" class="text-sm/6 font-semibold text-red-900">Winkelwagen</a>
      </div>

      <!-- Login Link (Desktop Only) -->
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="inlog.html" class="text-sm/6 font-semibold text-red-900">Log in <span
            aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>

    <!-- Mobile Menu (Hidden by Default) -->
    <div id="mobile-menu" class="hidden bg-red-900 lg:hidden">
      <a href="../index.php" class="block text-sm font-semibold text-white px-6 py-4">Home</a>
      <a href="menuItems.php" class="block text-sm font-semibold text-white px-6 py-4">Menu</a>
      <a href="team.html" class="block text-sm font-semibold text-white px-6 py-4">Team</a>
      <a href="contact.html" class="block text-sm font-semibold text-white px-6 py-4">Contact</a>
      <a href="#" class="block text-sm font-semibold text-white px-6 py-4">Winkelwagen</a>
    </div>
  </header>
  <div class="bg-white">
    <!--
          Mobile menu
      
          Off-canvas menu for mobile, show/hide based on off-canvas menu state.
        -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
      <!--
            Off-canvas menu backdrop, show/hide based on off-canvas menu state.
      
            Entering: "transition-opacity ease-linear duration-300"
              From: "opacity-0"
              To: "opacity-100"
            Leaving: "transition-opacity ease-linear duration-300"
              From: "opacity-100"
              To: "opacity-0"
          -->
   
        <!--
              Off-canvas menu, show/hide based on off-canvas menu state.
      
              Entering: "transition ease-in-out duration-300 transform"
                From: "-translate-x-full"
                To: "translate-x-0"
              Leaving: "transition ease-in-out duration-300 transform"
                From: "translate-x-0"
                To: "-translate-x-full"
            -->
      

          <!-- Links -->
         

          
                
            <!-- 'Men' tab panel, show/hide based on tab state. -->
           
          </div>
        </div>
      </div>
    </div>



    <main class="mx-auto max-w-2xl px-4 pb-24 pt-16 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
        Shopping Cart
      </h1>

      <div class="mt-12 lg:grid lg:grid-cols-12 lg:items-start lg:gap-x-12 xl:gap-x-16">
        <section aria-labelledby="cart-heading" class="lg:col-span-7">
          <h2 id="cart-heading" class="sr-only">
            Items in your shopping cart
          </h2>
            <?php
            if ($aantalRijenWagentje > 0) { ?>
          <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">
              <?php foreach ($resultatenWagentje as $rijWagentje) { ?>
                  <?php $totaal += ($rijWagentje["Prijs"] * $rijWagentje["Hoeveelheid"]); ?>
            <li class="flex py-6 sm:py-10">
              <div class="ml-4 flex flex-1 flex-col justify-between sm:ml-6">
                <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                  <div>
                    <div class="flex justify-between">
                      <h3 class="text-sm">
                        <a href="#" class="font-medium text-gray-700 hover:text-gray-800"><?= $rijWagentje["Naam"] ?></a>
                      </h3>
                    </div>
                    <div class="mt-1 flex text-sm">
                      <p class="text-gray-500">Aantal: <?=$rijWagentje["Hoeveelheid"]?> </p>
                    </div>
                    <p class="mt-1 text-sm font-medium text-gray-900">
                        €<?= $rijWagentje["Prijs"] * $rijWagentje["Hoeveelheid"] ?>
                    </p>
                  </div>

                  <div class="mt-4 sm:mt-0 sm:pr-9">
                    <div class="absolute right-0 top-0">
                        <form action="../winkelwagenREMOVE.php" method="POST">
                            <input type="hidden" name="Naam" value="<?= $rijWagentje["Naam"] ?>"/>
                      <button type="submit" class="-m-2 inline-flex p-2 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Remove</span>
                        <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path
                            d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                        </svg>
                      </button>
                        </form>
                    </div>
                  </div>
                </div>

                <p class="mt-4 flex space-x-2 text-sm text-gray-700">
                  <svg class="size-5 shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                    data-slot="icon">
                    <path fill-rule="evenodd"
                      d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                      clip-rule="evenodd" />
                  </svg>
                  <span>In stock</span>
                </p>
              </div>
            </li>
                        <hr>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                <p>Geen resultaten gevonden</p>
            <?php } ?>
          </ul>
        </section>

        <!-- Order summary -->
        <section aria-labelledby="summary-heading"
          class="mt-16 rounded-lg bg-gray-50 px-4 py-6 sm:p-6 lg:col-span-5 lg:mt-0 lg:p-8">
          <h2 id="summary-heading" class="text-lg font-medium text-gray-900">
            Order summary
          </h2>

          <dl class="mt-6 space-y-4">
            <div class="flex items-center justify-between">
              <dt class="text-sm text-gray-600">Subtotal</dt>
              <dd class="text-sm font-medium text-gray-900">€<?= $totaal?></dd>
            </div>
            <div class="flex items-center justify-between border-t border-gray-200 pt-4">
              <dt class="flex items-center text-sm text-gray-600">
                <span>Bezorg kosten</span>
              </dt>
              <dd class="text-sm font-medium text-gray-900">€5.00</dd>
            </div>
            <div class="flex items-center justify-between border-t border-gray-200 pt-4">
              <dt class="text-base font-medium text-gray-900">Order total</dt>
              <dd class="text-base font-medium text-gray-900">€<?= $totaal + 5?></dd>
            </div>
          </dl>

          <div class="mt-6">
            <button type="submit"
              class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">
              Checkout
            </button>
          </div>
        </section>
      </div>


      <footer class="bg-red-900">
        <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
          <nav class="-mb-6 flex flex-wrap justify-center gap-x-12 gap-y-3 text-sm/6" aria-label="Footer">
            <a href="contact.html" class="text-gray-400 hover:text-white">Contact</a>
            <a href="team.html" class="text-gray-400 hover:text-white">Team</a>
            <a href="menuItems.php" class="text-gray-400 hover:text-white">Menu</a>
            <a href="#" class="text-gray-400 hover:text-white">Winkelwagen</a>
            <a href="inlog.html" class="text-gray-400 hover:text-white">Log in</a>
          </nav>
          <div class="mt-16 flex justify-center gap-x-10">
            <a href="https://www.facebook.com/RickAstley/" class="text-gray-400 hover:text-gray-300">
              <span class="sr-only">Facebook</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd" />
              </svg>
            </a>
            <a href="https://www.instagram.com/officialrickastley/?hl=nl" class="text-gray-400 hover:text-gray-300">
              <span class="sr-only">Instagram</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd" />
              </svg>
            </a>
            <a href="https://x.com/rickastley" class="text-gray-400 hover:text-gray-300">
              <span class="sr-only">X</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
              </svg>
            </a>
            <a href="https://www.youtube.com/channel/UCuAXFkgsw1L7xaCfnd5JJOw" class="text-gray-400 hover:text-gray-300">
              <span class="sr-only">YouTube</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                  clip-rule="evenodd" />
              </svg>
            </a>
          </div>
          <p class="mt-10 text-center text-sm/6 text-gray-400">
            &copy; 2025 Ramen eet je samen, Inc. All rights reserved.
          </p>
        </div>
      </footer>


  </div>
</body>

</html>