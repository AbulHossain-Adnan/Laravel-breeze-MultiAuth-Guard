
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   Hi Admin You Are Log in<form method="post" action="{{route('admin.logout')}}">
                    @csrf
                       <button type="submit">Logout</button>
                   </form>
                    
                </div>
            </div>
        </div>
    </div>

