<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex bg-white">
       

        <!-- Main content -->
        <main class="w-full bg-white justify-center items-center ">
            

            <section class="p-4">
                <!-- Main content area -->
                <div class="grid grid-cols-2 gap-4 mb-20">
                    <!-- Orders table -->
                    <div class="bg-white p-4 rounded-lg shadow-2xl">
                        <h2 class="text-2xl font-bold text-purple-800 mb-4">Orders</h2>
                        <table class="w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Order ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Customer Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Total Amount</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-gray-100 hover:bg-gray-200">
                                    <td class="px-6 py-4 whitespace-nowrap">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                                    <td class="px-6 py-4 whitespace-nowrap">$100.00</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-500 text-white">Pending</span>
                                    </td>
                                </tr>
                                <tr class="bg-white hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap">2</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                                    <td class="px-6 py-4 whitespace-nowrap">$50.00</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-500 text-white">Completed</span>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                    

                    <!-- Sales chart -->
                    <div class="bg-white p-4 rounded-lg shadow-2xl">
                        <h2 class="text-2xl font-bold text-purple-800 mb-4">Order Chart</h2>
                        <canvas id="orderChart"></canvas>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-32">
                    <!-- Orders table -->
                    <div class="bg-white p-4 rounded-lg shadow-2xl">
                        <h2 class="text-2xl font-bold text-purple-800 mb-4">Mockup Orders</h2>
                        <table class="w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Order ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Customer Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Total Amount</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-gray-100 hover:bg-gray-200">
                                    <td class="px-6 py-4 whitespace-nowrap">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                                    <td class="px-6 py-4 whitespace-nowrap">$100.00</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-500 text-white">Pending</span>
                                    </td>
                                </tr>
                                <tr class="bg-white hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap">2</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                                    <td class="px-6 py-4 whitespace-nowrap">$50.00</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-500 text-white">Completed</span>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                    

                    <!-- Sales chart -->
                    <div class="bg-white p-4 rounded-lg shadow-2xl">
                        <h2 class="text-2xl font-bold text-purple-800 mb-4">Mockup Orders Chart</h2>
                        <canvas id="MockupOrder"></canvas>
                    </div>
                </div>

                <!-- Orders table -->
                <div class="bg-white p-4 rounded-lg shadow-2xl">
                    <h2 class="text-2xl font-bold text-purple-800 mb-4">Mockup Orders</h2>
                    
<div class="w-full max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center justify-between mb-4 w-full">
        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Products</h5>
        <a href="http://127.0.0.1:8000/products?category=tshirt&sexe=male" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
            View all
        </a>
   </div>
   <div class="flow-root">
        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 w-full">
            @foreach ($products as $product)
                 <li class="py-4 sm:py-4">
                <div class="flex items-center space-x-6">
                    <div class="flex-shrink-0">
                        <img class="w-20 h-20 rounded-md " src={{$product->image}} alt="Neil image">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            {{$product->brand}}
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            {{$product->name}}
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                           stock : {{$product->stock}}
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            date : {{$product->date}}
                         </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        {{$product->price}} DH
                    </div>
                </div>
            </li>
          
           @endforeach
           
        </ul>
   </div>
</div>

                </div>
            </section>
        </main>
    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Get sales data from the server (you can replace this with your own data retrieval logic)
    const odersData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July' , 'decembre'],
        datasets: [
            {
                label: 'Orders',
                data: [50, 100, 70, 150, 100, 102, 400 , 300],
                backgroundColor: 'rgba(128, 0, 128, 0.5)',
                borderColor: 'rgba(128, 0, 128, 1)',
                borderWidth: 1
            }
        ]
    };
    const MockupodersData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July' , 'decembre'],
        datasets: [
            {
                label: 'Mockup Orders',
                data: [10, 50, 30, 100, 90, 140, 80 , 180],
                backgroundColor: 'rgba(255, 165, 0)',
                borderColor: 'rgba(255, 165, 0)',
                borderWidth: 1
            }
        ]
    };

    // Render the sales chart using Chart.js
    const ctx = document.getElementById('orderChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: odersData,
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    

    const ctxx = document.getElementById('MockupOrder').getContext('2d');
    new Chart(ctxx, {
        type: 'line',
        data: MockupodersData,
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
