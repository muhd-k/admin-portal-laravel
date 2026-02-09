@extends('layouts.admin')

@section('header', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Stat Card 1 -->
    <div class="bg-dark-lighter rounded-xl p-6 border border-gray-700 shadow-lg relative overflow-hidden group hover:border-primary/50 transition-colors duration-300">
        <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-primary/10 rounded-full blur-xl group-hover:bg-primary/20 transition-all"></div>
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-sm font-medium text-gray-400">Total Users</h3>
            <span class="p-2 rounded-lg bg-blue-500/10 text-blue-400">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </span>
        </div>
        <div class="text-3xl font-bold text-white mb-1">1,257</div>
        <div class="text-xs text-green-400 flex items-center">
            <svg class="w-3 h-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
            +12% from last month
        </div>
    </div>

    <!-- Stat Card 2 -->
    <div class="bg-dark-lighter rounded-xl p-6 border border-gray-700 shadow-lg relative overflow-hidden group hover:border-primary/50 transition-colors duration-300">
        <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-purple-500/10 rounded-full blur-xl group-hover:bg-purple-500/20 transition-all"></div>
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-sm font-medium text-gray-400">Active Tickets</h3>
            <span class="p-2 rounded-lg bg-purple-500/10 text-purple-400">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </span>
        </div>
        <div class="text-3xl font-bold text-white mb-1">42</div>
        <div class="text-xs text-red-400 flex items-center">
            <svg class="w-3 h-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
            </svg>
            -5% from last month
        </div>
    </div>

     <!-- Stat Card 3 -->
     <div class="bg-dark-lighter rounded-xl p-6 border border-gray-700 shadow-lg relative overflow-hidden group hover:border-primary/50 transition-colors duration-300">
        <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-yellow-500/10 rounded-full blur-xl group-hover:bg-yellow-500/20 transition-all"></div>
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-sm font-medium text-gray-400">Open Disputes</h3>
            <span class="p-2 rounded-lg bg-yellow-500/10 text-yellow-400">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </span>
        </div>
        <div class="text-3xl font-bold text-white mb-1">8</div>
        <div class="text-xs text-gray-400">Requires attention</div>
    </div>

     <!-- Stat Card 4 -->
     <div class="bg-dark-lighter rounded-xl p-6 border border-gray-700 shadow-lg relative overflow-hidden group hover:border-primary/50 transition-colors duration-300">
        <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-green-500/10 rounded-full blur-xl group-hover:bg-green-500/20 transition-all"></div>
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-sm font-medium text-gray-400">Total Revenue</h3>
            <span class="p-2 rounded-lg bg-green-500/10 text-green-400">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
        </div>
        <div class="text-3xl font-bold text-white mb-1">$45,231</div>
        <div class="text-xs text-green-400 flex items-center">
            <svg class="w-3 h-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
            +8.2% from last month
        </div>
    </div>
</div>

<div class="bg-dark-lighter rounded-xl border border-gray-700 shadow-lg">
    <div class="p-6 border-b border-gray-700">
        <h3 class="text-lg font-medium text-white">Recent Tickets</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-gray-400">
            <thead class="bg-gray-800/50 text-gray-200 uppercase font-medium">
                <tr>
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">User</th>
                    <th class="px-6 py-4">Subject</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Priority</th>
                    <th class="px-6 py-4">Date</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
                <tr class="hover:bg-gray-800/30 transition-colors">
                    <td class="px-6 py-4 text-white font-medium">#1024</td>
                    <td class="px-6 py-4">John Doe</td>
                    <td class="px-6 py-4">Payment failed for order #5521</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 rounded-full text-xs font-semibold bg-green-500/10 text-green-400">Open</span>
                    </td>
                    <td class="px-6 py-4 text-red-400 font-medium">High</td>
                    <td class="px-6 py-4">2 mins ago</td>
                </tr>
                <tr class="hover:bg-gray-800/30 transition-colors">
                    <td class="px-6 py-4 text-white font-medium">#1023</td>
                    <td class="px-6 py-4">Sarah Smith</td>
                    <td class="px-6 py-4">Question about shipping</td>
                    <td class="px-6 py-4">
                         <span class="px-2 py-1 rounded-full text-xs font-semibold bg-yellow-500/10 text-yellow-400">In Progress</span>
                    </td>
                    <td class="px-6 py-4 text-blue-400 font-medium">Medium</td>
                    <td class="px-6 py-4">1 hour ago</td>
                </tr>
                 <tr class="hover:bg-gray-800/30 transition-colors">
                    <td class="px-6 py-4 text-white font-medium">#1022</td>
                    <td class="px-6 py-4">Mike Tests</td>
                    <td class="px-6 py-4">Account locked out</td>
                    <td class="px-6 py-4">
                         <span class="px-2 py-1 rounded-full text-xs font-semibold bg-gray-700 text-gray-300">Resolved</span>
                    </td>
                    <td class="px-6 py-4 text-red-400 font-medium">High</td>
                    <td class="px-6 py-4">Yesterday</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
