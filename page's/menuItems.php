<?php
include '../menu.php';
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
<header class="absolute inset-x-0 top-0 z-50 bg-white shadow-md">
    <nav
            class="flex items-center justify-between p-6 lg:px-8"
            aria-label="Global"
    >
        <!-- Logo Section -->
        <div class="flex lg:flex-1">
            <a href="../index.php" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="../media/ramen.png" alt="" />
            </a>
        </div>

        <!-- Hamburger Menu Button (Visible on Mobile) -->
        <div class="flex lg:hidden">
            <button
                    type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-red-900"
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
            <a href="../index.php" class="text-sm/6 font-semibold text-red-900"
            >Home</a
            >
            <a href="menu.html" class="text-sm/6 font-semibold text-red-900"
            >Menu</a
            >
            <a href="team.html" class="text-sm/6 font-semibold text-red-900"
            >Team</a
            >
            <a href="contact.html" class="text-sm/6 font-semibold text-red-900"
            >Contact</a
            >
            <a href="winkelwagen.php" class="text-sm/6 font-semibold text-red-900"
            >Winkelwagen</a
            >
        </div>

        <!-- Login Link (Desktop Only) -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="inlog.html" class="text-sm/6 font-semibold text-red-900"
            >Log in <span aria-hidden="true">&rarr;</span></a
            >
        </div>
    </nav>
    <!-- Mobile Menu (Hidden by Default) -->
    <div id="mobile-menu" class="hidden bg-red-900 lg:hidden">
        <a
                href="../index.php"
                class="block text-sm font-semibold text-white px-6 py-4"
        >Home</a
        >
        <a
                href="menuItems.php"
                class="block text-sm font-semibold text-white px-6 py-4"
        >Menu</a
        >
        <a
                href="team.html"
                class="block text-sm font-semibold text-white px-6 py-4"
        >Team</a
        >
        <a
                href="contact.html"
                class="block text-sm font-semibold text-white px-6 py-4"
        >Contact</a
        >
        <a href="winkelwagen.php" class="block text-sm font-semibold text-white px-6 py-4"
        >Winkelwagen</a
        >
    </div>
</header>

<!-- Search Bar Positioned Below Menu -->
<div class="mt-24 bg-gray-100 py-4">
    <form
            class="flex items-center max-w-lg mx-auto px-4 sm:px-6 lg:px-8"
            aria-label="Search Form"
    >
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div
                    class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
            >
                <svg
                        class="w-4 h-4 text-gray-500 dark:text-gray-400"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 18 20"
                >
                    <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"
                    />
                </svg>
            </div>
            <input
                    type="text"
                    id="simple-search"
                    onkeyup="myFunction()"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-900 focus:border-red-900 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-900 dark:focus:border-red-900"
                    placeholder="Search branch name..."
                    required
            />
        </div>
        <button
                type="submit"
                class="p-2.5 ms-2 text-sm font-medium text-white bg-red-900 rounded-lg border border-red-900 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-900 dark:bg-red-900 dark:hover:bg-red-300 dark:focus:ring-red-900"
        >
            <svg
                    class="w-4 h-4"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 20 20"
            >
                <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                />
            </svg>
            <span class="sr-only">Search</span>
        </button>
    </form>
</div>

<div class="bg-gray-100">
    <div
            class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8"
    >

        <div
                class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8"
        >
            <?php
            if ($aantalRijen > 0) { ?>
                <ul>
                    <?php foreach ($resultaten as $rij) { ?>
                        <li>
                            <strong> Naam</strong> <?= $rij["Naam"] ?><br>
                            <strong>Prijs</strong> <?= $rij["Prijs"] ?><br>
                            <strong>Beschrijving</strong> <?= $rij["Beschrijving"] ?><br>
                            <strong>Allergenen</strong> <?= $rij["Allergenen"] ?><br>
                            <img src="<?= $rij["Foto"] ?>" alt=""/> <br>
                            <form action="../winkelwagenPOST.php" method="POST">
                                <input type="hidden" name="Naam" value="<?= $rij["Naam"] ?>"/>
                                <input type="hidden" name="Prijs" value="<?= $rij["Prijs"] ?>"/>

                                <button type="submit" class="rounded-full bg-indigo-600 px-2.5 py-1 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Toevoegen aan winkelmandje</button>
                            </form>
                            <br>
                        </li>
                        <hr>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                <p>Geen resultaten gevonden</p>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>