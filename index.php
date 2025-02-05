<?php
include "menu.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind.config.js"></script>
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="css/index.css" />
    <title>HomePage</title>
</head>
<body>
<div class="bg-red-900">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav
                class="flex items-center justify-between p-6 lg:px-8"
                aria-label="Global"
        >
            <!-- Logo Section -->
            <div class="flex lg:flex-1">
                <a href="index.php" class="-m-1.5 p-1.5">
                    <span class="sr-only">Our Company</span>
                    <img class="h-8 w-auto" src="media/ramen.png" alt="" />
                </a>
            </div>

            <!-- Hamburger Menu Button (Visible on Mobile) -->
            <div class="flex lg:hidden">
                <button
                        type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-100"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                            class="size-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true"
                            data-slot="icon"
                    >
                        <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                        />
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="index.php" class="text-sm/6 font-semibold text-white"
                >Home</a
                >
                <a
                        href="page's/menuItems.php"
                        class="text-sm/6 font-semibold text-white"
                >Menu</a
                >
                <a
                        href="page's/team.html"
                        class="text-sm/6 font-semibold text-white"
                >Team</a
                >
                <a
                        href="page's/contact.html"
                        class="text-sm/6 font-semibold text-white"
                >Contact</a
                >
                <a href="page's/winkelwagen.php" class="text-sm/6 font-semibold text-white"
                >Winkelwagen</a
                >
            </div>

            <!-- Login Link (Desktop Only) -->
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a
                        href="page's/inlog.html"
                        class="text-sm/6 font-semibold text-white"
                >Log in <span aria-hidden="true">&rarr;</span></a
                >
            </div>
        </nav>

        <!-- Mobile Menu (Hidden by Default) -->
        <div id="mobile-menu" class="hidden bg-red-900 lg:hidden">
            <a
                    href="index.php"
                    class="block text-sm font-semibold text-white px-6 py-4"
            >Home</a
            >
            <a
                    href="page's/menuItems.php"
                    class="block text-sm font-semibold text-white px-6 py-4"
            >Menu</a
            >
            <a
                    href="page's/team.html"
                    class="block text-sm font-semibold text-white px-6 py-4"
            >Team</a
            >
            <a
                    href="page's/contact.html"
                    class="block text-sm font-semibold text-white px-6 py-4"
            >Contact</a
            >
            <a href="page's/winkelwagen.php" class="block text-sm font-semibold text-white px-6 py-4"
            >Winkelwagen</a
            >
        </div>
    </header>

    <div class="relative isolate overflow-hidden pt-14">
        <img
                src="media/background.webp"
                alt=""
                class="absolute inset-0 -z-10 size-full object-cover blur"
        />
        <div
                class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true"
        >
            <div
                    class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="
              clip-path: polygon(
                74.1% 44.1%,
                100% 61.6%,
                97.5% 26.9%,
                85.5% 0.1%,
                80.7% 2%,
                72.5% 32.5%,
                60.2% 62.4%,
                52.4% 68.1%,
                47.5% 58.3%,
                45.2% 34.5%,
                27.5% 76.7%,
                0.1% 64.9%,
                17.9% 100%,
                27.6% 76.8%,
                76.1% 97.7%,
                74.1% 44.1%
              );
            "
            ></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center"></div>
                <div class="text-center">
                    <h1
                            class="text-balance text-5xl font-semibold tracking-tight text-white sm:text-7xl"
                    >
                        Ramen eet je samen!
                    </h1>
                    <p
                            class="mt-8 text-pretty text-lg font-medium text-gray-300 sm:text-xl/8 glow"
                    >
                        Bij onze ramen shop heb je de lekkerste en verste ramen die je
                        ooit gaat proeven!!!
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a
                                href="page's/menuItems.php"
                                class="rounded-md bg-red-700 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400"
                        >Menu!</a
                        >
                        <a
                                href="page's/team.html"
                                class="text-sm/6 font-semibold text-white"
                        >Leer meer over ons!<span aria-hidden="true">→</span></a
                        >
                    </div>
                </div>
            </div>
        </div>
        <div
                class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true"
        >
            <div
                    class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="
              clip-path: polygon(
                74.1% 44.1%,
                100% 61.6%,
                97.5% 26.9%,
                85.5% 0.1%,
                80.7% 2%,
                72.5% 32.5%,
                60.2% 62.4%,
                52.4% 68.1%,
                47.5% 58.3%,
                45.2% 34.5%,
                27.5% 76.7%,
                0.1% 64.9%,
                17.9% 100%,
                27.6% 76.8%,
                76.1% 97.7%,
                74.1% 44.1%
              );
            "
            ></div>
        </div>
    </div>
