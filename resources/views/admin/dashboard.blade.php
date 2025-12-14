<x-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Total Jobs</h3>
                <p class="text-3xl font-bold text-blue-600">{{ $jobsCount ?? 0 }}</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Total News</h3>
                <p class="text-3xl font-bold text-green-600">{{ $newsCount ?? 0 }}</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Contact Messages</h3>
                <p class="text-3xl font-bold text-yellow-600">{{ $messagesCount ?? 0 }}</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Total Users</h3>
                <p class="text-3xl font-bold text-purple-600">{{ $usersCount ?? 0 }}</p>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Quick Actions</h2>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('jobs.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    View All Jobs
                </a>
                <a href="{{ route('news') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
                    View All News
                </a>
                <a href="{{ route('news.create') }}" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded">
                    Create News
                </a>
            </div>
        </div>
    </div>
</x-layout>

