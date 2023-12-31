<div class="intro-y block sm:flex items-center h-10">
    <h2 class="text-lg font-medium truncate mr-5">
        Sales Report
    </h2>
    <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
        <i data-feather="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i> 
        <input type="text" class="datepicker input w-full sm:w-56 box pl-10">
    </div>
</div>
<div class="intro-y box p-5 mt-12 sm:mt-5">
    <div class="flex flex-col xl:flex-row xl:items-center">
        <div class="flex">
            <div>
                <div class="text-theme-20 dark:text-gray-300 text-lg xl:text-xl font-bold">$15,000</div>
                <div class="text-gray-600 dark:text-gray-600">This Month</div>
            </div>
            <div class="w-px h-12 border border-r border-dashed border-gray-300 dark:border-dark-5 mx-4 xl:mx-6"></div>
            <div>
                <div class="text-gray-600 dark:text-gray-600 text-lg xl:text-xl font-medium">$10,000</div>
                <div class="text-gray-600 dark:text-gray-600">Last Month</div>
            </div>
        </div>
        <div class="dropdown xl:ml-auto mt-5 xl:mt-0">
            <button class="dropdown-toggle button font-normal border dark:border-dark-5 text-white dark:text-gray-300 relative flex items-center text-gray-700"> Filter by Category <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i> </button>
            <div class="dropdown-box w-40">
                <div class="dropdown-box__content box dark:bg-dark-1 p-2 overflow-y-auto h-32"> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">PC & Laptop</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Smartphone</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Electronic</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Photography</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Sport</a> </div>
            </div>
        </div>
    </div>
    <div class="report-chart">
        <canvas id="report-line-chart" height="160" class="mt-6"></canvas>
    </div>
</div>