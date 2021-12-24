@if (session()->has('success'))
<div x-data="{show:true}"
     x-init="SetTimeout(()=>show=false,4000)"
     x-show="show"
     class="fixed bg-blue-500 text-white py-3 px-4 rounded-xl bottom-3 right-3 text-sm">
    <p>{{session('success')}}</p>
</div>
    
@endif