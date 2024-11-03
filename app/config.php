<?php

return [
    'database' => [
        'host'=>'mysql',
        'port'=>3306,
        'dbname'=>'challenge',
        'charset'=>'utf8mb4'
    ],
    'table' => [
        'div' => 'relative overflow-x-auto shadow-md sm:rounded-lg',
        'table' => 'w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400',
        'thead' => 'text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400',
        'th' =>'px-6 py-3',
        'tr' => 'bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800',
        'td' => 'px-6 py-4',
    ],
    'description_list' => [
        'container' => 'mt-6 border-t border-gray-100',
        'dl' => 'divide-y divide-gray-100',
        'div' => 'sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0',
        'dt' => 'text-sm/6 font-medium text-gray-900',
        'dd' => 'mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0',
    ],
    'form'=> [
        'label' => 'block text-sm font-medium leading-6 text-gray-900',
        'div' => 'mt-2',
        'input' => 'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6',
        'input_error' => 'text-red-500 text-xs mt-2',
        'select' => 'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6',
    ],
    'button_create' => 'rounded-md bg-green-100 px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-green-200',
    'button_delete' => 'rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600',
    'button_edit' => 'rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600',
    'button_cancel' => 'rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray
    -600',
    'button_save' => 'rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600',
    
];