</div>
<div class="bg-red-900">
    <div
            class="mx-auto max-w-2xl px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8"
    >
        <!-- Details section -->
        <section aria-labelledby="details-heading">
          <div class="flex flex-col items-center text-center">
            <h2
              id="details-heading"
              class="text-3xl font-bold tracking-tight text-white sm:text-4xl"
            >
              Most Sold!
            </h2>
            <p class="mt-3 max-w-3xl text-lg text-gray-300">
              Dit zijn de topverkochten producten van Ramen Eet Je Samen. Dit
              zijn top producten voor jou om ook te proberen hier en nu!
            </p>
          </div>

          <div
            class="mt-16 grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:gap-x-8"
          >
            <div>
              <img
                src="media/Item1.jpg"
                alt="Drawstring top with elastic loop closure and textured interior padding."
                class="aspect-[3/2] w-full rounded-lg object-cover"
              />
              <p class="mt-8 text-base text-gray-300">
                Wat is Oden Ramen? Oden Ramen combineert twee Japanse
                klassiekers: de lichte, hartige bouillon van oden met de noedels
                en rijke smaken van ramen. Het is een unieke, verwarmende
                maaltijd die traditie en vernieuwing samenbrengt. Perfect voor
                liefhebbers van authentieke Japanse gerechten!
              </p>
            </div>
            <div>
              <img
                src="media/csm_1103-recipe-page-Spicy-Kimchi-Ramen-with-Pork_desktop_c8dc4e51e8.jpg"
                alt="Front zipper pouch with included key ring."
                class="aspect-[3/2] w-full rounded-lg object-cover"
              />
              <p class="mt-8 text-base text-gray-300">
                Wat zijn noedels? Noedels zijn veelzijdige deegwaren die
                wereldwijd geliefd zijn. Van Japanse ramen en udon tot Chinese
                mie en Italiaanse pasta, noedels vormen de basis van talloze
                gerechten. Ze worden gemaakt van ingrediënten zoals tarwe, rijst
                of boekweit en zijn perfect om smaken van bouillons, sauzen en
                toppings te absorberen. Een echte allemansvriend in de keuken!
              </p>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class="bg-gray-200 py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-4xl sm:text-center">
          <h2 class="text-base/7 font-semibold text-indigo-600"></h2>
          <p
            class="mt-2 text-pretty text-5xl font-semibold tracking-tight text-gray-900 sm:text-balance sm:text-6xl"
          >
            Combi Deals die je niet kan laten liggen!
          </p>
        </div>
        <p
          class="mx-auto mt-6 max-w-2xl text-pretty text-lg font-medium text-gray-600 sm:text-center sm:text-xl/8"
        >
          Onze combi deals bieden de perfecte balans tussen smaak en prijs, met
          zorgvuldig samengestelde gerechten die elkaar aanvullen. Zo geniet je
          van meer variatie en kwaliteit voor minder, ideaal voor elke
          gelegenheid!
        </p>
        <div class="mt-20 flow-root">
          <div
            class="isolate -mt-16 grid max-w-sm grid-cols-1 gap-y-16 divide-y divide-gray-100 sm:mx-auto lg:-mx-8 lg:mt-0 lg:max-w-none lg:grid-cols-3 lg:divide-x lg:divide-y-0 xl:-mx-4"
          >
            <div class="pt-16 lg:px-8 lg:pt-0 xl:px-14">
              <h3
                id="tier-basic"
                class="text-base/7 font-semibold text-gray-900"
              >
                Loner Deal!
              </h3>
              <p class="mt-6 flex items-baseline gap-x-1">
                <span
                  class="text-5xl font-semibold tracking-tight text-gray-900"
                  >$15</span
                >
              </p>
              <p class="mt-10 text-sm/6 font-semibold text-gray-900">
                Alles voor een gezonde maaltijd!
              </p>
              <ul role="list" class="mt-6 space-y-3 text-sm/6 text-gray-600">
                <li class="flex gap-x-3">
                  <svg
                    class="h-6 w-5 flex-none text-red-900"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Verse Oden Noodels!
                </li>
                <li class="flex gap-x-3">
                  <svg
                    class="h-6 w-5 flex-none text-red-900"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Een geluks koekje!
                </li>
                <li class="flex gap-x-3">
                  <svg
                    class="h-6 w-5 flex-none text-red-900"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Free drink!
                </li>
              </ul>
            </div>
            <div class="pt-16 lg:px-8 lg:pt-0 xl:px-14">
              <h3
                id="tier-essential"
                class="text-base/7 font-semibold text-gray-900"
              >
                Couple Deal!
              </h3>
              <p class="mt-6 flex items-baseline gap-x-1">
                <span
                  class="text-5xl font-semibold tracking-tight text-gray-900"
                  >€25</span
                >
              </p>
              <p class="mt-10 text-sm/6 font-semibold text-gray-900">
                Alles voor een makkelijke, romantische avond met jou en je
                schatje!
              </p>
              <ul role="list" class="mt-6 space-y-3 text-sm/6 text-gray-600">
                <li class="flex gap-x-3">
                  <svg
                    class="h-6 w-5 flex-none text-red-900"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  2 Verse gerechten naar keuze!
                </li>
                <li class="flex gap-x-3">
                  <svg
                    class="h-6 w-5 flex-none text-red-900"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Free dranks!
                </li>
                <li class="flex gap-x-3">
                  <svg
                    class="h-6 w-5 flex-none text-red-900"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Een kom kimchi!
                </li>
                <li class="flex gap-x-3">
                  <svg
                    class="h-6 w-5 flex-none text-red-900"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  geleverd met 2 geluks koekjes!
                </li>
              </ul>
            </div>
            <div class="pt-16 lg:px-8 lg:pt-0 xl:px-14">
              <h3
                id="tier-growth"
                class="text-base/7 font-semibold text-gray-900"
              >
                Familie Deal!
              </h3>
              <p class="mt-6 flex items-baseline gap-x-1">
                <span
                  class="text-5xl font-semibold tracking-tight text-gray-900"
                  >€40</span
                >
              </p>
              <p class="mt-10 text-sm/6 font-semibold text-gray-900">
                Een lekker en gezond pakket voor hel de familie!
              </p>
              <ul role="list" class="mt-6 space-y-3 text-sm/6 text-gray-600">
                <li class="flex gap-x-3">
                  <svg
                    class="h-6 w-5 flex-none text-red-900"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Genoeg eten voor 5!
                </li>
                <li class="flex gap-x-3">
                  <svg
                    class="h-6 w-5 flex-none text-red-900"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Free drinks!
                </li>
                <li class="flex gap-x-3">
                  <svg
                    class="h-6 w-5 flex-none text-red-900"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Keuze uit bijgerechten!
                </li>
                <li class="flex gap-x-3">
                  <svg
                    class="h-6 w-5 flex-none text-red-900"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Leverings prioriteit!
                </li>
                <li class="flex gap-x-3">
                  <svg
                    class="h-6 w-5 flex-none text-red-900"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  Extra mystery party box!
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="bg-red-900">
      <div
        class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8"
      >
        <nav
          class="-mb-6 flex flex-wrap justify-center gap-x-12 gap-y-3 text-sm/6"
          aria-label="Footer"
        >
          <a href="page's/contact.html" class="text-gray-400 hover:text-white"
            >Contact</a
          >
          <a href="page's/team.html" class="text-gray-400 hover:text-white"
            >Team</a
          >
          <a href="page's/menuItems.php" class="text-gray-400 hover:text-white"
            >Menu</a
          >
          <a href="page's/winkelwagen.php" class="text-gray-400 hover:text-white">Winkelwagen</a>
          <a href="page's/inlog.html" class="text-gray-400 hover:text-white"
            >Log in</a
          >
        </nav>
        <div class="mt-16 flex justify-center gap-x-10">
          <a
            href="https://www.facebook.com/RickAstley/"
            class="text-gray-400 hover:text-gray-300"
          >
            <span class="sr-only">Facebook</span>
            <svg
              class="size-6"
              fill="currentColor"
              viewBox="0 0 24 24"
              aria-hidden="true"
            >
              <path
                fill-rule="evenodd"
                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
          <a
            href="https://www.instagram.com/officialrickastley/?hl=nl"
            class="text-gray-400 hover:text-gray-300"
          >
            <span class="sr-only">Instagram</span>
            <svg
              class="size-6"
              fill="currentColor"
              viewBox="0 0 24 24"
              aria-hidden="true"
            >
              <path
                fill-rule="evenodd"
                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
          <a
            href="https://x.com/rickastley"
            class="text-gray-400 hover:text-gray-300"
          >
            <span class="sr-only">X</span>
            <svg
              class="size-6"
              fill="currentColor"
              viewBox="0 0 24 24"
              aria-hidden="true"
            >
              <path
                d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z"
              />
            </svg>
          </a>
          <a
            href="https://www.youtube.com/channel/UCuAXFkgsw1L7xaCfnd5JJOw"
            class="text-gray-400 hover:text-gray-300"
          >
            <span class="sr-only">YouTube</span>
            <svg
              class="size-6"
              fill="currentColor"
              viewBox="0 0 24 24"
              aria-hidden="true"
            >
              <path
                fill-rule="evenodd"
                d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
        </div>
        <p class="mt-10 text-center text-sm/6 text-gray-400">
          &copy; 2025 Ramen eet je samen, Inc. All rights reserved.
        </p>
      </div>
    </footer>
  </body>
</html>
