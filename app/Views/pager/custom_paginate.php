<?php
// custom_paginate.php

$pager->setSurroundCount(2);
?>
<script src="https://cdn.tailwindcss.com"></script>

<nav aria-label="Page navigation example" class="flex justify-center">
    <ul class="flex items-center -space-x-px h-8 text-sm">
        <?php if ($pager->hasPreviousPage()) : ?>
            <?php
            $firstPageClasses = "flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white";
            $prevPageClasses = $firstPageClasses;
            ?>
            <li>
                <a href="<?= $pager->getFirst() ?>" class="<?= $firstPageClasses ?>">
                    <span class="sr-only">First</span>
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href="<?= $pager->getPreviousPage() ?>" class="<?= $prevPageClasses ?>">
                    <span class="sr-only">Previous</span>
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <?php
            $linkClasses = "flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300";
            $activeClasses = "z-10 text-blue-600 border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white";
            $inactiveClasses = "hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white";
            ?>
            <li>
                <a href="<?= $link['uri'] ?>" class="<?= $linkClasses . ' ' . ($link['active'] ? $activeClasses : $inactiveClasses) ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNextPage()) : ?>
            <?php
            $nextPageClasses = "flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white";
            $lastPageClasses = $nextPageClasses . " rounded-e-lg";
            ?>
            <li>
                <a href="<?= $pager->getNextPage() ?>" class="<?= $nextPageClasses ?>">
                    <span class="sr-only">Next</span>
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href="<?= $pager->getLast() ?>" class="<?= $lastPageClasses ?>">
                    <span class="sr-only">Last</span>
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>